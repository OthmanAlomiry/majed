<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majed Store | قريباً</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary: #6366f1; --accent: #a855f7; --bg: #0f172a; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Tajawal', sans-serif; }
        
        body { background-color: var(--bg); color: white; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; overflow-x: hidden; }
        .bg-glow { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 80%); z-index: -1; }

        .container { width: 100%; max-width: 480px; text-align: center; animation: fadeIn 0.8s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

        .logo { font-size: 2.2rem; font-weight: 800; margin-bottom: 0.5rem; background: linear-gradient(to left, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: inline-block; }
        
        .maintenance-tag { background: rgba(239, 68, 68, 0.1); color: #ef4444; padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; font-weight: bold; border: 1px solid rgba(239, 68, 68, 0.2); margin-bottom: 1.5rem; display: inline-block; }

        .card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px); padding: 30px; border-radius: 28px; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); }
        
        h2 { font-size: 1.3rem; margin-bottom: 1rem; color: #f1f5f9; }
        p { color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem; line-height: 1.6; }

        input, textarea { width: 100%; padding: 12px 15px; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.6); color: white; outline: none; transition: 0.3s; margin-bottom: 15px; text-align: right; }
        input:focus, textarea:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15); }

        .btn-submit { width: 100%; padding: 14px; border-radius: 12px; border: none; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: 0.3s; }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4); }

        /* تنسيق أزرار التواصل الاجتماعي */
        .social-links { display: flex; flex-direction: column; gap: 12px; margin-top: 20px; }
        
        .social-btn { display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px; border-radius: 12px; text-decoration: none; font-weight: 600; font-size: 0.95rem; transition: 0.3s; }
        
        .whatsapp-btn { background-color: rgba(34, 197, 94, 0.1); color: #22c55e; border: 1px solid rgba(34, 197, 94, 0.2); }
        .whatsapp-btn:hover { background-color: #22c55e; color: white; }

        .snap-btn { background-color: rgba(255, 252, 0, 0.1); color: #FFFC00; border: 1px solid rgba(255, 252, 0, 0.2); }
        .snap-btn:hover { background-color: #FFFC00; color: black; }

        #status-msg { margin-top: 15px; font-size: 0.9rem; display: none; padding: 10px; border-radius: 8px; }
        #status-msg.success { display: block; background: rgba(34, 197, 94, 0.1); color: #22c55e; }
        #status-msg.error { display: block; background: rgba(239, 68, 68, 0.1); color: #ef4444; }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        <div><span class="maintenance-tag"><i class="fas fa-tools"></i> الموقع تحت الصيانة</span></div>
        
        <div class="card">
            <h2>نعمل على شيء رائع!</h2>
            <p>متجرنا حالياً في مرحلة التحديث لتوفير تجربة أفضل. يمكنك التواصل معنا مباشرة عبر النموذج أدناه:</p>
            
            <form id="contact-form" action="https://formspree.io/f/mjgapdnd" method="POST">
                <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
                <textarea name="message" rows="4" placeholder="كيف يمكننا مساعدتك؟" required></textarea>
                <button type="submit" class="btn-submit" id="submit-btn">إرسال الرسالة</button>
            </form>
            
            <div id="status-msg"></div>

            <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.05); margin: 20px 0;">
            
            <div class="social-links">
                <a href="https://wa.me/966538882227" class="social-btn whatsapp-btn">
                    <i class="fab fa-whatsapp" style="font-size: 1.3rem;"></i>
                    تواصل معنا عبر واتساب
                </a>

                <a href="https://www.snapchat.com/add/majed6683" class="social-btn snap-btn">
                    <i class="fab fa-snapchat" style="font-size: 1.3rem;"></i>
                    تابعنا على سناب شات
                </a>
            </div>
        </div>

        <div style="margin-top: 2rem; color: #475569; font-size: 0.8rem;">WWW.MAJEDSTORE.COM</div>
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
                method: 'POST',
                body: data,
                headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                status.innerHTML = "✅ شكرًا لك! تم استلام رسالتك بنجاح.";
                status.className = "success";
                form.reset();
                btn.innerText = "تم الإرسال";
            } else {
                status.innerHTML = "❌ عذراً، حدث خطأ أثناء الإرسال.";
                status.className = "error";
                btn.disabled = false;
                btn.innerText = "حاول مرة أخرى";
            }
        };
    </script>
</body>
</html>
