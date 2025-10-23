<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $message = "درخواست مشاوره از طریق فرم پشتیبانی"; // میتونی این رو به عنوان پیام پیش‌فرض برای تیکت قرار بدی

    // آماده سازی و اجرای کوئری
    $stmt = $conn->prepare("INSERT INTO tickets (full_name, phone_number, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullName, $phoneNumber, $message);

    if ($stmt->execute()) {
        echo '<p style="color: green;">تیکت شما با موفقیت ارسال شد. مشاوران ما به زودی با شما تماس خواهند گرفت.</p>';
    } else {
        echo '<p style="color: red;">خطا در ارسال تیکت: ' . $stmt->error . '</p>';
    }

    $stmt->close();
    $conn->close();
} else {
    echo '<p style="color: red;">درخواست نامعتبر.</p>';
}
?>