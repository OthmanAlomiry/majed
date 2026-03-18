<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majed Store | Coming Soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #6366f1; --accent: #a855f7; --bg: #030712; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Tajawal', sans-serif; }
        
        body { 
            background-color: var(--bg); 
            color: white; 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 20px; 
            overflow: hidden; 
            position: relative;
        }

        /* تأثير الخلفية السائلة المتحركة */
        .mesh-bg {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background: 
                radial-gradient(at 0% 0%, rgba(99,102,241,0.15) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(168,85,247,0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(99,102,241,0.15) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(168,85,247,0.15) 0px, transparent 50%);
            animation: bgMove 20s infinite alternate;
        }
        @keyframes bgMove { 0% { transform: scale(1); } 100% { transform: scale(1.1); } }

        .container { width: 100%; max-width: 480px; text-align: center; position: relative; }

        .logo { 
            font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem; 
            background: linear-gradient(to left, #fff, #94a3b8);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 0 10px rgba(255,255,255,0.2));
        }
        
        .maintenance-tag { 
            background: rgba(255, 255, 255, 0.05); color: #94a3b8; 
            padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; 
            border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 2rem; display: inline-block;
            backdrop-filter: blur(5px);
        }

        /* تصميم الكرت الزجاجي الفاخر */
        .glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(30px) saturate(150%);
            -webkit-backdrop-filter: blur(30px) saturate(150%);
            border-radius: 35px;
            padding: 40px 30px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
            overflow: hidden;
        }

        /* التوهج العلوي للكرت */
        .glass-card::after {
            content: "";
            position: absolute;
            top: -50%; left: -50%; width: 200%; height: 200%;
            background: radial-gradient(circle, rgba(99,102,241,0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        h2 { font-size: 1.5rem; margin-bottom: 1rem; color: #fff; font-weight: 500; }
        p { color: #94a3b8; font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.8; font-weight: 300; }

        input, textarea { 
            width: 100%; padding: 15px 20px; border-radius: 16px; 
            border: 1px solid rgba(255, 255, 255, 0.05); 
            background: rgba(255, 255, 255, 0.03); 
            color: #fff; outline: none; transition: 0.4s; margin-bottom: 15px; 
            font-size: 0.9rem; text-align: right;
        }
        input:focus, textarea:focus { 
            background: rgba(255, 255, 255, 0.07);
            border-color: var(--primary);
            box-shadow: 0 0 20px rgba(99,102,241,0.1);
        }

        .btn-submit { 
            width: 100%; padding: 16px; border-radius: 16px; border: none; 
            background: #fff; color: #000; font-size: 1rem; 
            font-weight: 800; cursor: pointer; transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .btn-submit:hover { transform: scale(1.02); background: var(--primary); color: #fff; }

        /* أزرار التواصل */
        .social-links { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 25px; }
        .social-btn { 
            display: flex; align-items: center; justify-content: center; gap: 8px; 
            padding: 14px; border-radius: 16px; text-decoration: none; 
            font-weight: 600; font-size: 0.85rem; transition: 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .whatsapp-btn { background: rgba(34, 197, 94, 0.05); color: #22c55e; }
        .snap-btn { background: rgba(255, 252, 0, 0.05); color: #FFFC00; }
        
        .social-btn:hover { background: rgba(255, 255, 255, 0.1); transform: translateY(-3px); }

        #status-msg { margin-top: 15px; font-size: 0.9rem; display: none; padding: 10px; border-radius: 12px; }
        #status-msg.success { display: block; color: #22c55e; background: rgba(34, 197, 94, 0.1); }

        .footer { margin-top: 3rem; font-size: 0.75rem; color: #4b5563; letter-spacing: 2px; }
    </style>
</head>
<body>

    <div class="mesh-bg"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        <br>
        <div class="maintenance-tag">نحن نطور شيئاً مذهلاً لخدمتكم</div>
        
        <div class="glass-card">
            <h2>تواصل معنا</h2>
            <p>الموقع في مرحلة الصيانة، لكننا لا نزال متاحين لخدمتك. اترك رسالتك وسنرد عليك فوراً.</p>
            
            <form id="contact-form" action="https://formspree.io/f/mjgapdnd" method="POST">
                <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
                <textarea name="message" rows="4" placeholder="كيف يمكننا مساعدتك؟" required></textarea>
                <button type="submit" class="btn-submit" id="submit-btn">إرسال الرسالة</button>
            </form>
            
            <div id="status-msg"></div>

            <div class="social-links">
                <a href="https://wa.me/966538882227" class="social-btn whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> واتساب
                </a>
                <a href="https://www.snapchat.com/add/majed6683" class="social-btn snap-btn">
                    <i class="fab fa-snapchat"></i> سناب
                </a>
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
            btn.innerText = "جاري الإرسال...";
            
            const data = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST', body: data, headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                status.innerHTML = "✅ شكرًا لك! تم استلام رسالتك.";
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
