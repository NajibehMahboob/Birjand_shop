<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خشکبار بیرجند</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

:root {
    --primary-green: #386641;
    --dark-green: #2b5033;
    --light-gray: #f9f9f9;
    --text-color: #333;
    --white: #fff;
}

body {
    font-family: "Vazir", sans-serif;
    background: #f3f4f6;
    margin: 0;
    padding: 0;
}


.main-header {
    background-color: var(--primary-green);
    color: var(--white);
    padding: 15px 0;
    position: sticky;
    top: 0;
    z-index: 999;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}


.header-left .cart-icon {
    position: relative;
    color: var(--white);
    font-size: 1.8rem;
    text-decoration: none;
}


.modal {
    display: none; 
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 2rem;
    border-radius: 15px;
    width: 350px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

.modal-content h2 {
    color: #386641;
    margin-bottom: 0.5rem;
}

.modal-content p {
    color: #1f2937;
    font-size: 1rem;
    margin-bottom: 1rem;
}

.close {
    color: #ef4444;
    float: right;
    font-size: 1.5rem;
    font-weight: bold;
    cursor: pointer;
}
.close:hover {
    color: #dc2626;
}




/* TITLE */
.header-center h1 {
    margin: 0;
    font-size: 2.2rem;
    font-weight: 700;
    letter-spacing: 1px;
}

/* SEARCH */
.search-box {
    display: flex;
    align-items: center;
    background-color: var(--white);
    border-radius: 10px;
    border: 1px solid #d1d5db;
    overflow: hidden;
    position: relative;
}

.search-box input {
    border: none;
    padding: 10px 40px 10px 12px;
    font-size: 0.9rem;
    outline: none;
    flex-grow: 1;
    text-align: right;
}

.search-box button {
    background-color: var(--dark-green);
    border: none;
    color: var(--white);
    padding: 10px 15px;
    cursor: pointer;
    font-size: 1rem;
}

.search-box button:hover {
    background-color: #24422b;
}

/* NAV */
.main-nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding-top: 15px;
    margin: 0;
}

.main-nav ul li {
    margin: 0 15px;
    position: relative;
}

.main-nav ul li a {
    color: var(--white);
    text-decoration: none;
    font-weight: 400;
    padding: 5px 10px;
    transition: 0.3s;
}

.main-nav ul li a:hover {
    color: #d1d1d1;
}

/* DROPDOWN */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: var(--dark-green);
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    border-radius: 5px;
    overflow: hidden;
    text-align: right;
}

.dropdown-content a {
    color: var(--white);
    padding: 12px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: var(--primary-green);
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* GENERAL LAYOUT */
.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
}

/* WELCOME BOX */
.welcome-box {
    background: #4f46e5;
    color: #fff;
    padding: 20px;
    border-radius: 18px;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* CARDS */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
}

