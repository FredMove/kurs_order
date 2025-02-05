<?php
require_once('shop_functions.php');

header('Content-Type: application/json');

try {
    $user_data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address']
    ];

    $product_id = $_POST['productId'];
    $products = [[
        'id' => $product_id,
        'quantity' => $_POST['quantity'],
        'price' => getProductPrice($product_id)
    ]];

    $order_id = createOrder($user_data, $products);
    echo json_encode(['success' => true, 'order_id' => $order_id]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
