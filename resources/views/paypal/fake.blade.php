<!DOCTYPE html>
<html>
<head>
    <title>PayPal Sandbox</title>
</head>
<body style="text-align:center; margin-top:100px;">
    <h2>PayPal Sandbox (Demo)</h2>
    <p>Amount: $10.00</p>

    <a href="{{ route('paypal.success') }}">
        <button style="padding:10px 20px;">Confirm Payment</button>
    </a>

    <a href="{{ route('paypal.cancel') }}">
        <button style="padding:10px 20px;">Cancel</button>
    </a>
</body>
</html>
