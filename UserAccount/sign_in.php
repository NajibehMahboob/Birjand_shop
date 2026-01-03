
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ورود به حساب کاربری</title>
  <style>
    body {
      font-family: "Vazir", sans-serif;
      background: linear-gradient(135deg, #eef2ff, #e0e7ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #fff;
      padding: 2rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }

    h2 {
      color: #1f2937;
      margin-bottom: 1.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input {
      padding: 0.8rem;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      font-size: 1rem;
      outline: none;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #2b5033 ;
    }

  

    button {
      margin-top: 0.5rem;
      padding: 0.9rem;
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

    .links {
      margin-top: 1rem;
      display: flex;
      justify-content: space-between;
      font-size: 0.9rem;
    }

    .links a {
      color: #4f46e5;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }

    .footer {
      margin-top: 1.5rem;
      color: #6b7280;
      font-size: 0.9rem;
    }

    .footer a {
      color: #4f46e5;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>ورود به حساب کاربری</h2>
    <form action="entering.php" method="post">
      <p2>ورود با شماره تلفن همراه:</p2>
    <input type="tel" name="phone" placeholder="مثلاً 09123456789" required>
    <button type="submit">ارسال کد تأیید</button>
    
    
    </form>

    <div class="links">
      <a href="sign_up.php">ثبت‌نام</a>
    </div>

    <div class="footer">
      با ورود به حساب، با قوانین سایت موافقت می‌کنید.
    </div>
  </div>
</body>
</html>




