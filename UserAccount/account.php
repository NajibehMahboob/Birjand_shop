<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خشکبار بیرجند</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>

.header-left .header-icon {
    color: white !important;
    font-size: 2.0rem !important;
}

.header-left .cart-count {
    background: red !important;
    color: white !important;
    top: 38px !important;
    left: 260px !important;
    font-size: 0.8rem !important;
    width: 20px !important;
    height: 20px !important;
}

</style>
<body>
    <?php include '../db_config.php'; ?>

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
                        <span class="cart-count">0</span>
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
                <h3 class="subsection-title"> خشکبار</h3>
                    <div class="separator-line"></div>
                    <h3 class="subsection-title" id="shoor"> آجیل شور</h3>

                    <div class="product-cards-container">
                        
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

                    <h3 class="subsection-title" id="shirin" >آجیل خام (شیرین)</h3>

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
 

                    <h3 class="subsection-title"id="zaferan" >زعفران</h3>

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

<!-- اضافه کردن مدیر سبد خرید -->
<script src="cart_manager.js"></script>

<!-- مدیریت تیکت پشتیبانی -->
<script>
// مطمئن شویم تیکت هنگام بارگذاری صفحه بسته است
window.addEventListener('DOMContentLoaded', function() {
    const ticketModal = document.getElementById('ticketModal');
    if (ticketModal) {
        ticketModal.style.display = 'none';
        console.log('Ticket modal hidden on page load');
    }
    
    // همچنین مطمئن شویم هنگام رفرش هم بسته بماند
    window.addEventListener('beforeunload', function() {
        if (ticketModal) {
            ticketModal.style.display = 'none';
        }
    });
});

// اصلاح کدهای قبلی تیکت برای جلوگیری از باز شدن خودکار
document.addEventListener('DOMContentLoaded', function() {
    const ticketIcon = document.getElementById('ticketIcon');
    const ticketModal = document.getElementById('ticketModal');
    const closeButton = document.querySelector('.close-button');
    
    // فقط وقتی کاربر روی آیکون کلیک کرد باز شود
    if (ticketIcon && ticketModal) {
        // ابتدا مطمئن شویم مدال بسته است
        ticketModal.style.display = 'none';
        
        ticketIcon.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            ticketModal.style.display = 'block';
            
            // جلوگیری از اسکرول صفحه وقتی مدال باز است
            document.body.style.overflow = 'hidden';
        });
    }
    
    // بستن با دکمه X
    if (closeButton && ticketModal) {
        closeButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            ticketModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    }
    
    // بستن با کلیک خارج از مدال
    if (ticketModal) {
        window.addEventListener('click', function(event) {
            if (event.target === ticketModal) {
                ticketModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        
        // بستن با کلید ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && ticketModal.style.display === 'block') {
                ticketModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    }
    
    // مدیریت فرم تیکت (کدهای قبلی)
    const ticketForm = document.querySelector('#ticketModal form');
    const ticketMessageDiv = document.getElementById('ticketMessage');
    
    if (ticketForm) {
        ticketForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const formData = new FormData(this);

            fetch('process_ticket.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (ticketMessageDiv) {
                    ticketMessageDiv.innerHTML = data;
                }
                ticketForm.reset();
                
                // بستن خودکار پس از 3 ثانیه
                setTimeout(() => {
                    if (ticketModal) {
                        ticketModal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                    if (ticketMessageDiv) {
                        setTimeout(() => {
                            ticketMessageDiv.innerHTML = '';
                        }, 500);
                    }
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                if (ticketMessageDiv) {
                    ticketMessageDiv.innerHTML = '<p style="color: red;">خطا در ارسال تیکت. لطفا مجددا تلاش کنید.</p>';
                }
            });
        });
    }
});

// همچنین اضافه کردن کمی CSS برای بهتر شدن تجربه کاربری
(function() {
    const style = document.createElement('style');
    style.textContent = `
        /* مطمئن شویم مدال موقع لود صفحه دیده نمی‌شود */
        #ticketModal.modal {
            display: none !important;
        }
        
        /* وقتی مدال باز است */
        #ticketModal.modal[style*="display: block"] {
            display: block !important;
        }
        
        /* جلوگیری از فلیکر هنگام لود صفحه */
        #ticketModal {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        #ticketModal[style*="display: block"] {
            opacity: 1;
        }
        
        /* بهبود آیکون تیکت */
        .ticket-float-icon {
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .ticket-float-icon:hover {
            transform: scale(1.1);
        }
    `;
    document.head.appendChild(style);
})();
</script>

</body>
</html>