.card {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
    font-size: 1.1rem;
    font-weight: 600;
    color: #1f2937;
    text-decoration: none;
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.card i {
    font-size: 2rem;
    margin-bottom: 12px;
    color: #4f46e5;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* LOGOUT */
.logout {
    background: #ef4444;
    color: #fff !important;
}

.logout i {
    color: #fff !important;
}

.logout:hover {
    background: #dc2626;
}
.hamburger-menu-icon {
    position: fixed;
    top: 110px;
    right: 20px; /* برای RTL */
    background-color: var(--primary-green);
    color: var(--white);
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.1rem;
    z-index: 1002; /* بالاتر از همه چیز */
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    transition: background-color 0.3s ease;
}

.hamburger-menu-icon:hover {
    background-color: var(--dark-green);
}

.hamburger-menu-icon i {
    font-size: 1.3rem;
}
.off-canvas-menu {
    position: fixed;
    top: 0;
    right: -300px; /* شروع از بیرون صفحه برای RTL */
    width: 300px;
    height: 100%;
    background-color: var(--white);
    box-shadow: -5px 0 15px rgba(0,0,0,0.2); /* سایه به سمت چپ */
    z-index: 1003;
    transition: right 0.3s ease-in-out;
    overflow-y: auto; /* برای اسکرول در صورت نیاز */
    direction: rtl;
    text-align: right;
}

.off-canvas-menu.open {
    right: 0; /* وقتی باز میشه میاد داخل صفحه */
}

.menu-header {
    background-color: var(--primary-green);
    color: var(--white);
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.2rem;
}

.close-off-canvas {
    font-size: 2rem;
    cursor: pointer;
    line-height: 1;
    color: var(--white);
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.close-off-canvas:hover {
    opacity: 1;
}

.menu-list, .menu-options {
    list-style: none;
    padding: 0;
    margin-top: 0;
}

.menu-list li a, .menu-options li a {
    display: flex;
    justify-content: space-between; /* برای فاصله بین متن و آیکون */
    align-items: center;
    padding: 15px 20px;
    color: var(--text-color);
    text-decoration: none;
    border-bottom: 1px solid #eee;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.menu-list li a:hover, .menu-options li a:hover {
    background-color: #f5f5f5;
    color: var(--primary-green);
}

.menu-list li a i.fa-chevron-left {
    color: #999;
    font-size: 0.8rem;
}

.menu-options {
    margin-top: 20px;
    border-top: 1px solid #eee;
}

.menu-options li a i {
    margin-left: 10px; /* فاصله آیکون از متن برای RTL */
    color: var(--primary-green);
    font-size: 1.1rem;
}

.menu-options li:last-child a {
    border-bottom: none;
}


.menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1002;
    display: none;
}

.menu-overlay.active {
    display: block; 
}

.header-left {
    display: flex;
    align-items: center;
    gap: 18px;
}

.header-left .header-icon {
    position: relative;
    color: #fff;
    font-size: 1.8rem;
    cursor: pointer;
    text-decoration: none;
    transition: 0.3s ease;
}

.header-left .header-icon:hover {
    color: #e0e0e0;
}

.header-left .cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background: #ef4444;
    color: #fff;
    padding: 3px 7px;
    border-radius: 10px;
    font-size: 0.7rem;
}

</style>
</head>

<body>
 
<div class="hamburger-menu-icon" id="hamburgerIcon">
        <i class="fas fa-bars"></i>
        <span>منو</span>
    </div>


    <div class="off-canvas-menu" id="offCanvasMenu">
        <div class="menu-header">
            <span class="close-off-canvas" id="closeOffCanvas">&times;</span>
            <h3></h3>
        </div>
        <ul class="menu-list">
            <li><a href="#shoor">آجیل شور<i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#shirin">آجیل شیرین<i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#zaferan">زعفران <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">تنقلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">بسته‌های کادویی <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">کالای اساسی و خواربار <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">شکلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">محصولات ویژه <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="index.php">پک اقتصادی خانوار</a></li>
        </ul>
        <ul class="menu-options">
            <li><a href="#footer"><i class="fas fa-paper-plane"></i> تماس با ما</a></li>

        </ul>
    </div>

  
    <div class="menu-overlay" id="menuOverlay"></div>



    <header class="main-header">
        <div class="container">
            <div class="header-content">
 

                <div class="header-right">
                    <div class="search-box">
                        <input type="text" placeholder="جستجو برای محصولات...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div class="header-center">
                    <h1>خشکبار بیرجند</h1>
                </div>


                <div class="header-left">

                    <a href="../Cart/cart.php" class="header-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                       
                    </a>
                
                    <a href="dashboard.php" class="header-icon">
                        <i class="fa-solid fa-user"></i>
                    </a>
                
                </div>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="dashboard.php">داشبورد</a></li>
                    <li class="dropdown">
                        دسته بندی محصولات <i class="fas fa-caret-down"></i>
                        <div class="dropdown-content">
                         
                            <a href="#nuts">خشکبار</a>
                            <a href="#zaferan">زعفران</a>
                        </div>
                    </li>
                    <li><a href="../Cart/cart.php">سبدخرید</a></li>
                    <li><a href="#footer">درباره ما</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
            <div class="container">
                <section class="products-section">
                    <h2 class="section-title" id="nuts">خشکبار</h2>
                    <div class="separator-line"></div>
                    <h3 class="subsection-title" id="shoor">آجیل شور</h3>

                    <div class="product-cards-container" >
                        
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../images/2.png" alt="آجیل 4 مغز شور">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">آجیل 4 مغز شور</h4>
                            
                                <p class="old-price">۷۴۹۰۰۰ تومان</p>
                                <p class="current-price">۶۵۱۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                <button class="add-btn">
                                     افزودن به سبد خرید   
                                </button>

                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../images/3.png" alt="آجیل 5 مغز شور">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل 5 مغز شور</h4>
                        
                                <p class="old-price">۲۸۰۰۰ تومان</p>
                                <p class="current-price">۲۸۴۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                        <div class="product-card">
                            <div class="discount-badge">۱۰٪ تخفیف</div>
                            <div class="product-image">
                                <img src="../images/4.png" alt="آجیل پذیرایی">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل پذیرایی</h4>
                                
                                <p class="old-price">۱۳۱۰۰۰ تومان</p>
                                <p class="current-price">۱۱۸۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="discount-badge">۳۰٪ تخفیف</div>
                            <div class="product-image">
                                <img src="../images/5.png" alt="آجیل ویژه">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل ویژه</h4>
                             
                                <p class="old-price">۹۶۶۰۰۰ تومان</p>
                                <p class="current-price">۶۷۶۲۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div> 

                    <h3 class="subsection-title" id="shirin">آجیل خام (شیرین)</h3>

                    <div class="product-cards-container">
                     
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../images/7.png" alt="آجیل یلدا">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">آجیل بلدا</h4>
                                <p class="old-price">۲۴۹۰۰۰ تومان</p>
                                <p class="current-price">۱۴۹۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../images/1.png" alt="آجیل دیابتی">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل دیابتی</h4>
                                <p class="old-price">۲۲۲۰۰۰ تومان</p>
                                <p class="current-price">۱۷۵۱۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                        <div class="product-card">
                            <div class="product-image">
                                <img src="../images/6.png" alt="آجیل 4 مغز خام">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل 4 مغز خام</h4>
                                <p class="old-price">۲۴۴۰۰۰ تومان</p>
                                <p class="current-price">۲۲۲۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                  
                        <div class="product-card">
                            <div class="discount-badge">۸٪ تخفیف</div>
                            <div class="product-image">
                                <img src="../images/8.png" alt="آجیل 5 مغز خام">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل 5 مغز خام</h4>
                                <p class="old-price">۲۸۲۰۰۰ تومان</p>
                                <p class="current-price">۲۵۹۴۰۰۰ تومان</p>
                                <div class="weight-options">
                                    <span class="weight-label">وزن:</span>
                                    <button class="weight-btn active">۱ کیلوگرم</button>
                                    <button class="weight-btn">۵۰۰ گرم</button>
                                    <button class="weight-btn">۲۵۰ گرم</button>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-btn">افزودن به سبد خرید</button>
                                    <div class="quantity-control">
                                        <button class="qty-btn">-</button>
                                        <input type="text" value="1" class="qty-input">
                                        <button class="qty-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> 

                    <h3 class="subsection-title" id="zaferan">زعفران</h3>

<div class="product-cards-container" >
 
    <div class="product-card">
        <div class="product-image">
            <img src="../images/zaferan1.jpg" alt="آجیل یلدا">
        </div>
        <div class="product-info">
            <h4 class="product-name">زعفران شاهنامه </h4>
            <p class="old-price">1.498.000 تومان</p>
            <p class="current-price">1.348.200 تومان</p>
            <div class="weight-options">
                <span class="weight-label">وزن:</span>
                <button class="weight-btn active">۱ مثقال</button>
                <button class="weight-btn">0.5 مثقال</button>
                <button class="weight-btn">0.25 مثقال</button>
            </div>
            <div class="add-to-cart">
                <button class="add-btn">افزودن به سبد خرید</button>
                <div class="quantity-control">
                    <button class="qty-btn">-</button>
                    <input type="text" value="1" class="qty-input">
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>
    </div>

  
    <div class="product-card">
        <div class="product-image">
            <img src="../images/zaferan2.jpg" alt="آجیل دیابتی">
        </div>
         <div class="product-info">
            <h4 class="product-name">اسپری زعفران</h4>
            <p class="old-price">700 تومان</p>
            <p class="current-price">600 تومان</p>
            <div class="weight-options">
                <span class="weight-label">اندازه:</span>
                <button class="weight-btn active">بزرگ</button>
                <button class="weight-btn">کوچک</button>
              
            </div>
            <div class="add-to-cart">
                <button class="add-btn">افزودن به سبد خرید</button>
                <div class="quantity-control">
                    <button class="qty-btn">-</button>
                    <input type="text" value="1" class="qty-input">
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>
    </div>

 
    <div class="product-card">
        <div class="product-image">
            <img src="../images/zaferan3.jpg" alt="آجیل 4 مغز خام">
        </div>
         <div class="product-info">
            <h4 class="product-name">دمنوش مخلوط زعفرانی</h4>
            <p class="old-price">372.800 تومان</p>
            <p class="current-price">334.800 تومان</p>
            <div class="weight-options">
                <span class="weight-label">تعداد:</span>
                <button class="weight-btn active">6 عدد در بسته</button>
                <button class="weight-btn">12 عدد در یسته</button>
            </div>
            <div class="add-to-cart">
                <button class="add-btn">افزودن به سبد خرید</button>
                <div class="quantity-control">
                    <button class="qty-btn">-</button>
                    <input type="text" value="1" class="qty-input">
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>
    </div>


    <div class="product-card">
        <div class="discount-badge">۸٪ تخفیف</div>
        <div class="product-image">
            <img src="../images/zaferan4.jpg" alt="آجیل 5 مغز خام">
        </div>
         <div class="product-info">
            <h4 class="product-name">نبات زعفرانی</h4>
            <p class="old-price">79.000 تومان</p>
            <p class="current-price">71.000 تومان</p>
            <div class="weight-options">
                <span class="weight-label">تعداد:</span>
                <button class="weight-btn active">10 عددی</button>
                <button class="weight-btn">20 عددی</button>
              
            </div>
            <div class="add-to-cart">
                <button class="add-btn">افزودن به سبد خرید</button>
                <div class="quantity-control">
                    <button class="qty-btn">-</button>
                    <input type="text" value="1" class="qty-input">
                    <button class="qty-btn">+</button>
                </div>
            </div>
        </div>
    </div>

</div> 
                </section>
            </div>
        </main>

    <footer class="main-footer" id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column about-us">
                    <h3>درباره ما</h3>
                    <p>فروشگاه خشکبار بیرجند با بیش از سه سال سابقه فعالیت، با افتخار ارائه دهنده بهترین و باکیفیت‌ترین محصولات بومی بیرجند است. ما در این فروشگاه تلاش کرده‌ایم تا طعم اصیل و خاطره‌انگیز شیرینی‌های محلی، آجیل تازه، میوه‌های خشک‌شده و دیگر محصولات طبیعی این منطقه را با نازل‌ترین قیمت و کیفیت عالی در اختیار شما قرار دهیم. هدف ما فقط فروش نیست، بلکه ایجاد پلی میان سنت و زندگی امروزی، حفظ طعم‌های اصیل و حمایت از تولیدکنندگان محلی بیرجند است. با توسعه مداوم فروشگاه و افزایش تنوع محصولات، امیدواریم تجربه‌ای دلپذیر از خرید را برای مشتریان خود رقم بزنیم. ممنون که به ما اعتماد می‌کنید.</p>
                </div>
                <div class="footer-column contact-info">
                    <h3>راه‌های ارتباطی با ما</h3>
                    <p>اگر سوالی دارید، با ما تماس بگیرید:</p>
                    <p><i class="fas fa-phone"></i> 09155010852 (آقای ابراهیم زاده)</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                    
                    </div>
                    <div class="enamad-logos">
                        <img src="https://via.placeholder.com/100x100?text=Enamad" alt="Enamad Logo">
                        <img src="https://via.placeholder.com/100x100?text=Samandehi" alt="Samandehi Logo">
                
                    </div>
                </div>
                <div class="footer-column address-map">
                    <h3>آدرس</h3>
                    <p><i class="fas fa-map-marker-alt"></i> بین پیروزی 73 - میدان لادن</p>
                    <p>خشکبار بیرجند</p>
                    <div class="map-placeholder">
              
                        <img src="https://via.placeholder.com/300x200?text=Google+Map" alt="Map Location">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>طراحی شده توسط ایمن گستران تهران</p>
            </div>
        </div>
    </footer>

  
    <div class="ticket-float-icon" id="ticketIcon">
        <i class="fas fa-headset"></i>
    </div>


    <div id="ticketModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>درخواست پشتیبانی</h2>
            <p>سلام! اگر احتیاج به مشاوره دارین نام و نام خانوادگی به همراه شماره تماس خود را قرار دهید تا مشاوران ما در اولین فرصت با شما تماس بگیرند.</p>
            <form action="process_ticket.php" method="POST">
                <label for="fullName">نام و نام خانوادگی:</label>
                <input type="text" id="fullName" name="full_name" required>

                <label for="phoneNumber">شماره تماس:</label>
                <input type="tel" id="phoneNumber" name="phone_number" required>

                <button type="submit">ارسال تیکت</button>
            </form>
            <div id="ticketMessage"></div>
        </div>
    </div>

    <script>
    
        const ticketIcon = document.getElementById('ticketIcon');
        const ticketModal = document.getElementById('ticketModal');
        const closeButton = document.querySelector('.close-button');
        const ticketForm = ticketModal.querySelector('form');
        const ticketMessageDiv = document.getElementById('ticketMessage');

        ticketIcon.addEventListener('click', () => {
            ticketModal.style.display = 'block';
        });

        closeButton.addEventListener('click', () => {
            ticketModal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target == ticketModal) {
                ticketModal.style.display = 'none';
            }
        });

        ticketForm.addEventListener('submit', function(event) {
            event.preventDefault(); 

            const formData = new FormData(this);

            fetch('process_ticket.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                ticketMessageDiv.innerHTML = data; 
                ticketForm.reset(); 
             
                setTimeout(() => {
                    ticketModal.style.display = 'none';
                    ticketMessageDiv.innerHTML = ''; 
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                ticketMessageDiv.innerHTML = '<p style="color: red;">خطا در ارسال تیکت. لطفا مجددا تلاش کنید.</p>';
            });
        });
       

      
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const offCanvasMenu = document.getElementById('offCanvasMenu');
    const closeOffCanvas = document.getElementById('closeOffCanvas');
    const menuOverlay = document.getElementById('menuOverlay');

    if (hamburgerIcon) {
        hamburgerIcon.addEventListener('click', () => {
            offCanvasMenu.classList.add('open');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeOffCanvas) { 
        closeOffCanvas.addEventListener('click', () => {
            offCanvasMenu.classList.remove('open');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }

    if (menuOverlay) { 
        menuOverlay.addEventListener('click', () => {
            offCanvasMenu.classList.remove('open');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && offCanvasMenu && offCanvasMenu.classList.contains('open')) {
            offCanvasMenu.classList.remove('open');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });


    const addBtns = document.querySelectorAll('.add-btn');

addBtns.forEach(btn => {
    btn.addEventListener('click', () => {

        const product = {
            id: btn.dataset.id,
            name: btn.dataset.name,
            price: btn.dataset.price,
            image: btn.dataset.image,
            qty: 1
        };

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existing = cart.find(item => item.id === product.id);

        if (existing) {
            existing.qty += 1;
        } else {
            cart.push(product);
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        alert('به سبد خرید اضافه شد');
    });
});
</script>

</body>
</html>