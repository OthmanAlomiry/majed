<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majed Store | تواصل معنا</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --accent: #a855f7;
            --bg: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
        }

        .bg-glow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 80%);
            z-index: -1;
        }

        .container {
            width: 100%;
            max-width: 450px;
            text-align: center;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            background: linear-gradient(to left, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            letter-spacing: 1px;
        }

        .card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            padding: 40px 30px;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        h2 {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            color: #f1f5f9;
            font-weight: 500;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: right;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.85rem;
            color: #94a3b8;
            margin-right: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(15, 23, 42, 0.6);
            color: white;
            outline: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        input:focus, textarea:focus {
            border-color: var(--primary);
            background: rgba(15, 23, 42, 0.8);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.15);
        }

        button {
            width: 100%;
            padding: 16px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 10px;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.5);
            filter: brightness(1.1);
        }

        button:active {
            transform: translateY(-1px);
        }

        .footer-text {
            margin-top: 2.5rem;
            color: #475569;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        /* تحسين العرض في الجوالات الصغيرة */
        @media (max-width: 400px) {
            .card { padding: 30px 20px; }
            .logo { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        
        <div class="card">
            <h2>يسعدنا تواصلك معنا</h2>
            
            <form action="https://formspree.io/f/mjgapdnd" method="POST">
                <div class="input-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>
                
                <div class="input-group">
                    <label>نص الرسالة</label>
                    <textarea name="message" rows="5" placeholder="اكتب استفسارك هنا..." required></textarea>
                </div>
                
                <input type="text" name="_gotcha" style="display:none">
                
                <button type="submit">إرسال الرسالة</button>
            </form>
        </div>

        <div class="footer-text">WWW.MAJEDSTORE.COM</div>
    </div>

</body>
</html>
