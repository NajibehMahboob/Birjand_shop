<?php
session_start();
include "../db_config.php";

if (!isset($_POST['phone'])) {
    header("Location: sign_up.php");
    exit();
}

$phone = trim($_POST['phone']);
$_SESSION['phone'] = $phone;

// چک اگر شماره قبلاً هست
$stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // شماره جدید، یه رکورد بساز
    $stmt2 = $conn->prepare("INSERT INTO users (phone, is_verified) VALUES (?, 0)");
    $stmt2->bind_param("s", $phone);
    $stmt2->execute();
    $stmt2->close();
}

$stmt->close();
$conn->close();

// حالا کاربر به verify.php میره
header("Location: verify.php");
exit();
