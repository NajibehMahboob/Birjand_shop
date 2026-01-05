// cart_fixer.js - این فایل را در پوشه UserAccount ایجاد کنید
(function() {
    'use strict';
    
    console.log('🔧 Cart Fixer loaded');
    
    // کلید localStorage
    const CART_KEY = 'birjand_shop_cart_fixed';
    
    // تابع تبدیل اعداد فارسی به انگلیسی
    function persianToEnglish(str) {
        if (!str) return '0';
        if (typeof str !== 'string') str = String(str);
        
        const persianNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        const englishNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        let result = '';
        for (let char of str) {
            const index = persianNumbers.indexOf(char);
            result += index !== -1 ? englishNumbers[index] : char;
        }
        return result;
    }
    
    // تابع استخراج قیمت از متن
    function extractPriceFromText(priceText) {
        console.log('📊 Extracting price from:', priceText);
        
        if (!priceText) return 0;
        
        // تبدیل فارسی به انگلیسی
        let cleaned = persianToEnglish(priceText);
        console.log('After Persian to English:', cleaned);
        
        // حذف همه‌چیز جز اعداد
        cleaned = cleaned.replace(/[^\d]/g, '');
        console.log('After removing non-digits:', cleaned);
        
        // تبدیل به عدد
        const result = parseInt(cleaned, 10) || 0;
        console.log('Final price:', result);
        
        return result;
    }
    
    // تابع استخراج اطلاعات محصول
    function extractProductInfo(productCard) {
        if (!productCard) return null;
        
        try {
            // نام محصول
            const nameElement = productCard.querySelector('.product-name');
            const name = nameElement ? nameElement.textContent.trim() : 'محصول';
            
            // قیمت فعلی
            const priceElement = productCard.querySelector('.current-price');
            const priceText = priceElement ? priceElement.textContent.trim() : '0';
            const price = extractPriceFromText(priceText);
            
            // تعداد
            const qtyInput = productCard.querySelector('.qty-input');
            const quantity = qtyInput ? parseInt(qtyInput.value) || 1 : 1;
            
            // وزن انتخاب شده
            let weight = 'وزن استاندارد';
            const activeWeightBtn = productCard.querySelector('.weight-btn.active');
            if (activeWeightBtn) {
                weight = activeWeightBtn.textContent.trim();
            }
            
            // تصویر محصول
            const imgElement = productCard.querySelector('img');
            const image = imgElement ? imgElement.src : '../images/default-product.jpg';
            
            const productInfo = {
                name: name,
                price: price,
                quantity: quantity,
                weight: weight,
                image: image,
                timestamp: new Date().toISOString()
            };
            
            console.log('📝 Extracted product info:', productInfo);
            return productInfo;
            
        } catch (error) {
            console.error('❌ Error extracting product info:', error);
            return null;
        }
    }
    
    // تابع افزودن محصول به سبد خرید
    function addToCart(productInfo) {
        if (!productInfo || productInfo.price === 0) {
            console.warn('⚠️ Invalid product info or price is 0');
            return false;
        }
        
        try {
            // دریافت سبد خرید فعلی
            let cart = JSON.parse(localStorage.getItem(CART_KEY)) || [];
            console.log('📦 Current cart:', cart);
            
            // بررسی وجود محصول مشابه
            const existingIndex = cart.findIndex(item => 
                item.name === productInfo.name && item.weight === productInfo.weight
            );
            
            if (existingIndex > -1) {
                // افزایش تعداد
                cart[existingIndex].quantity += productInfo.quantity;
                console.log('➕ Increased quantity for existing product');
            } else {
                // اضافه کردن محصول جدید
                cart.push(productInfo);
                console.log('🆕 Added new product to cart');
            }
            
            // ذخیره در localStorage
            localStorage.setItem(CART_KEY, JSON.stringify(cart));
            console.log('💾 Cart saved to localStorage');
            
            // به‌روزرسانی تعداد در هدر
            updateCartCount();
            
            return true;
            
        } catch (error) {
            console.error('❌ Error adding to cart:', error);
            return false;
        }
    }
    
    // تابع به‌روزرسانی تعداد در آیکون سبد خرید
    function updateCartCount() {
        try {
            const cart = JSON.parse(localStorage.getItem(CART_KEY)) || [];
            const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
            
            document.querySelectorAll('.cart-count').forEach(el => {
                el.textContent = totalItems;
            });
            
            console.log('🔢 Cart count updated:', totalItems);
            return totalItems;
            
        } catch (error) {
            console.error('❌ Error updating cart count:', error);
            return 0;
        }
    }
    
    // تابع نمایش نوتیفیکیشن
    function showNotification(message, isError = false) {
        // حذف نوتیفیکیشن قبلی
        const oldNotification = document.querySelector('.cart-fixer-notification');
        if (oldNotification) {
            oldNotification.remove();
        }
        
        // ایجاد نوتیفیکیشن جدید
        const notification = document.createElement('div');
        notification.className = 'cart-fixer-notification';
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: ${isError ? '#ef4444' : '#386641'};
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            z-index: 9999;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            animation: slideIn 0.3s ease;
            font-family: Vazirmatn, sans-serif;
            font-weight: 500;
            text-align: center;
            max-width: 90%;
        `;
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // حذف خودکار بعد از 3 ثانیه
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }
    
    // تابع اصلی برای مقداردهی اولیه
    function init() {
        console.log('🚀 Cart Fixer initialized');
        
        // به‌روزرسانی اولیه تعداد
        updateCartCount();
        
        // رویداد کلیک روی دکمه‌های افزودن به سبد خرید
        document.addEventListener('click', function(e) {
            // بررسی کلیک روی دکمه افزودن
            if (e.target.classList.contains('add-btn') || 
                e.target.closest('.add-btn')) {
                
                e.preventDefault();
                e.stopPropagation();
                
                const addBtn = e.target.classList.contains('add-btn') 
                    ? e.target 
                    : e.target.closest('.add-btn');
                
                const productCard = addBtn.closest('.product-card');
                if (!productCard) {
                    console.warn('⚠️ Product card not found');
                    return;
                }
                
                // استخراج اطلاعات محصول
                const productInfo = extractProductInfo(productCard);
                if (!productInfo) {
                    showNotification('خطا در دریافت اطلاعات محصول!', true);
                    return;
                }
                
                // افزودن به سبد خرید
                if (addToCart(productInfo)) {
                    showNotification(`«${productInfo.name}» به سبد خرید اضافه شد!`);
                    
                    // هدایت به صفحه سبد خرید بعد از 1 ثانیه
                    setTimeout(() => {
                        window.location.href = '../Cart/cart.php';
                    }, 1000);
                } else {
                    showNotification('خطا در افزودن محصول به سبد خرید!', true);
                }
            }
            
            // مدیریت دکمه‌های + و - تعداد
            if (e.target.classList.contains('qty-btn') && 
                !e.target.classList.contains('add-btn')) {
                
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
            if (e.target.classList.contains('weight-btn') && 
                !e.target.classList.contains('active')) {
                
                const weightOptions = e.target.closest('.weight-options');
                if (!weightOptions) return;
                
                weightOptions.querySelectorAll('.weight-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                e.target.classList.add('active');
            }
        });
        
        // اضافه کردن استایل CSS برای انیمیشن
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
            
            /* دکمه‌های دیباگ */
            .debug-buttons {
                position: fixed;
                bottom: 20px;
                left: 20px;
                z-index: 9998;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            
            .debug-btn {
                background: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-family: Vazirmatn, sans-serif;
                font-size: 14px;
                transition: all 0.3s;
            }
            
            .debug-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            }
            
            .debug-btn.test {
                background: #28a745;
            }
            
            .debug-btn.clear {
                background: #ef4444;
            }
        `;
        document.head.appendChild(style);
        
        // اضافه کردن دکمه‌های دیباگ (فقط برای توسعه)
        addDebugButtons();
    }
    
    // تابع اضافه کردن دکمه‌های دیباگ
    function addDebugButtons() {
        const debugDiv = document.createElement('div');
        debugDiv.className = 'debug-buttons';
        
        // دکمه مشاهده سبد خرید
        const viewBtn = document.createElement('button');
        viewBtn.className = 'debug-btn';
        viewBtn.textContent = '👁️ مشاهده سبد خرید';
        viewBtn.onclick = () => {
            const cart = JSON.parse(localStorage.getItem(CART_KEY)) || [];
            console.log('🛒 Current cart:', cart);
            
            if (cart.length === 0) {
                alert('سبد خرید خالی است!');
            } else {
                let message = '📦 سبد خرید:\n\n';
                cart.forEach((item, i) => {
                    message += `${i + 1}. ${item.name}\n`;
                    message += `   قیمت: ${item.price.toLocaleString('fa-IR')} تومان\n`;
                    message += `   تعداد: ${item.quantity}\n`;
                    message += `   وزن: ${item.weight}\n\n`;
                });
                alert(message);
            }
        };
        
        // دکمه اضافه کردن محصول تست
        const testBtn = document.createElement('button');
        testBtn.className = 'debug-btn test';
        testBtn.textContent = '➕ محصول تست';
        testBtn.onclick = () => {
            const testProduct = {
                name: 'آجیل 4 مغز شور (تست)',
                price: 651000,
                quantity: 2,
                weight: '۱ کیلوگرم',
                image: '../images/2.png',
                timestamp: new Date().toISOString()
            };
            
            if (addToCart(testProduct)) {
                showNotification('محصول تست اضافه شد!');
                setTimeout(() => {
                    window.location.href = '../Cart/cart.php';
                }, 1000);
            }
        };
        
        // دکمه پاک کردن سبد خرید
        const clearBtn = document.createElement('button');
        clearBtn.className = 'debug-btn clear';
        clearBtn.textContent = '🗑️ پاک کردن سبد';
        clearBtn.onclick = () => {
            if (confirm('آیا می‌خواهید سبد خرید را خالی کنید؟')) {
                localStorage.removeItem(CART_KEY);
                updateCartCount();
                showNotification('سبد خرید خالی شد!');
            }
        };
        
        debugDiv.appendChild(viewBtn);
        debugDiv.appendChild(testBtn);
        debugDiv.appendChild(clearBtn);
        document.body.appendChild(debugDiv);
    }
    
    // شروع وقتی DOM آماده است
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // در دسترس قرار دادن توابع برای دیباگ
    window.CartFixer = {
        getCart: () => JSON.parse(localStorage.getItem(CART_KEY)) || [],
        clearCart: () => {
            localStorage.removeItem(CART_KEY);
            updateCartCount();
        },
        addTestProduct: () => {
            const testProduct = {
                name: 'محصول تست',
                price: 100000,
                quantity: 1,
                weight: 'تست',
                image: '../images/default.jpg',
                timestamp: new Date().toISOString()
            };
            addToCart(testProduct);
        }
    };
    
})();