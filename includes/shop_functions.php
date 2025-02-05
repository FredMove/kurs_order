<?php
require_once('db.php');

function getCategories() {
    global $conn;
    $sql = "SELECT * FROM product_categories ORDER BY name";
    $result = $conn->query($sql);
    
    $categories = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }
    }
    return $categories;
}

function getProductsByCategory($category_id) {
    global $conn;
    $sql = "SELECT * FROM products WHERE category_id = ? AND in_stock = TRUE ORDER BY name";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $products = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

function createOrder($user_data, $products) {
    global $conn;
    
    // Начинаем транзакцию
    $conn->begin_transaction();
    
    try {
        // Создаем или получаем пользователя
        $sql = "INSERT INTO users (name, email, phone, address) VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), name=?, phone=?, address=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", 
            $user_data['name'], 
            $user_data['email'], 
            $user_data['phone'], 
            $user_data['address'],
            $user_data['name'],
            $user_data['phone'],
            $user_data['address']
        );
        $stmt->execute();
        $user_id = $stmt->insert_id;

        // Создаем заказ
        $total_amount = 0;
        foreach($products as $product) {
            $total_amount += $product['price'] * $product['quantity'];
        }

        $sql = "INSERT INTO orders (user_id, total_amount) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("id", $user_id, $total_amount);
        $stmt->execute();
        $order_id = $stmt->insert_id;

        // Добавляем товары в заказ
        $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        foreach($products as $product) {
            $stmt->bind_param("iidd", 
                $order_id, 
                $product['id'], 
                $product['quantity'], 
                $product['price']
            );
            $stmt->execute();
        }

        // Завершаем транзакцию
        $conn->commit();
        return $order_id;
    } catch (Exception $e) {
        // В случае ошибки отменяем все изменения
        $conn->rollback();
        throw $e;
    }
}

function getProductPrice($product_id) {
    global $conn;
    $sql = "SELECT price FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        return $row['price'];
    }
    return 0;
}
