<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>آدرس‌ها</title>
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
    max-width: 600px;
    margin: 30px auto;
    background: #fff;
    padding: 30px 25px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* فرم */
form label {
    display: block;
    margin-top: 15px;
    margin-bottom: 5px;
    font-weight: 600;
}

form input, form select, form textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    outline: none;
    font-size: 1rem;
}

form input:focus, form select:focus, form textarea:focus {
    border-color: #386641;
}

textarea {
    resize: vertical;
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
</style>
</head>
<body>

<div class="header">
    آدرس‌
</div>

<div class="container">
    <form action="#" method="POST">
        <label for="province">استان</label>
        <select id="province" name="province" required>
            <option value="">انتخاب استان</option>
            <option value="آذربایجان شرقی">آذربایجان شرقی</option>
            <option value="آذربایجان غربی">آذربایجان غربی</option>
            <option value="اردبیل">اردبیل</option>
            <option value="اصفهان">اصفهان</option>
            <option value="البرز">البرز</option>
            <option value="ایلام">ایلام</option>
            <option value="بوشهر">بوشهر</option>
            <option value="تهران">تهران</option>
            <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
            <option value="خراسان جنوبی">خراسان جنوبی</option>
            <option value="خراسان رضوی">خراسان رضوی</option>
            <option value="خراسان شمالی">خراسان شمالی</option>
            <option value="خوزستان">خوزستان</option>
            <option value="زنجان">زنجان</option>
            <option value="سمنان">سمنان</option>
            <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
            <option value="فارس">فارس</option>
            <option value="قزوین">قزوین</option>
            <option value="قم">قم</option>
            <option value="کردستان">کردستان</option>
            <option value="کرمان">کرمان</option>
            <option value="کرمانشاه">کرمانشاه</option>
            <option value="کهگیلویه و بویراحمد">کهگیلویه و بویراحمد</option>
            <option value="گلستان">گلستان</option>
            <option value="گیلان">گیلان</option>
            <option value="لرستان">لرستان</option>
            <option value="مازندران">مازندران</option>
            <option value="مرکزی">مرکزی</option>
            <option value="هرمزگان">هرمزگان</option>
            <option value="همدان">همدان</option>
            <option value="یزد">یزد</option>            
        </select>

        <label for="city">شهر</label>
        <input type="text" id="city" name="city" placeholder="نام شهر" required>

        <label for="address">آدرس دقیق</label>
        <textarea id="address" name="address" rows="3" placeholder="آدرس کامل خود را وارد کنید" required></textarea>

        <label for="postal">کد پستی</label>
        <input type="text" id="postal" name="postal" placeholder="کد پستی" required>

        <label for="phone">شماره تماس</label>
        <input type="text" id="phone" name="phone" placeholder="شماره موبایل یا ثابت" required>

        <label for="email">ایمیل (اختیاری)</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com">

        <button type="submit">ذخیره آدرس</button>
    </form>
</div>

</body>
</html>
