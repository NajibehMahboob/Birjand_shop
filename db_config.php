<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "birjandshop"; 

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// تنظیم کاراکتر ست برای پشتیبانی از فارسی
$conn->set_charset("utf8mb4");
?>