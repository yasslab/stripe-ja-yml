<?php
//Composerでstripe/stripe-php をrequire済み
require_once __FILE__. './jp.php';

try{
    Stripe\Stripe::setApiKey('sk_test_YOUR_KEY');
    Stripe\Charge::create([]);
}catch(Stripe\Error\Base $e) {
    $err = $e->getJsonBody()['error'];
    if(key_exists('code', $err)) {
        echo $messages[$code];
        // -> 情報が不足しています
    }
}





