<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خشکبار بیرجند</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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
            <li><a href="#">تنقلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">بسته‌های کادویی <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">کالای اساسی و خواربار <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">شکلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">محصولات ویژه <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">پک اقتصادی خانوار</a></li>
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
                    <a href="./Cart/cart.php" class="cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="cart-count">0</span>
                    </a>
                </div>
                
                <div class="header-buttons">
                   <a href="./UserAccount/sign_in.php" class="btn-header">ورود</a>
                   <a href="./UserAccount/sign_up.php" class="btn-header btn-signup">ثبت نام</a>
                </div>

            </div>
            <nav class="main-nav">
                <ul>
                   
                    <li class="dropdown">
                        دسته بندی محصولات <i class="fas fa-caret-down"></i>
                        <div class="dropdown-content">
                        
                            <a href="index.php">خشکبار</a>
                            <a href="index.php">زعفران</a>
                        </div>
                    </li>
                    <li><a href="#">سبدخرید</a></li>
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
                                <img src="images/2.png" alt="آجیل 4 مغز شور">
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
                                <img src="images/3.png" alt="آجیل 5 مغز شور">
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
                                <img src="images/4.png" alt="آجیل پذیرایی">
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
                                <img src="images/5.png" alt="آجیل ویژه">
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
                                <img src="images/7.png" alt="آجیل یلدا">
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
                                <img src="images/1.png" alt="آجیل دیابتی">
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
                                <img src="images/6.png" alt="آجیل 4 مغز خام">
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
                                <img src="images/8.png" alt="آجیل 5 مغز خام">
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
            <img src="images/zaferan1.jpg" alt="آجیل یلدا">
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
            <img src="images/zaferan2.jpg" alt="آجیل دیابتی">
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
            <img src="images/zaferan3.jpg" alt="آجیل 4 مغز خام">
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
            <img src="images/zaferan4.jpg" alt="آجیل 5 مغز خام">
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


    

document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ صفحه اصلی بارگذاری شد - سیستم لاگین چک فعال شد');
    
    // پیدا کردن همه دکمه‌های "افزودن به سبد خرید"
    const addToCartButtons = document.querySelectorAll('.add-btn');
    
    // اضافه کردن رویداد کلیک به هر دکمه
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            
            console.log('🛒 دکمه افزودن به سبد خرید کلیک شد');
            
            // نمایش پیام به کاربر
            showLoginMessage();
        });
    });
    
    // همچنین اضافه کردن رویداد برای دکمه‌های + و - تعداد
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('qty-btn') && !e.target.classList.contains('add-btn')) {
            const qtyInput = e.target.closest('.quantity-control')?.querySelector('.qty-input');
            if (!qtyInput) return;
            
            let value = parseInt(qtyInput.value) || 1;
            
            if (e.target.textContent === '-' && value > 1) {
                qtyInput.value = value - 1;
            } else if (e.target.textContent === '+') {
                qtyInput.value = value + 1;
            }
        }
        
        // مدیریت دکمه‌های انتخاب وزن
        if (e.target.classList.contains('weight-btn') && !e.target.classList.contains('active')) {
            const weightOptions = e.target.closest('.weight-options');
            if (!weightOptions) return;
            
            weightOptions.querySelectorAll('.weight-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            e.target.classList.add('active');
        }
    });
});

// تابع نمایش پیام لاگین
function showLoginMessage() {
    // ایجاد مودال برای پیام
    const modal = document.createElement('div');
    modal.id = 'loginModal';
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    `;
    
    const modalContent = document.createElement('div');
    modalContent.style.cssText = `
        background: white;
        padding: 30px;
        border-radius: 15px;
        width: 90%;
        max-width: 400px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        animation: slideUp 0.3s ease;
    `;
    
    modalContent.innerHTML = `
        <div style="margin-bottom: 20px;">
            <i class="fas fa-user-lock" style="font-size: 3rem; color: #386641; margin-bottom: 15px;"></i>
            <h3 style="color: #2b5033; margin-bottom: 15px; font-size: 1.3rem;">کاربر گرامی</h3>
            <p style="color: #555; line-height: 1.6; margin-bottom: 25px;">
                برای افزودن محصول به سبد خرید، ابتدا وارد حساب کاربری خود شوید.
            </p>
        </div>
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <a href="./UserAccount/sign_in.php" 
               style="background: linear-gradient(135deg, #386641, #2b5033); 
                      color: white; 
                      padding: 14px; 
                      border-radius: 8px; 
                      text-decoration: none; 
                      font-weight: 600;
                      transition: all 0.3s;">
                <i class="fas fa-sign-in-alt"></i> ورود به حساب کاربری
            </a>
            <a href="./UserAccount/sign_up.php" 
               style="background: #f0f0f0; 
                      color: #333; 
                      padding: 14px; 
                      border-radius: 8px; 
                      text-decoration: none; 
                      font-weight: 600;
                      transition: all 0.3s;">
                <i class="fas fa-user-plus"></i> ثبت نام جدید
            </a>
            <button id="closeLoginModal" 
                    style="background: #ef4444; 
                           color: white; 
                           border: none; 
                           padding: 12px; 
                           border-radius: 8px; 
                           cursor: pointer; 
                           font-weight: 600;
                           margin-top: 10px;">
                بستن
            </button>
        </div>
    `;
    
    modal.appendChild(modalContent);
    document.body.appendChild(modal);
    
    // اضافه کردن انیمیشن
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    `;
    document.head.appendChild(style);
    
    // رویداد بستن مودال
    document.getElementById('closeLoginModal').addEventListener('click', function() {
        modal.style.animation = 'fadeOut 0.3s ease forwards';
        setTimeout(() => {
            if (modal.parentNode) {
                modal.parentNode.removeChild(modal);
            }
        }, 300);
    });
    
    // بستن با کلیک خارج از مودال
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.animation = 'fadeOut 0.3s ease forwards';
            setTimeout(() => {
                if (modal.parentNode) {
                    modal.parentNode.removeChild(modal);
                }
            }, 300);
        }
    });
    
    // اضافه کردن انیمیشن fadeOut
    const fadeOutStyle = document.createElement('style');
    fadeOutStyle.textContent = `
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
    `;
    document.head.appendChild(fadeOutStyle);
}

// همچنین اضافه کردن پیام ساده‌تر (آلترناتیو)
function showSimpleLoginAlert() {
    if (confirm('کاربر گرامی، برای افزودن محصول به سبد خرید ابتدا وارد حساب کاربری خود شوید.\n\nآیا می‌خواهید به صفحه ورود هدایت شوید؟')) {
        window.location.href = './UserAccount/sign_in.php';
    }
}

// برای تست سریع: دکمه دیباگ اضافه کنید
document.addEventListener('DOMContentLoaded', function() {
    // اضافه کردن دکمه تست (فقط در حالت توسعه)
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
    testBtn.textContent = '🧪 تست پیام لاگین';
    testBtn.style.cssText = `
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-family: inherit;
        font-size: 14px;
    `;
    testBtn.onclick = showLoginMessage;
    
    debugDiv.appendChild(testBtn);
    document.body.appendChild(debugDiv);
});

console.log('✅ سیستم چک لاگین برای صفحه اصلی فعال شد');

    </script>
    
    

    
</body>
</html>