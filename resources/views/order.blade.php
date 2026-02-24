<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
</head>
<body style="text-align:center; margin-top:100px;">

    <h2>Place Your Order</h2>
    <p>Product: Demo Product</p>
    <p>Price: $10</p>

    <a href="{{ route('paypal.pay') }}">
        <button style="padding:10px 20px;">Pay with PayPal</button>
    </a>

</body>
</html>
