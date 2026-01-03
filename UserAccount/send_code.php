<?php
session_start();
include "../db_config.php";


if (!isset($_SESSION['login_phone'])) {
    header("Location: sign_in.php");
    exit();
}

$phone = $_SESSION['login_phone'];
$otp_sent = false;
$msg = "";

if (!isset($_SESSION['otp'])) {
    $otp = rand(10000, 99999); 
    $_SESSION['otp'] = $otp;

    $otp_sent = true;
    $msg = "کد شما: $otp"; 
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ارسال کد تأیید</title>
<style>
body { font-family: Vazir, sans-serif; background:#f0f2f5; display:flex; justify-content:center; align-items:center; height:100vh; margin:0; }
.container { background:#fff; padding:2rem; border-radius:20px; width:340px; text-align:center; box-shadow:0 4px 15px rgba(0,0,0,0.1); }
input { width:100%; padding:0.8rem; font-size:1.2rem; text-align:center; border-radius:10px; border:1px solid #d1d5db; margin-top:10px; }
button { margin-top:1rem; width:100%; padding:0.8rem; background:#386641; color:#fff; border:none; border-radius:10px; cursor:pointer; }
button:hover { background:#2b5033; }
.msg { margin-bottom:1rem; color:#333; }
</style>
</head>
<body>
<div class="container">
    <h2>تأیید شماره</h2>
    <p>کد ارسال‌شده را وارد کنید</p>
    <?php if($otp_sent) echo "<div class='msg'>$msg</div>"; ?>
    <form action="check_code.php" method="post">
        <input type="text" name="code" maxlength="5" pattern="\d{5}" placeholder="12345" required>
        <button type="submit">تأیید</button>
    </form>
</div>
</body>
</html>
