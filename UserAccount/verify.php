<?php
session_start();
include "../db_config.php";

if (!isset($_POST['phone']) && !isset($_SESSION['phone'])) {
    header("Location: sign_up.php");
    exit();
}

$show_modal = false; 
$phone = "";


if (isset($_POST['phone'])) {
    $phone = trim($_POST['phone']);
    $_SESSION['phone'] = $phone;

    $stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $show_modal = true;
    } else {
       
        $stmt2 = $conn->prepare("INSERT INTO users (phone, is_verified) VALUES (?, 0)");
        $stmt2->bind_param("s", $phone);
        $stmt2->execute();
        $stmt2->close();
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تأیید شماره</title>
<style>
body {
  font-family: Vazir, sans-serif;
  background: linear-gradient(135deg,#f3f4f6,#e0e7ff);
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
  margin:0;
}
.container {
  background:#fff;
  padding:2rem;
  border-radius:20px;
  width:340px;
  text-align:center;
  box-shadow:0 4px 15px rgba(0,0,0,0.1);
}
input {
  width:100%;
  padding:0.8rem;
  font-size:1.2rem;
  text-align:center;
  border-radius:10px;
  border:1px solid #d1d5db;
  margin-top: 10px;
}
button {
  margin-top:1rem;
  width:100%;
  padding:0.8rem;
  background:#386641;
  color:#fff;
  border:none;
  border-radius:10px;
  cursor: pointer;
}
button:hover {
  background:#2b5033;
}


.modal {
  display: none;
  position: fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background: rgba(0,0,0,0.5);
  justify-content:center;
  align-items:center;
  z-index: 999;
}
.modal-content {
  background:#fff;
  padding:2rem;
  border-radius:20px;
  width:320px;
  text-align:center;
  box-shadow:0 4px 20px rgba(0,0,0,0.2);
}
.modal-content h2 {
  margin-bottom: 1rem;
  color:#b91c1c;
}
.modal-content p {
  margin-bottom: 1.5rem;
}
.modal-content a {
  display:inline-block;
  padding:0.8rem 1.5rem;
  background:#386641;
  color:#fff;
  border-radius:10px;
  text-decoration:none;
}
.modal-content a:hover {
  background:#2b5033;
}
</style>
</head>
<body>

<div class="container">
  <h2>کد تأیید</h2>
  <p>کد ارسال‌شده را وارد کنید</p>

  <form action="check_code.php" method="post">
    <input type="text" name="code" maxlength="5" pattern="\d{5}" placeholder="12345" required>
    <button type="submit">تأیید</button>
  </form>
</div>

<?php if($show_modal): ?>
<div class="modal" id="modal">
  <div class="modal-content">
    <h2>⚠ شماره شما قبلاً ثبت شده است!</h2>
    <p>شما قبلاً ثبت نام کرده‌اید. می‌توانید وارد حساب کاربری شوید.</p>
    <a href="sign_in.php">وارد شوید</a>
  </div>
</div>
<script>

  document.getElementById("modal").style.display = "flex";
</script>
<?php endif; ?>

</body>
</html>
