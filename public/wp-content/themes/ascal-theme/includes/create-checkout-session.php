<?php
require_once get_template_directory() . '/includes/stripe-php/init.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

header('Content-Type: application/json');

$amount   = isset($_POST['amount']) ? intval($_POST['amount']) : 0;
$type     = isset($_POST['type']) ? sanitize_text_field($_POST['type']) : 'one_time';

if ($amount <= 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid amount']);
    exit;
}

$success_url = home_url('/thank-you/');
$cancel_url  = home_url('/donate/');

try {
    if ($type === 'monthly') {
        // Create a recurring price on the fly
        $price = \Stripe\Price::create([
            'currency'     => 'eur',
            'unit_amount'  => $amount * 100, // cents
            'recurring'    => ['interval' => 'month'],
            'product_data' => ['name' => 'Monthly Donation – ASCA Luxembourg'],
        ]);

        $session = \Stripe\Checkout\Session::create([
            // 'payment_method_types' => ['card', 'paypal'],
            'line_items'           => [[
                'price'    => $price->id,
                'quantity' => 1,
            ]],
            'mode'        => 'subscription',
            'success_url' => $success_url,
            'cancel_url'  => $cancel_url,
        ]);
    } else {
        $session = \Stripe\Checkout\Session::create([
            // 'payment_method_types' => ['card'],
            'line_items'           => [[
                'price_data' => [
                    'currency'     => 'eur',
                    'unit_amount'  => $amount * 100,
                    'product_data' => ['name' => 'One-time Donation – ASCA Luxembourg'],
                ],
                'quantity' => 1,
            ]],
            'mode'        => 'payment',
            'success_url' => $success_url,
            'cancel_url'  => $cancel_url,
        ]);
    }

    echo json_encode(['url' => $session->url]);

} catch (\Stripe\Exception\ApiErrorException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}