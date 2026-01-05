// cart_manager.js - FIXED VERSION
(function() {
    'use strict';
    
    // کلید localStorage
    const CART_KEY = 'birjand_shop_cart';
    
    // تابع برای تبدیل اعداد فارسی به انگلیسی
    function persianToEnglish(str) {
        if (typeof str !== 'string') return str;
        
        const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        let result = '';
        for (let char of str) {
            const index = persianNumbers.indexOf(char);
            result += index !== -1 ? englishNumbers[index] : char;
        }
        return result;
    }
    
    // تابع برای تبدیل اعداد انگلیسی به فارسی
    function englishToPersian(str) {
        if (typeof str !== 'string') str = String(str);
        
        const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        
        let result = '';
        for (let char of str) {
            const index = englishNumbers.indexOf(char);
            result += index !== -1 ? persianNumbers[index] : char;
        }
        return result;
    }
    
    // تابع برای تبدیل قیمت به عدد
    function parsePrice(priceInput) {
        console.log('🔍 parsePrice input:', priceInput, 'Type:', typeof priceInput);
        
        // اگر عدد است، برگردون
        if (typeof priceInput === 'number') {
            console.log('✅ Already a number:', priceInput);
            return priceInput;
        }
        
        // اگر رشته است
        if (typeof priceInput === 'string') {
            // تبدیل اعداد فارسی به انگلیسی
            let cleaned = persianToEnglish(priceInput);
            console.log('After persianToEnglish:', cleaned);
            
            // حذف همه‌چیز جز اعداد
            cleaned = cleaned.replace(/[^\d]/g, '');
            console.log('After removing non-digits:', cleaned);
            
            // تبدیل به عدد
            const result = parseInt(cleaned, 10);
            console.log('Parsed result:', result);
            
            // اگر نتیجه نامعتبر بود
            if (isNaN(result) || result === 0) {
                console.warn('⚠️ Invalid price, using 0');
                return 0;
            }
            
            return result;
        }
        
        console.warn('⚠️ Unsupported price type, using 0');
        return 0;
    }
    
    // تابع برای قالب‌بندی قیمت
    function formatPrice(price) {
        const num = parsePrice(price);
        if (num === 0 || isNaN(num)) {
            return '۰ تومان';
        }
        
        // جدا کردن هزارگان
        let formatted = String(num).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        
        // تبدیل به فارسی
        formatted = englishToPersian(formatted);
        
        return formatted + ' تومان';
    }
    
    // مدیریت سبد خرید
    const CartManager = {
        // دریافت سبد خرید از localStorage
        getCart() {
            try {
                const cartData = localStorage.getItem(CART_KEY);
                console.log('📦 Raw cart data:', cartData);
                
                if (!cartData) {
                    return [];
                }
                
                const cart = JSON.parse(cartData);
                console.log('🛒 Parsed cart:', cart);
                
                // پردازش هر آیتم
                return cart.map(item => {
                    console.log('Processing item:', item);
                    
                    return {
                        name: item.name || 'محصول ناشناس',
                        price: parsePrice(item.price || item.priceText || 0),
                        quantity: parseInt(item.quantity) || 1,
                        weight: item.weight || item.weight_name || 'وزن استاندارد',
                        image: item.image || item.productImage || '../images/default-product.jpg'
                    };
                });
            } catch (error) {
                console.error('❌ Error reading cart:', error);
                return [];
            }
        },
        
        // ذخیره سبد خرید
        saveCart(cart) {
            localStorage.setItem(CART_KEY, JSON.stringify(cart));
            console.log('💾 Cart saved:', cart);
        },
        
        // اضافه کردن محصول
        addProduct(productData) {
            console.log('➕ Adding product:', productData);
            
            const cart = this.getCart();
            
            // ساختار محصول
            const product = {
                name: productData.name || productData.productName || 'محصول',
                price: parsePrice(productData.price || productData.productPrice || 0),
                quantity: parseInt(productData.quantity) || parseInt(productData.qty) || 1,
                weight: productData.weight || productData.weight_name || productData.productWeightName || 'وزن استاندارد',
                image: productData.image || productData.productImage || '../images/default-product.jpg'
            };
            
            console.log('📝 Processed product:', product);
            
            // بررسی وجود محصول مشابه
            const existingIndex = cart.findIndex(item => 
                item.name === product.name && item.weight === product.weight
            );
            
            if (existingIndex > -1) {
                // افزایش تعداد
                cart[existingIndex].quantity += product.quantity;
            } else {
                // اضافه کردن جدید
                cart.push(product);
            }
            
            this.saveCart(cart);
            this.updateCartCount();
            
            console.log('✅ Product added to cart');
            return true;
        },
        
        // به‌روزرسانی تعداد در هدر
        updateCartCount() {
            const cart = this.getCart();
            const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
            
            document.querySelectorAll('.cart-count').forEach(el => {
                el.textContent = totalItems;
            });
            
            console.log('🔢 Cart count updated:', totalItems);
            return totalItems;
        },
        
        // نمایش نوتیفیکیشن
        showNotification(message, type = 'success') {
            // حذف نوتیفیکیشن قبلی
            const oldNotification = document.querySelector('.cart-notification');
            if (oldNotification) {
                oldNotification.remove();
            }
            
            // ایجاد نوتیفیکیشن
            const notification = document.createElement('div');
            notification.className = 'cart-notification';
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                background: ${type === 'success' ? '#386641' : '#ef4444'};
                color: white;
                padding: 15px 25px;
                border-radius: 10px;
                z-index: 9999;
                box-shadow: 0 5px 20px rgba(0,0,0,0.2);
                animation: slideIn 0.3s ease;
                max-width: 90%;
                text-align: center;
                font-family: Vazirmatn, sans-serif;
                font-weight: 500;
            `;
            
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // حذف خودکار
            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transition = 'opacity 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    };
    
    // تابع اصلی برای مقداردهی اولیه
    function init() {
        console.log('🚀 Cart Manager initialized');
        
        // به‌روزرسانی تعداد اولیه
        CartManager.updateCartCount();
        
        // رویداد کلیک روی دکمه‌های افزودن به سبد خرید
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('add-btn') || e.target.closest('.add-btn')) {
                e.preventDefault();
                
                const addBtn = e.target.classList.contains('add-btn') ? e.target : e.target.closest('.add-btn');
                const productCard = addBtn.closest('.product-card');
                
                if (!productCard) {
                    console.error('❌ Product card not found');
                    return;
                }
                
                // استخراج اطلاعات محصول
                const productInfo = {
                    name: productCard.querySelector('.product-name')?.textContent?.trim() || 'محصول',
                    price: productCard.querySelector('.current-price')?.textContent?.trim() || '0',
                    quantity: parseInt(productCard.querySelector('.qty-input')?.value) || 1,
                    weight: productCard.querySelector('.weight-btn.active')?.textContent?.trim() || 
                            productCard.querySelector('.weight-select option:checked')?.textContent?.trim() || 'وزن استاندارد',
                    image: productCard.querySelector('img')?.src || '../images/default-product.jpg'
                };
                
                console.log('📋 Product info extracted:', productInfo);
                
                // اضافه کردن به سبد خرید
                if (CartManager.addProduct(productInfo)) {
                    CartManager.showNotification(`«${productInfo.name}» به سبد خرید اضافه شد!`);
                    
                    // هدایت به صفحه سبد خرید بعد از 1 ثانیه
                    setTimeout(() => {
                        window.location.href = '../Cart/cart.php';
                    }, 1000);
                }
            }
        });
        
        // رویداد برای دکمه‌های + و - تعداد
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
        });
        
        // رویداد برای انتخاب وزن
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('weight-btn') && !e.target.classList.contains('active')) {
                const weightOptions = e.target.closest('.weight-options');
                if (!weightOptions) return;
                
                weightOptions.querySelectorAll('.weight-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                e.target.classList.add('active');
            }
        });
        
        // رویداد برای تغییر select وزن
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('weight-select')) {
                const select = e.target;
                const productCard = select.closest('.product-card');
                const selectedOption = select.options[select.selectedIndex];
                const selectedPrice = selectedOption.value;
                
                // به‌روزرسانی قیمت نمایشی
                const priceElement = productCard.querySelector('.current-price');
                if (priceElement && selectedPrice) {
                    const priceNum = parsePrice(selectedPrice);
                    priceElement.textContent = formatPrice(priceNum);
                }
            }
        });
        
        // اضافه کردن استایل برای انیمیشن
        const style = document.createElement('style');
        style.textContent = `
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
        `;
        document.head.appendChild(style);
        
        // تابع دیباگ را در دسترس قرار بده
        window.debugCart = function() {
            console.log('🔍 Debugging cart...');
            const cart = CartManager.getCart();
            console.log('Current cart:', cart);
            console.log('LocalStorage item:', localStorage.getItem(CART_KEY));
            
            cart.forEach((item, i) => {
                console.log(`Item ${i}:`, {
                    name: item.name,
                    price: item.price,
                    quantity: item.quantity,
                    weight: item.weight,
                    total: item.price * item.quantity
                });
            });
            
            alert('نتایج دیباگ در کنسول مرورگر نمایش داده شد (F12)');
        };
        
        // تابع برای افزودن محصولات تست
        window.addTestProducts = function() {
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
                    price: 284000,
                    quantity: 1,
                    weight: '۵۰۰ گرم',
                    image: '../images/3.png'
                }
            ];
            
            testProducts.forEach(product => {
                CartManager.addProduct(product);
            });
            
            CartManager.showNotification('محصولات تست اضافه شدند!');
            
            setTimeout(() => {
                window.location.href = '../Cart/cart.php';
            }, 1500);
        };
    }
    
    // شروع وقتی DOM آماده است
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // در دسترس قرار دادن CartManager
    window.CartManager = CartManager;
})();