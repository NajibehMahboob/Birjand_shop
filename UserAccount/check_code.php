<?php
session_start();
include "../db_config.php";

if (!isset($_POST['code'], $_SESSION['phone'])) {
    header("Location: phone.php");
    exit();
}

$phone = $_SESSION['phone'];
$code  = $_POST['code'];

// بررسی کد (مثلاً 12345)
if ($code == "12345") {
    // شماره تأیید شد
    $stmt = $conn->prepare("UPDATE users SET is_verified = 1 WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->close();

    $_SESSION['verified'] = true; // برای ورود به داشبورد
    header("Location: dashboard.php");
    exit();
} else {
    echo "کد اشتباه است!";
}
// بعد از اینکه کد تأیید شد
$phone = $_SESSION['login_phone'];

$stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

$_SESSION['user_id'] = $user['id'];
?>