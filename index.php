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

        /* --- تأثير التوهج المتحرك الاحترافي --- */
        .glow-wrapper {
            position: relative;
            padding: 2px; /* عرض الحد المتوهج */
            border-radius: 28px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.05);
        }

        /* الطبقة المتحركة خلف الكرت */
        .glow-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(
                transparent, 
                var(--primary), 
                var(--accent), 
                transparent 30%
            );
            animation: rotateGlow 4s linear infinite;
        }

        @keyframes rotateGlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .card { 
            position: relative;
            background: #0f172a; /* نفس لون الخلفية لضمان شفافية الحواف */
            backdrop-filter: blur(15px); 
            padding: 30px; 
            border-radius: 26px; /* أقل بقليل من الحاوية */
            z-index: 1;
        }
        /* --- نهاية التأثير --- */
        
        h2 { font-size: 1.3rem; margin-bottom: 1rem; color: #f1f5f9; }
        p { color: #94a3b8; font-size: 0.9rem; margin-bottom: 1.5rem; line-height: 1.6; }

        input, textarea { width: 100%; padding: 12px 15px; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.6); color: white; outline: none; transition: 0.3s; margin-bottom: 15px; text-align: right; }
        input:focus, textarea:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15); }

        .btn-submit { width: 100%; padding: 14px; border-radius: 12px; border: none; background: linear-gradient(135deg, var(--primary), var(--accent)); color: white; font-size: 1rem; font-weight: 600; cursor: pointer; transition: 0.3s; }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4); }

        .whatsapp-link { display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 20px; color: #22c55e; text-decoration: none; font-weight: 600; font-size: 0.95rem; transition: 0.3s; }
        .whatsapp-link:hover { opacity: 0.8; }

        #status-msg { margin-top: 15px; font-size: 0.9rem; display: none; padding: 10px; border-radius: 8px; }
        #status-msg.success { display: block; background: rgba(34, 197, 94, 0.1); color: #22c55e; }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        <div><span class="maintenance-tag"><i class="fas fa-tools"></i> الموقع تحت الصيانة</span></div>
        
        <div class="glow-wrapper">
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
                
                <a href="https://wa.me/966538882227" class="whatsapp-link"> <i class="fab fa-whatsapp" style="font-size: 1.4rem;"></i>
                    تواصل معنا عبر واتساب
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
