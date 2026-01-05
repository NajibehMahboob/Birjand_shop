<?php
include '../db_config.php';
session_start();
header('Content-Type: application/json');

// بررسی لاگین بودن کاربر
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'لطفا ابتدا وارد شوید']);
    exit();
}

$user_id = $_SESSION['user_id'];
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    // ۱. ایجاد یک رکورد در جدول سفارشات
    $sql_order = "INSERT INTO orders (user_id, total_price, status, created_at) 
                  VALUES ('$user_id', 0, 'pending', NOW())";
    
    if ($conn->query($sql_order)) {
        $order_id = $conn->insert_id;
        $total_all = 0;
        
        // ۲. ذخیره جزئیات در جدول order_items
        foreach ($data as $item) {
            $p_id = intval($item['id']);
            $qty = intval($item['qty']);
            $price = floatval($item['price']);
            $weight_name = $conn->real_escape_string($item['weight_name']);
            $total_all += ($price * $qty);
            
            $sql_item = "INSERT INTO order_items (order_id, product_id, quantity, price, weight_name) 
                         VALUES ('$order_id', '$p_id', '$qty', '$price', '$weight_name')";
            $conn->query($sql_item);
            
            // کاهش موجودی محصول (اگر جدول موجودی دارید)
            // $conn->query("UPDATE products SET stock = stock - $qty WHERE id = $p_id");
        }
        
        // ۳. آپدیت قیمت کل در جدول سفارشات
        $conn->query("UPDATE orders SET total_price = '$total_all' WHERE id = '$order_id'");
        
        echo json_encode([
            'success' => true, 
            'order_id' => $order_id,
            'total' => $total_all
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'خطا در ایجاد سفارش']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'سبد خرید خالی است']);
}

$conn->close();
?>