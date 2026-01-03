

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>سبد خرید</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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


.cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background: #ef4444;
    color: #fff;
    padding: 2px 6px;
    border-radius: 10px;
    font-size: 0.7rem;
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
.cart-page {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
    margin-top: 40px;
}

/* items */
.cart-items {
    background: #fff;
    border-radius: 15px;
    padding: 20px;
}

.cart-header,
.cart-row {
    display: grid;
    grid-template-columns: 2fr 1fr 0.5fr;
    align-items: center;
}

.cart-header {
    font-weight: 700;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
    margin-bottom: 15px;
}

.cart-row {
    padding: 15px 0;
    border-bottom: 1px solid #f1f1f1;
}

.product-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.product-info img {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    object-fit: cover;
}

.price {
    font-weight: 600;
}

.remove-btn {
    background: #ede9fe;
    border: none;
    color: #4f46e5;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
}

/* summary */
.cart-summary {
    background: #fff;
    border-radius: 15px;
    padding: 25px;
}

.cart-summary h3 {
    margin-bottom: 20px;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
}

.summary-row.bold {
    font-weight: 700;
}

.payment-method {
    margin: 20px 0;
    font-size: 0.95rem;
}

.pay-btn {
    width: 100%;
    background: var(--primary-green);
    color: #fff;
    border: none;
    padding: 14px;
    border-radius: 10px;
    font-size: 1.1rem;
    cursor: pointer;
}

.pay-btn:hover {
    background: var(--dark-green);
}


/* GENERAL LAYOUT */
.container {
    max-width: 950px;
    margin: 40px auto;
    padding: 10px;
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



/* Footer Styles */
.main-footer {
    background-color: var(--dark-green);
    color: var(--white);
    padding: 40px 0 20px;
    margin-top: 40px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-column h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: var(--white);
    position: relative;
}

.footer-column h3::after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background-color: var(--primary-green);
    margin-top: 5px;
}

.footer-column p {
    font-size: 0.95rem;
    margin-bottom: 10px;
    line-height: 1.8;
}

.footer-column i {
    margin-left: 8px;
    color: var(--primary-green);
}

.social-icons {
    margin-top: 15px;
}

.social-icon {
    color: var(--white);
    font-size: 1.5rem;
    margin-left: 15px;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: var(--primary-green);
}

.enamad-logos {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.enamad-logos img {
    width: 80px;
    height: 80px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 5px;
    object-fit: contain;
}

.map-placeholder img {
    width: 100%;
    height: 200px;
    background-color: #f0f0f0;
    display: block;
    object-fit: cover;
    border-radius: 5px;
    margin-top: 10px;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    font-size: 0.85rem;
    opacity: 0.8;
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
            <li><a href="../UserAccount/account.php">فروشگاه<i class="fas fa-chevron-left"></i></a></li>
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
                        <span class="cart-count">0</span>
                    </a>
                
                    <a href="../UserAccount/dashboard.php" class="header-icon">
                        <i class="fa-solid fa-user"></i>
                    </a>
                
                </div>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="../UserAccount/dashboard.php">داشبورد</a></li>
                    <li><a href="../UserAccount/account.php">فروشگاه</a></li>
                    <li><a href="#footer">درباره ما</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="cart-page">

<!-- cart items -->
<div class="cart-items">
    <div class="cart-header">
        <span>محصول</span>
        <span>قیمت (تومان)</span>
        <span>عملیات</span>
    </div>

    <div class="cart-row">
        <div class="product-info">
            <img src="../images/2.png" alt="">
            <span>آجیل شور</span>
        </div>
        <div class="price">۵۰۰٬۰۰۰</div>
        <button class="remove-btn">
            <i class="fas fa-trash"></i>
        </button>
    </div>

</div>

<!-- cart summary -->
<div class="cart-summary">
    <h3>سبد خرید</h3>

    <div class="summary-row">
        <span>مجموع</span>
        <span>۵۰۰٬۰۰۰ تومان</span>
    </div>

    <div class="summary-row bold">
        <span>قابل پرداخت</span>
        <span>۵۰۰٬۰۰۰ تومان</span>
    </div>

    <div class="payment-method">
        <p>روش پرداخت</p>
        <label>
            <input type="radio" checked>
            پرداخت اینترنتی
        </label>
    </div>

    <button class="pay-btn">پرداخت</button>
</div>

</div>



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




<script>

const openBtn = document.getElementById("hamburgerIcon");
const closeBtn = document.getElementById("closeOffCanvas");
const menu = document.getElementById("offCanvasMenu");
const overlay = document.getElementById("menuOverlay");


openBtn.addEventListener("click", () => {
    menu.classList.add("open");
    overlay.classList.add("active");
});


closeBtn.addEventListener("click", () => {
    menu.classList.remove("open");
    overlay.classList.remove("active");
});


overlay.addEventListener("click", () => {
    menu.classList.remove("open");
    overlay.classList.remove("active");
});
window.addEventListener("load", () => {
    const modal = document.getElementById("welcomeModal");
    const closeBtn = document.getElementById("closeModal");

   
    modal.style.display = "block";

   
    closeBtn.onclick = () => {
        modal.style.display = "none";
    }

  
    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

   
    setTimeout(() => {
        modal.style.display = "none";
    }, 5000);
});

</script>