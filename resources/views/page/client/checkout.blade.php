<?php
    $req_time = time();
    $merchant_id = 'ec376316';
    $tran_id = Str::random(20);
    $firstname="Fristname";
    $lastname="Customer Last name";
    $email="ema_il@textdomain.com";
    $phone="0965965965";
    $amount=$product->price;
    $type="purcahse";
    $payment_option="cards";
    $items="W3snbmFtZSc6J3Rlc3QnLCdxdWFudGl0eSc6JzEnLCdwcmljZSc6JzEuMDAnfV0=";
    $currency="USD";
    $continue_success_url="www.staticmerchanturl.com/Success";
    $return_params="500 Character notes included here will be returned on pushback notification after transaction is
    successful.";
    $public_key = '3a33916e8896c6fc0acc60b1be16df6f7405ba63';
    $string = $req_time . $merchant_id . $tran_id . $amount . $payment_option . $currency;
    $hash = hash_hmac('sha512', $string,$public_key, true);
    $encoded_hash = base64_encode($hash);
?>

<form action="https://checkout-sandbox.payway.com.kh/api/payment-gateway/v1/payments/purchase" method='POST'>
    <input type="hidden" name="req_time" value="{{$req_time}}">
    <input type="hidden" name="merchant_id" value="{{$merchant_id}}">
    <input type="hidden" name="tran_id" value="{{$tran_id}}">
    <input type="hidden" name="amount" value="{{$amount}}">
    <input type="hidden" name="currency" value="{{$currency}}">
    <input type="hidden" name="payment_option" value="{{$payment_option}}">
    <input type="hidden" name="hash" value="{{$encoded_hash}}">
    <input type="submit" name="submint" class="bg-7eleven font-bold text-white px-5 py-2 rounded-3xl" value="Check out">
</form>