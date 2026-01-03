<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ثبت نام </title>
  <style>
    body {
      font-family: "Vazir", sans-serif;
      background: linear-gradient(135deg, #e0e7ff, #f3f4f6);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #fff;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      width: 320px;
      text-align: center;
    }

    h2 {
      color: #1f2937;
      margin-bottom: 1rem;
    }

    p {
      color: #6b7280;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
    }

    input[type="tel"] {
      width: 92%;
      padding: 0.8rem;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      font-size: 1rem;
      direction: ltr;
      text-align: left;
    }

    button {
      margin-top: 1.5rem;
      width: 100%;
      padding: 0.8rem;
      background-color: #386641;
      color: #fff;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #2b5033;
    }

    .footer {
      margin-top: 1rem;
      font-size: 0.85rem;
      color: #9ca3af;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>ثبت‌نام</h2>
    <form action="verify.php" method="post">
      <input type="tel" name="phone" placeholder="مثلاً 09123456789" required>
      <button type="submit">ارسال کد تأیید</button>
    </form>
    
    <div class="footer">
      قبلاً ثبت‌نام کرده‌اید؟ <a href="sign_in.php">وارد شوید</a>
    </div>
  </div>
    
</body>
</html>
