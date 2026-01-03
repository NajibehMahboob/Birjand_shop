<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>سفارش‌ها</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    font-family: "Vazir", sans-serif;
    background: #f3f4f6;
    margin: 0;
    padding: 0;
}


.header {
    background: #386641;
    color: #fff;
    padding: 15px 25px;
    text-align: center;
    font-size: 1.2rem;
}


.container {
    max-width: 900px;
    margin: 30px auto;
    padding: 0 20px;
}


.orders-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.orders-table th, .orders-table td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #e5e7eb;
}

.orders-table th {
    background: #f3f4f6;
    font-weight: 600;
    color: #1f2937;
}

.orders-table tr:last-child td {
    border-bottom: none;
}

.status {
    padding: 5px 10px;
    border-radius: 8px;
    font-weight: 600;
    color: #fff;
    display: inline-block;
}

.status.pending {
    background: #f59e0b; 
}

.status.completed {
    background: #10b981; 
}

.status.cancelled {
    background: #ef4444; 
}

.details-btn {
    background: #4f46e5;
    color: #fff;
    padding: 5px 10px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.9rem;
    transition: 0.3s;
}

.details-btn:hover {
    background: #4338ca;
}
</style>
</head>
<body>

<div class="header">
    سفارش‌های من
</div>

<div class="container">
    <table class="orders-table">
        <thead>
            <tr>
                <th>شماره سفارش</th>
                <th>تاریخ</th>
                <th>وضعیت</th>
                <th>جزئیات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1023</td>
                <td>۱۴۰۴/۰۸/۲۰</td>
                <td><span class="status pending">در انتظار</span></td>
                <td><a href="" class="details-btn">مشاهده</a></td>
            </tr>
            <tr>
                <td>#1022</td>
                <td>۱۴۰۴/۰۸/۱۸</td>
                <td><span class="status completed">تکمیل شده</span></td>
                <td><a href="" class="details-btn">مشاهده</a></td>
            </tr>
            <tr>
                <td>#1021</td>
                <td>۱۴۰۴/۰۸/۱۵</td>
                <td><span class="status cancelled">لغو شده</span></td>
                <td><a href="" class="details-btn">مشاهده</a></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
