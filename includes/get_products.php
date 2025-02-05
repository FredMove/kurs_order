<?php
require_once('shop_functions.php');

header('Content-Type: application/json');

if (isset($_GET['category_id'])) {
    $products = getProductsByCategory($_GET['category_id']);
    echo json_encode($products);
} else {
    echo json_encode([]);
}
