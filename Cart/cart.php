<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید - خشکبار بیرجند</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- فونت فارسی -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    
    <style>
        :root {
            --primary-green: #386641;
            --dark-green: #2b5033;
            --light-gray: #f9f9f9;
            --text-color: #333;
            --white: #fff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Vazirmatn, "Segoe UI", Tahoma, sans-serif;
            background: #f8f9fa;
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* هدر */
        .main-header {
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            color: var(--white);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            width: 100%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-center h1 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon {
            position: relative;
            color: var(--white);
            font-size: 1.5rem;
            text-decoration: none;
            transition: transform 0.3s;
            display: flex;
            align-items: center;
        }

        .header-icon:hover {
            transform: scale(1.1);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ef4444;
            color: white;
            font-size: 0.7rem;
            min-width: 18px;
            height: 18px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 4px;
            font-weight: bold;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
            justify-content: center;
            gap: 30px;
            padding-top: 15px;
            margin: 0;
        }

        .main-nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }

        .main-nav a:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        /* محتوای اصلی */
        .cart-page {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 30px;
            flex: 1;
        }

        @media (max-width: 992px) {
            .cart-page {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        /* آیتم‌های سبد خرید */
        .cart-items {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .cart-header {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 0.5fr;
            gap: 15px;
            padding-bottom: 15px;
            margin-bottom: 20px;
            border-bottom: 2px solid #eee;
            font-weight: 600;
            color: var(--dark-green);
            font-size: 0.95rem;
        }

        .cart-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 0.5fr;
            gap: 15px;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
            transition: background 0.3s;
        }

        .cart-row:hover {
            background: #f9f9f9;
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-info img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #f0f0f0;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 1rem;
        }

        .product-weight {
            color: #666;
            font-size: 0.85rem;
            background: #f5f5f5;
            padding: 4px 10px;
            border-radius: 20px;
            display: inline-block;
        }

        .price, .total-price {
            font-weight: 600;
            color: var(--dark-green);
            font-size: 1rem;
            text-align: center;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .qty-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: none;
            background: var(--primary-green);
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            font-size: 1rem;
        }

        .qty-btn:hover {
            background: var(--dark-green);
            transform: scale(1.1);
        }

        .qty-display {
            min-width: 35px;
            text-align: center;
            font-weight: 600;
            font-size: 1rem;
        }

        .remove-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: none;
            background: #fee2e2;
            color: #dc2626;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            margin: 0 auto;
        }

        .remove-btn:hover {
            background: #fecaca;
            transform: scale(1.1);
        }

        /* خلاصه سبد خرید */
        .cart-summary {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .cart-summary h3 {
            margin-bottom: 20px;
            color: var(--dark-green);
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
            font-size: 1.3rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.95rem;
        }

        .summary-row.bold {
            font-weight: 700;
            font-size: 1.1rem;
            border-bottom: none;
            margin-top: 10px;
            padding-top: 15px;
            border-top: 2px solid #eee;
            color: var(--dark-green);
        }

        .payment-method {
            margin: 25px 0;
            padding: 20px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .payment-method p {
            font-weight: 600;
            margin-bottom: 15px;
            color: #444;
            font-size: 1rem;
        }

        .payment-method label {
            display: block;
            margin: 10px 0;
            padding: 10px 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 0.95rem;
        }

        .payment-method label:hover {
            background: #f8f9fa;
        }

        .pay-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s;
            margin-top: 20px;
            font-family: inherit;
        }

        .pay-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(56, 102, 65, 0.3);
        }

        .clear-cart-btn {
            width: 100%;
            padding: 14px;
            background: #ef4444;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s;
            margin-top: 15px;
            font-family: inherit;
        }

        .clear-cart-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 38, 38, 0.2);
        }

        /* سبد خرید خالی */
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            grid-column: 1 / -1;
        }

        .empty-cart i {
            font-size: 5rem;
            color: #ddd;
            margin-bottom: 20px;
            opacity: 0.7;
        }

        .empty-cart p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .continue-shopping {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-green);
            color: white;
            padding: 14px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            margin-top: 20px;
            font-size: 1rem;
        }

        .continue-shopping:hover {
            background: var(--dark-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(56, 102, 65, 0.2);
        }

        /* منوی همبرگر */
        .hamburger-menu-icon {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-green);
            color: white;
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            z-index: 1001;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            font-family: inherit;
            border: none;
            align-items: center;
            gap: 8px;
        }

        /* منوی موبایل */
        .off-canvas-menu {
            position: fixed;
            top: 0;
            right: -300px;
            width: 280px;
            height: 100%;
            background: var(--white);
            box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            z-index: 1002;
            transition: right 0.3s ease-in-out;
            overflow-y: auto;
            padding: 20px;
            direction: rtl;
        }

        .off-canvas-menu.open {
            right: 0;
        }

        .menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }

        .menu-header h3 {
            color: var(--dark-green);
            margin: 0;
        }

        .close-off-canvas {
            font-size: 2rem;
            color: #888;
            cursor: pointer;
            background: none;
            border: none;
            line-height: 1;
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-list li {
            margin-bottom: 5px;
        }

        .menu-list a {
            display: block;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .menu-list a:hover {
            background: #f0f0f0;
            color: var(--primary-green);
            padding-right: 20px;
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1001;
            display: none;
        }

        .menu-overlay.active {
            display: block;
        }

        /* فوتر */
        .main-footer {
            background: linear-gradient(135deg, var(--dark-green), #1a3a24);
            color: var(--white);
            padding: 40px 0 20px;
            margin-top: 60px;
            width: 100%;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 30px;
        }

        .footer-column h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
            position: relative;
            padding-bottom: 10px;
            color: var(--white);
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-green);
        }

        .footer-column p {
            font-size: 0.95rem;
            line-height: 1.8;
            color: rgba(255,255,255,0.9);
        }

        .footer-column i {
            margin-left: 8px;
            color: #8bc34a;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            max-width: 1200px;
            margin: 0 auto;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
        }

        /* نوتیفیکیشن */
        .cart-notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-green);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            z-index: 9999;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            animation: slideIn 0.3s ease;
            max-width: 90%;
            text-align: center;
            font-family: inherit;
            font-weight: 500;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-50%) translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
        }

        /* ریسپانسیو */
        @media (max-width: 768px) {
            .cart-page {
                padding: 0 15px;
                gap: 20px;
                margin: 20px auto;
            }

            .cart-header {
                display: none;
            }

            .cart-row {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 25px 0;
                border-bottom: 2px solid #eee;
                position: relative;
            }

            .product-info {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .product-info img {
                width: 100px;
                height: 100px;
            }

            .quantity-control {
                justify-content: center;
                margin: 10px 0;
            }

            .remove-btn {
                position: static;
                margin: 10px auto;
            }

            .price, .total-price {
                text-align: center;
                font-size: 1.1rem;
            }

            .hamburger-menu-icon {
                display: flex;
            }

            .main-nav {
                display: none;
            }

            .header-center h1 {
                font-size: 1.5rem;
            }

            .cart-summary {
                position: static;
            }
        }

        /* برای صفحات کوچک‌تر */
        @media (max-width: 480px) {
            .cart-items, .cart-summary {
                padding: 20px;
            }
            
            .header-center h1 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <!-- هدر -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="header-center">
                    <h1>سبد خرید</h1>
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

    <!-- منوی همبرگر (برای موبایل) -->
    <button class="hamburger-menu-icon" id="hamburgerIcon">
        <i class="fas fa-bars"></i>
        <span>منو</span>
    </button>

    <!-- منوی موبایل -->
    <div class="off-canvas-menu" id="offCanvasMenu">
        <div class="menu-header">
            <h3>منو</h3>
            <button class="close-off-canvas" id="closeOffCanvas">&times;</button>
        </div>
        <ul class="menu-list">
            <li><a href="../UserAccount/account.php">فروشگاه</a></li>
            <li><a href="../UserAccount/dashboard.php">داشبورد</a></li>
            <li><a href="#footer">درباره ما</a></li>
            <li><a href="../Cart/cart.php">سبد خرید</a></li>
        </ul>
    </div>
    <div class="menu-overlay" id="menuOverlay"></div>

    <!-- محتوای اصلی سبد خرید -->
    <main class="cart-page">
        <div class="cart-items" id="cartContainer">
            <!-- محتوای داینامیک اینجا بارگذاری می‌شود -->
        </div>
        
        <div class="cart-summary" id="cartSummary">
            <!-- محتوای داینامیک اینجا بارگذاری می‌شود -->
        </div>
    </main>

    <!-- فوتر -->
    <footer class="main-footer" id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>درباره ما</h3>
                    <p>فروشگاه خشکبار بیرجند با بیش از سه سال سابقه فعالیت، ارائه‌دهنده بهترین محصولات بومی بیرجند با کیفیت عالی و قیمت مناسب.</p>
                </div>
                <div class="footer-column">
                    <h3>تماس با ما</h3>
                    <p><i class="fas fa-phone"></i> 09155010852</p>
                    <p><i class="fas fa-user"></i> آقای ابراهیم زاده</p>
                </div>
                <div class="footer-column">
                    <h3>آدرس</h3>
                    <p><i class="fas fa-map-marker-alt"></i> بین پیروزی 73 - میدان لادن</p>
                    <p>خشکبار بیرجند</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>طراحی شده توسط ایمن گستران تهران © ۱۴۰۳</p>
            </div>
        </div>
    </footer>

    <!-- جاوااسکریپت -->
    <script>
        // مدیریت سبد خرید
        const CartManager = {
            key: 'birjand_shop_cart',
            
            // تبدیل اعداد فارسی به انگلیسی
            persianToEnglish(str) {
                if (typeof str !== 'string') return str;
                const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                
                let result = '';
                for (let char of str) {
                    const index = persianNumbers.indexOf(char);
                    result += index !== -1 ? englishNumbers[index] : char;
                }
                return result;
            },
            
            // تبدیل اعداد انگلیسی به فارسی
            englishToPersian(str) {
                if (typeof str !== 'string') str = String(str);
                const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
                
                let result = '';
                for (let char of str) {
                    const index = englishNumbers.indexOf(char);
                    result += index !== -1 ? persianNumbers[index] : char;
                }
                return result;
            },
            
            // تبدیل قیمت به عدد
            parsePrice(price) {
                console.log('در حال تبدیل قیمت:', price, 'نوع:', typeof price);
                
                if (typeof price === 'number') {
                    console.log('قیمت عدد است:', price);
                    return price;
                }
                
                if (typeof price === 'string') {
                    // تبدیل اعداد فارسی به انگلیسی
                    let cleaned = this.persianToEnglish(price);
                    console.log('بعد از تبدیل فارسی:', cleaned);
                    
                    // حذف همه چیز جز اعداد
                    cleaned = cleaned.replace(/[^\d]/g, '');
                    console.log('بعد از حذف غیراعداد:', cleaned);
                    
                    // تبدیل به عدد
                    const result = parseInt(cleaned, 10) || 0;
                    console.log('نتیجه نهایی:', result);
                    
                    return result;
                }
                
                console.warn('فرمت قیمت نامعتبر:', price);
                return 0;
            },
            
            // قالب‌بندی قیمت به فارسی
            formatPrice(price) {
                if (price === undefined || price === null || price === 0) {
                    return '۰ تومان';
                }
                
                const num = this.parsePrice(price);
                if (isNaN(num)) return '۰ تومان';
                
                // جدا کردن هزارگان
                let formatted = String(num).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                
                // تبدیل به فارسی
                formatted = this.englishToPersian(formatted);
                
                return formatted + ' تومان';
            },
            
            // دریافت سبد خرید از localStorage
            getCart() {
                try {
                    const cartData = localStorage.getItem(this.key);
                    console.log('داده‌های سبد خرید:', cartData);
                    
                    if (!cartData) {
                        console.log('سبد خرید خالی است');
                        return [];
                    }
                    
                    const cart = JSON.parse(cartData);
                    console.log('سبد خرید پارس شده:', cart);
                    
                    // پردازش هر آیتم
                    return cart.map(item => ({
                        ...item,
                        price: this.parsePrice(item.price),
                        quantity: parseInt(item.quantity) || 1,
                        weight: item.weight || 'وزن استاندارد'
                    }));
                } catch (error) {
                    console.error('خطا در خواندن سبد خرید:', error);
                    return [];
                }
            },
            
            // ذخیره سبد خرید در localStorage
            saveCart(cart) {
                localStorage.setItem(this.key, JSON.stringify(cart));
                console.log('سبد خرید ذخیره شد:', cart);
            },
            
            // به‌روزرسانی تعداد در هدر
            updateCartCount() {
                const cart = this.getCart();
                const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
                
                document.querySelectorAll('.cart-count').forEach(el => {
                    el.textContent = totalItems;
                });
                
                return totalItems;
            },
            
            // نمایش سبد خرید
            renderCart() {
                const cart = this.getCart();
                const container = document.getElementById('cartContainer');
                const summary = document.getElementById('cartSummary');
                
                console.log('در حال نمایش سبد خرید با', cart.length, 'آیتم');
                
                // اگر سبد خرید خالی است
                if (!cart || cart.length === 0) {
                    container.innerHTML = `
                        <div class="empty-cart">
                            <i class="fas fa-shopping-cart"></i>
                            <p>سبد خرید شما خالی است</p>
                            <p>می‌توانید از فروشگاه محصولات مورد نظر خود را انتخاب کنید</p>
                            <a href="../UserAccount/account.php" class="continue-shopping">
                                <i class="fas fa-store"></i> بازگشت به فروشگاه
                            </a>
                        </div>
                    `;
                    
                    if (summary) {
                        summary.innerHTML = '';
                    }
                    this.updateCartCount();
                    return;
                }
                
                // نمایش آیتم‌های سبد خرید
                let cartHTML = `
                    <div class="cart-header">
                        <span>محصول</span>
                        <span>قیمت واحد</span>
                        <span>تعداد</span>
                        <span>قیمت کل</span>
                        <span>حذف</span>
                    </div>
                `;
                
                let subtotal = 0;
                
                cart.forEach((item, index) => {
                    const itemPrice = this.parsePrice(item.price);
                    const itemQuantity = item.quantity || 1;
                    const itemTotal = itemPrice * itemQuantity;
                    subtotal += itemTotal;
                    
                    console.log(`آیتم ${index}:`, {
                        name: item.name,
                        price: itemPrice,
                        quantity: itemQuantity,
                        total: itemTotal
                    });
                    
                    cartHTML += `
                        <div class="cart-row" data-index="${index}">
                            <div class="product-info">
                                <img src="${item.image || 'https://via.placeholder.com/70?text=محصول'}" 
                                     alt="${item.name}"
                                     onerror="this.src='https://via.placeholder.com/70?text=محصول'">
                                <div class="product-details">
                                    <div class="product-name">${item.name}</div>
                                    <div class="product-weight">${item.weight}</div>
                                </div>
                            </div>
                            <div class="price">${this.formatPrice(itemPrice)}</div>
                            <div class="quantity-control">
                                <button class="qty-btn decrease" data-index="${index}">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="qty-display">${this.englishToPersian(itemQuantity)}</span>
                                <button class="qty-btn increase" data-index="${index}">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="total-price">${this.formatPrice(itemTotal)}</div>
                            <button class="remove-btn" data-index="${index}" title="حذف محصول">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                });
                
                container.innerHTML = cartHTML;
                
                // محاسبه خلاصه سفارش
                const shipping = subtotal >= 500000 ? 0 : 30000;
                const total = subtotal + shipping;
                
                if (summary) {
                    summary.innerHTML = `
                        <h3>خلاصه سفارش</h3>
                        <div class="summary-row">
                            <span>مجموع قیمت محصولات</span>
                            <span>${this.formatPrice(subtotal)}</span>
                        </div>
                        <div class="summary-row">
                            <span>هزینه ارسال</span>
                            <span>${shipping === 0 ? 'رایگان' : this.formatPrice(shipping)}</span>
                        </div>
                        <div class="summary-row bold">
                            <span>مبلغ قابل پرداخت</span>
                            <span>${this.formatPrice(total)}</span>
                        </div>
                        <div class="payment-method">
                            <p>روش پرداخت:</p>
                            <label>
                                <input type="radio" name="payment" value="online" checked>
                                پرداخت اینترنتی
                            </label>
                            <label>
                                <input type="radio" name="payment" value="cash">
                                پرداخت در محل
                            </label>
                        </div>
                        <button class="pay-btn" id="checkoutBtn">
                            <i class="fas fa-credit-card"></i> پرداخت و تکمیل سفارش
                        </button>
                        <button class="clear-cart-btn" id="clearCartBtn">
                            <i class="fas fa-trash-alt"></i> خالی کردن سبد خرید
                        </button>
                    `;
                }
                
                this.updateCartCount();
                this.setupEventListeners();
            },
            
            // تنظیم رویدادها
            setupEventListeners() {
                // رویداد کلیک برای دکمه‌ها
                document.addEventListener('click', (e) => {
                    // کاهش تعداد
                    if (e.target.closest('.decrease')) {
                        const btn = e.target.closest('.decrease');
                        const index = parseInt(btn.dataset.index);
                        this.updateQuantity(index, -1);
                    }
                    
                    // افزایش تعداد
                    if (e.target.closest('.increase')) {
                        const btn = e.target.closest('.increase');
                        const index = parseInt(btn.dataset.index);
                        this.updateQuantity(index, 1);
                    }
                    
                    // حذف محصول
                    if (e.target.closest('.remove-btn')) {
                        const btn = e.target.closest('.remove-btn');
                        const index = parseInt(btn.dataset.index);
                        this.removeItem(index);
                    }
                });
                
                // دکمه پرداخت
                const checkoutBtn = document.getElementById('checkoutBtn');
                if (checkoutBtn) {
                    checkoutBtn.addEventListener('click', () => this.checkout());
                }
                
                // دکمه خالی کردن سبد
                const clearCartBtn = document.getElementById('clearCartBtn');
                if (clearCartBtn) {
                    clearCartBtn.addEventListener('click', () => this.clearCart());
                }
            },
            
            // به‌روزرسانی تعداد
            updateQuantity(index, change) {
                const cart = this.getCart();
                
                if (!cart[index]) {
                    console.error('آیتم پیدا نشد:', index);
                    return;
                }
                
                cart[index].quantity += change;
                
                // حداقل تعداد ۱
                if (cart[index].quantity < 1) {
                    cart[index].quantity = 1;
                }
                
                this.saveCart(cart);
                this.renderCart();
                this.showNotification('تعداد به‌روزرسانی شد');
            },
            
            // حذف محصول
            removeItem(index) {
                if (confirm('آیا از حذف این محصول از سبد خرید مطمئن هستید؟')) {
                    const cart = this.getCart();
                    
                    if (cart[index]) {
                        const removedItem = cart.splice(index, 1);
                        this.saveCart(cart);
                        this.renderCart();
                        this.showNotification(`«${removedItem[0].name}» حذف شد`);
                    }
                }
            },
            
            // خالی کردن سبد خرید
            clearCart() {
                if (confirm('آیا می‌خواهید تمام سبد خرید را خالی کنید؟')) {
                    localStorage.removeItem(this.key);
                    this.renderCart();
                    this.showNotification('سبد خرید خالی شد');
                }
            },
            
            // پرداخت
            checkout() {
                const cart = this.getCart();
                
                if (cart.length === 0) {
                    this.showNotification('سبد خرید شما خالی است!');
                    return;
                }
                
                const paymentMethod = document.querySelector('input[name="payment"]:checked')?.value || 'online';
                
                if (paymentMethod === 'online') {
                    this.showNotification('در حال انتقال به درگاه پرداخت...');
                    setTimeout(() => {
                        localStorage.setItem('pending_order', JSON.stringify(cart));
                        window.location.href = 'payment.html';
                    }, 1500);
                } else {
                    this.showNotification('سفارش شما ثبت شد. همکاران ما برای هماهنگی با شما تماس خواهند گرفت.');
                    this.saveOrderToServer(cart);
                }
            },
            
            // ذخیره سفارش در سرور
            saveOrderToServer(cart) {
                const total = cart.reduce((sum, item) => {
                    return sum + (this.parsePrice(item.price) * (item.quantity || 1));
                }, 0);
                
                console.log('ارسال سفارش به سرور:', { cart, total });
                
                // شبیه‌سازی درخواست سرور
                setTimeout(() => {
                    localStorage.removeItem(this.key);
                    this.renderCart();
                    
                    alert(`✅ سفارش شما با موفقیت ثبت شد!\n\n💰 مبلغ: ${this.formatPrice(total)}\n📦 تعداد محصولات: ${cart.length}\n\nاز خرید شما متشکریم!`);
                }, 1000);
            },
            
            // نمایش نوتیفیکیشن
            showNotification(message) {
                // حذف نوتیفیکیشن قبلی
                const oldNotification = document.querySelector('.cart-notification');
                if (oldNotification) {
                    oldNotification.remove();
                }
                
                // ایجاد نوتیفیکیشن جدید
                const notification = document.createElement('div');
                notification.className = 'cart-notification';
                notification.textContent = message;
                document.body.appendChild(notification);
                
                // حذف خودکار پس از ۳ ثانیه
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.style.opacity = '0';
                        notification.style.transition = 'opacity 0.3s ease';
                        setTimeout(() => {
                            if (notification.parentNode) {
                                notification.remove();
                            }
                        }, 300);
                    }
                }, 3000);
            },
            
            // اضافه کردن محصولات تست (برای دیباگ)
            addTestProducts() {
                const testProducts = [
                    {
                        name: 'آجیل 4 مغز شور',
                        price: 651000,
                        quantity: 2,
                        weight: '۱ کیلوگرم',
                        image: '../images/2.png'
                    },
                    {
                        name: 'آجیل 5 مغز شور',
                        price: '۲۸۴۰۰۰ تومان',
                        quantity: 1,
                        weight: '۵۰۰ گرم',
                        image: '../images/3.png'
                    }
                ];
                
                this.saveCart(testProducts);
                this.renderCart();
                console.log('محصولات تست اضافه شدند');
                alert('محصولات تست اضافه شدند!');
            }
        };
        
        // مدیریت منوی موبایل
        const setupMobileMenu = () => {
            const hamburgerIcon = document.getElementById('hamburgerIcon');
            const offCanvasMenu = document.getElementById('offCanvasMenu');
            const closeOffCanvas = document.getElementById('closeOffCanvas');
            const menuOverlay = document.getElementById('menuOverlay');
            
            if (hamburgerIcon && offCanvasMenu) {
                hamburgerIcon.addEventListener('click', () => {
                    offCanvasMenu.classList.add('open');
                    if (menuOverlay) menuOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }
            
            if (closeOffCanvas && offCanvasMenu) {
                closeOffCanvas.addEventListener('click', () => {
                    offCanvasMenu.classList.remove('open');
                    if (menuOverlay) menuOverlay.classList.remove('active');
                    document.body.style.overflow = 'auto';
                });
            }
            
            if (menuOverlay && offCanvasMenu) {
                menuOverlay.addEventListener('click', () => {
                    offCanvasMenu.classList.remove('open');
                    menuOverlay.classList.remove('active');
                    document.body.style.overflow = 'auto';
                });
            }
        };
        
        // مقداردهی اولیه
        document.addEventListener('DOMContentLoaded', () => {
            // نمایش سبد خرید
            CartManager.renderCart();
            
            // تنظیم منوی موبایل
            setupMobileMenu();
            
            // در دسترس قرار دادن برای دیباگ
            window.CartManager = CartManager;
            
            console.log('✅ صفحه سبد خرید بارگذاری شد');
            
            // اضافه کردن دکمه‌های دیباگ (فقط در حالت توسعه)
            const debugDiv = document.createElement('div');
            debugDiv.style.cssText = `
                position: fixed;
                bottom: 20px;
                left: 20px;
                z-index: 9998;
                display: flex;
                flex-direction: column;
                gap: 10px;
            `;
            
            const testBtn = document.createElement('button');
            testBtn.textContent = '➕ اضافه کردن محصولات تست';
            testBtn.style.cssText = `
                background: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-family: inherit;
            `;
            testBtn.onclick = () => CartManager.addTestProducts();
            
            const debugBtn = document.createElement('button');
            debugBtn.textContent = '🐛 دیباگ localStorage';
            debugBtn.style.cssText = `
                background: #28a745;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-family: inherit;
            `;
            debugBtn.onclick = () => {
                console.log('🔍 دیباگ localStorage:');
                const cart = JSON.parse(localStorage.getItem('birjand_shop_cart') || '[]');
                console.log('سبد خرید:', cart);
                cart.forEach((item, i) => {
                    console.log(`آیتم ${i}:`, {
                        name: item.name,
                        price: item.price,
                        type: typeof item.price
                    });
                });
                alert('نتایج دیباگ در کنسول مرورگر (F12) نمایش داده شد');
            };
            
            debugDiv.appendChild(testBtn);
            debugDiv.appendChild(debugBtn);
            document.body.appendChild(debugDiv);
        });
    </script>
</body>
</html>