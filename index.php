<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Majed Store | قريباً</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #6366f1; --accent: #a855f7; --bg: #0f172a; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Tajawal', sans-serif; }
        
        body { 
            background-color: var(--bg); 
            color: white; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 10px; 
            overflow: hidden; 
        }

        .bg-glow { 
            position: fixed; 
            top: 0; left: 0; width: 100%; height: 100%; 
            background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 80%); 
            z-index: -1; 
        }

        .container { 
            width: 100%; 
            max-width: 400px; /* تصغير العرض ليناسب الجوال أكثر */
            text-align: center; 
            animation: fadeIn 0.8s ease-out; 
        }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

        .logo { 
            font-size: 1.8rem; /* تصغير الشعار */
            font-weight: 800; 
            margin-bottom: 5px; 
            background: linear-gradient(to left, var(--primary), var(--accent)); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
            display: inline-block; 
        }
        
        .maintenance-tag { 
            background: rgba(239, 68, 68, 0.1); 
            color: #ef4444; 
            padding: 4px 12px; 
            border-radius: 50px; 
            font-size: 0.7rem; 
            font-weight: bold; 
            border: 1px solid rgba(239, 68, 68, 0.2); 
            margin-bottom: 12px; 
            display: inline-block; 
        }

        /* الكرت المتوهج */
        .glow-wrapper {
            position: relative;
            padding: 2px;
            border-radius: 22px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.05);
        }

        .glow-wrapper::before {
            content: '';
            position: absolute;
            top: -50%; left: -50%; width: 200%; height: 200%;
            background: conic-gradient(transparent, var(--primary), var(--accent), transparent 30%);
            animation: rotateGlow 4s linear infinite;
        }

        @keyframes rotateGlow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

        .card { 
            position: relative;
            background: #0f172a; 
            backdrop-filter: blur(15px); 
            padding: 20px; /* تقليل الحشو الداخلي */
            border-radius: 20px;
            z-index: 1;
        }
        
        h2 { font-size: 1.1rem; margin-bottom: 8px; color: #f1f5f9; }
        p { color: #94a3b8; font-size: 0.8rem; margin-bottom: 15px; line-height: 1.4; }

        input, textarea { 
            width: 100%; padding: 10px; border-radius: 10px; 
            border: 1px solid rgba(255, 255, 255, 0.1); 
            background: rgba(15, 23, 42, 0.6); 
            color: white; outline: none; margin-bottom: 10px; 
            text-align: right; font-size: 0.85rem;
        }

        .btn-submit { 
            width: 100%; padding: 12px; border-radius: 10px; 
            border: none; background: linear-gradient(135deg, var(--primary), var(--accent)); 
            color: white; font-size: 0.9rem; font-weight: 600; cursor: pointer; 
        }

        /* أزرار التواصل */
        .social-links { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 10px; 
            margin-top: 15px; 
        }
        
        .social-btn { 
            display: flex; align-items: center; justify-content: center; 
            gap: 6px; padding: 10px; border-radius: 10px; 
            text-decoration: none; font-weight: 600; font-size: 0.75rem; 
            transition: 0.3s; 
        }
        
        .whatsapp-btn { background: rgba(34, 197, 94, 0.1); color: #22c55e; border: 1px solid rgba(34, 197, 94, 0.2); }
        .snap-btn { background: rgba(255, 252, 0, 0.1); color: #FFFC00; border: 1px solid rgba(255, 252, 0, 0.2); }

        #status-msg { margin-top: 10px; font-size: 0.75rem; display: none; padding: 8px; border-radius: 8px; }
        #status-msg.success { display: block; background: rgba(34, 197, 94, 0.1); color: #22c55e; }

        .footer { margin-top: 15px; color: #475569; font-size: 0.7rem; }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        <br>
        <div class="maintenance-tag"><i class="fas fa-tools"></i> الموقع تحت الصيانة</div>
        
        <div class="glow-wrapper">
            <div class="card">
                <h2>نعمل على تحديث المتجر</h2>
                <p>اترك لنا رسالة وسنقوم بالرد عليك فوراً</p>
                
                <form id="contact-form" action="https://formspree.io/f/mjgapdnd" method="POST">
                    <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
                    <textarea name="message" rows="3" placeholder="كيف يمكننا مساعدتك؟" required></textarea>
                    <button type="submit" class="btn-submit" id="submit-btn">إرسال الرسالة</button>
                </form>
                
                <div id="status-msg"></div>

                <div class="social-links">
                    <a href="https://wa.me/966538882227" class="social-btn whatsapp-btn">
                        <i class="fab fa-whatsapp"></i> واتساب
                    </a>
                    <a href="https://www.snapchat.com/add/majed6683" class="social-btn snap-btn">
                        <i class="fab fa-snapchat"></i> سناب شات
                    </a>
                </div>
            </div>
        </div>

        <div class="footer">WWW.MAJEDSTORE.COM</div>
    </div>

    <script>
        const form = document.getElementById("contact-form");
        const status = document.getElementById("status-msg");
        const btn = document.getElementById("submit-btn");

        form.onsubmit = async (e) => {
            e.preventDefault();
            btn.disabled = true;
            btn.innerText = "جاري...";
            
            const data = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST', body: data, headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                status.innerHTML = "✅ تم استلام رسالتك بنجاح.";
                status.className = "success";
                form.reset();
                btn.innerText = "تم الإرسال";
            } else {
                status.innerHTML = "❌ خطأ في الإرسال.";
                status.className = "error";
                btn.disabled = false;
                btn.innerText = "حاول مجدداً";
            }
        };
    </script>
</body>
</html>
