<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51PVHjHARnjR9eGbT5k3de9y2e0wW2v2pbDT9NZJYO1heMON6IO2YyeUZea4b516HtLReOS48fZPnjPONWQxwTSR000OxwLxhm3";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/paySuccess.php",
    "cancel_url" => "http://localhost/indexStripe.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "za",
                "unit_amount" => 7000,
                "product_data" => [
                    "name" => "Silver Membership"
                ]
            ]
        ]        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);