<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Payment;
use App\Models\Course;

class PayPalController extends Controller
{
    public function pay(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel'),
                "brand_name" => "Quiz System",
                "locale" => "en-US",
                "landing_page" => "BILLING",
                "shipping_preference" => "NO_SHIPPING",
                "user_action" => "PAY_NOW"
            ],
            "purchase_units" => [
                [
                    "description" => $request->course_name,
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => number_format($request->amount, 2, '.', '')
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            // Save payment to database
            Payment::create([
                'user_id' => auth()->id(),
                'course_id' => $request->course_id,
                'payment_id' => $response['id'],
                'amount' => $request->amount,
                'currency' => 'USD',
                'status' => 'pending'
            ]);

            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return redirect()->back()
            ->with('error', 'Something went wrong with PayPal');
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Update payment status
            Payment::where('payment_id', $request->token)
                ->update([
                    'payer_id' => $request->PayerID,
                    'status' => 'completed'
                ]);

            return redirect()->route('user.dashboard')
                ->with('success', 'Payment successful! You can now start the quiz. 🎉');
        }

        return redirect()->back()
            ->with('error', 'Payment failed. Please try again.');
    }

    public function cancel()
    {
        return redirect()->back()
            ->with('error', 'Payment cancelled.');
    }
}