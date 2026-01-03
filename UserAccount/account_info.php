<?php
session_start();
include "../db_config.php";

$phoneSession = $_SESSION['login_phone'] ?? '';

if ($phoneSession === '') {
    die("کاربر لاگین نکرده است.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = trim($_POST['username']);
    $newPassword = trim($_POST['newPassword']);
    $confirmPassword = trim($_POST['confirmPassword']);

    if ($newUsername === "") {
        $_SESSION['account_msg'] = "نام کاربری نمی‌تواند خالی باشد.";
        $_SESSION['account_msg_class'] = "error";
    } elseif ($newPassword !== "" && $newPassword !== $confirmPassword) {
        $_SESSION['account_msg'] = "رمز عبور و تکرار آن یکی نیست.";
        $_SESSION['account_msg_class'] = "error";
    } else {

        // چک کردن تکراری بودن نام کاربری
        $check = $conn->prepare("SELECT id FROM users WHERE username = ? AND phone != ?");
        $check->bind_param("ss", $newUsername, $phoneSession);
        $check->execute();

        if ($check->get_result()->num_rows > 0) {
            $_SESSION['account_msg'] = "این نام کاربری قبلاً استفاده شده است.";
            $_SESSION['account_msg_class'] = "error";
        } else {
            if ($newPassword !== "") {
                $hash = password_hash($newPassword, PASSWORD_DEFAULT);
                $update = $conn->prepare(
                    "UPDATE users SET username = ?, password = ? WHERE phone = ?"
                );
                $update->bind_param("sss", $newUsername, $hash, $phoneSession);
            } else {
                $update = $conn->prepare(
                    "UPDATE users SET username = ? WHERE phone = ?"
                );
                $update->bind_param("ss", $newUsername, $phoneSession);
            }

            $update->execute();
            $update->close();

            $_SESSION['account_msg'] = "تغییرات با موفقیت ذخیره شد.";
            $_SESSION['account_msg_class'] = "success";
        }
        $check->close();
    }

    header("Location: account_info.php");
    exit();
}

$msg = $_SESSION['account_msg'] ?? "";
$msgClass = $_SESSION['account_msg_class'] ?? "";
unset($_SESSION['account_msg'], $_SESSION['account_msg_class']);
?>




<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اطلاعات حساب کاربری</title>
<style>
body {
    font-family: "Vazir", sans-serif;
    background: #f3f4f6;
    margin: 0;
    padding: 0;
}
.header {
    background: #2b5033;
    color: #fff;
    padding: 15px 25px;
    text-align: center;
    font-size: 1.2rem;
}
.container {
    max-width: 560px;
    margin: 30px auto;
    background: #fff;
    padding: 30px 25px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    position: relative;
}
form label {
    display: block;
    margin-top: 15px;
    margin-bottom: 5px;
    margin-right: 10px;
    font-weight: 600;
}
form input {
    width: 90%;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    outline: none;
    font-size: 1rem;
}
form input:focus {
    border-color: #386641;
}
.password-section {
    margin-top: 25px;
    padding: 15px;
    background: #f9fafb;
    border-radius: 10px;
}
button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background-color: #2b5033;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}
button:hover {
    background-color: #386641;
}

.msg-box {
    position: absolute;
    top: -70px;
    left: 50%;
    transform: translateX(-50%);
    padding: 12px 20px;
    border-radius: 10px;
    font-weight: 600;
    min-width: 300px;
    text-align: center;
    color: #fff;
    animation: fadeIn 0.5s;
}
.msg-box.success { background: #22c55e; }
.msg-box.error { background: #ef4444; }

@keyframes fadeIn {
    from {opacity:0; transform: translateX(-50%) translateY(-10px);}
    to {opacity:1; transform: translateX(-50%) translateY(0);}
}
</style>
</head>
<body>

<div class="header">
    اطلاعات حساب کاربری
</div>

<div class="container">

    <?php if($msg !== ""): ?>
    <div class="msg-box <?php echo $msgClass; ?>">
        <?php echo $msg; ?>
    </div>
    <?php endif; ?>

    <form action="" method="POST">

<label>نام کاربری</label>
<input type="text"
       name="username"
       value="<?php echo htmlspecialchars($username); ?>"
       required>

<div class="password-section">
    <h4>تغییر رمز عبور</h4>
    <input type="password" name="newPassword" placeholder="رمز جدید">
    <input type="password" name="confirmPassword" placeholder="تکرار رمز جدید">
</div>

<button type="submit">ثبت تغییرات</button>
</form>


</div>

</body>
</html>
