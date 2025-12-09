<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خشکبار بیرجند</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<body>
    <!-- Hamburger Menu Icon -->
    <div class="hamburger-menu-icon" id="hamburgerIcon">
        <i class="fas fa-bars"></i>
        <span>منو</span>
    </div>

    <!-- Off-canvas Menu Panel -->
    <div class="off-canvas-menu" id="offCanvasMenu">
        <div class="menu-header">
            <span class="close-off-canvas" id="closeOffCanvas">&times;</span>
            <h3></h3>
        </div>
        <ul class="menu-list">
            <li><a href="#">آجیل <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">خشکبار <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">زعفران <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">تنقلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">بسته‌های کادویی <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">کالای اساسی و خواربار <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">شکلات <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">محصولات ویژه <i class="fas fa-chevron-left"></i></a></li>
            <li><a href="#">پک اقتصادی خانوار</a></li>
        </ul>
        <ul class="menu-options">
            <li><a href="#"><i class="fas fa-calendar-alt"></i> تقویم کاری</a></li>
            <li><a href="#"><i class="fas fa-paper-plane"></i> تماس با ما</a></li>
            <li><a href="#"><i class="fas fa-box"></i> خرید پک های یلدا و سازمانی</a></li>
            <li><a href="#"><i class="fas fa-book-open"></i> مجله سلامت</a></li>
        </ul>
    </div>

    <!-- Overlay for when menu is open -->
    <div class="menu-overlay" id="menuOverlay"></div>

    <!-- بقیه کدهای index.php از اینجا شروع میشن، مثل <header class="main-header"> -->

    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="#" class="cart-icon">
                        <i class="fas fa-shopping-basket"></i>
                        <span class="cart-count">0</span>
                    </a>
                </div>
                <div class="header-center">
                    <h1>خشکبار بیرجند</h1>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <input type="text" placeholder="جستجو برای محصولات...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">صفحه نخست</a></li>
                    <li class="dropdown">
                        <a href="#">دسته بندی محصولات <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <!-- اینجا میتونی لینک دسته بندی ها رو بذاری -->
                            <a href="#">خشکبار</a>
                            <a href="#">زعفران</a>
                        </div>
                    </li>
                    <li><a href="#">سبدخرید</a></li>
                    <li><a href="#">درباره ما</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
            <div class="container">
                <section class="products-section">
                    <h2 class="section-title">خرید آجیل</h2>
                    <div class="separator-line"></div>
                    <h3 class="subsection-title">خرید آجیل شور</h3>

                    <div class="product-cards-container">
                        <!-- Product Card 1 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/2.png" alt="آجیل 4 مغز شور">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">آجیل 4 مغز شور</h4>
                                <!-- <div class="rating">*****</div> حذف شد -->
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

                        <!-- Product Card 2 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="images/3.png" alt="آجیل 5 مغز شور">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل 5 مغز شور</h4>
                                <!-- <div class="rating">*****</div> حذف شد -->
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

                        <!-- Product Card 3 -->
                        <div class="product-card">
                            <div class="discount-badge">۱۰٪ تخفیف</div>
                            <div class="product-image">
                                <img src="images/4.png" alt="آجیل پذیرایی">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل پذیرایی</h4>
                                <!-- <div class="rating">*****</div> حذف شد -->
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

                        <!-- Product Card 4 -->
                        <div class="product-card">
                            <div class="discount-badge">۳۰٪ تخفیف</div>
                            <div class="product-image">
                                <img src="images/5.png" alt="آجیل ویژه">
                            </div>
                             <div class="product-info">
                                <h4 class="product-name">آجیل ویژه</h4>
                                <!-- <div class="rating">*****</div> حذف شد -->
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
                    </div> <!-- پایان div product-cards-container برای آجیل شور -->

                    <h3 class="subsection-title" >خرید آجیل خام (شیرین)</h3>

                    <div class="product-cards-container">
                        <!-- Product Card 1 - آجیل بلدا -->
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

                        <!-- Product Card 2 - آجیل دیابتی -->
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

                        <!-- Product Card 3 - آجیل 4 مغز خام -->
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

                        <!-- Product Card 4 - آجیل 5 مغز خام -->
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

                    </div> <!-- پایان div product-cards-container برای آجیل خام -->
                </section>
            </div>
        </main>

    <footer class="main-footer">
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
                        <!-- اینجا میتونی آیکون‌های شبکه های اجتماعی دیگه رو اضافه کنی -->
                    </div>
                    <div class="enamad-logos">
                        <img src="https://via.placeholder.com/100x100?text=Enamad" alt="Enamad Logo">
                        <img src="https://via.placeholder.com/100x100?text=Samandehi" alt="Samandehi Logo">
                        <!-- اینجا میتونی لوگوهای نماد اعتماد و ساماندهی رو بذاری -->
                    </div>
                </div>
                <div class="footer-column address-map">
                    <h3>آدرس</h3>
                    <p><i class="fas fa-map-marker-alt"></i> بین پیروزی 73 - میدان لادن</p>
                    <p>خشکبار بیرجند</p>
                    <div class="map-placeholder">
                        <!-- اینجا میتونی iframe گوگل مپ رو بذاری -->
                        <img src="https://via.placeholder.com/300x200?text=Google+Map" alt="Map Location">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>طراحی شده توسط ایمن گستران تهران</p>
            </div>
        </div>
    </footer>

    <!-- Ticket Icon -->
    <div class="ticket-float-icon" id="ticketIcon">
        <i class="fas fa-headset"></i>
    </div>

    <!-- Ticket Form Modal -->
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
        // JavaScript for modal functionality
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

        // Handle form submission with AJAX
        ticketForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(this);

            fetch('process_ticket.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                ticketMessageDiv.innerHTML = data; // Display success or error message
                ticketForm.reset(); // Clear the form
                // Optionally close modal after a short delay
                setTimeout(() => {
                    ticketModal.style.display = 'none';
                    ticketMessageDiv.innerHTML = ''; // Clear message
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                ticketMessageDiv.innerHTML = '<p style="color: red;">خطا در ارسال تیکت. لطفا مجددا تلاش کنید.</p>';
            });
        });
       
         // ... (کدهای جاوااسکریپت برای modal ticket) ...

         // JavaScript for Hamburger Menu - باید اینجا باشه
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const offCanvasMenu = document.getElementById('offCanvasMenu');
    const closeOffCanvas = document.getElementById('closeOffCanvas');
    const menuOverlay = document.getElementById('menuOverlay');

    if (hamburgerIcon) { // برای اطمینان که عنصر وجود داره
        hamburgerIcon.addEventListener('click', () => {
            offCanvasMenu.classList.add('open');
            menuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeOffCanvas) { // برای اطمینان که عنصر وجود داره
        closeOffCanvas.addEventListener('click', () => {
            offCanvasMenu.classList.remove('open');
            menuOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    }

    if (menuOverlay) { // برای اطمینان که عنصر وجود داره
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
</script>

    </script>
</body>
</html>