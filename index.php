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
            position: relative;
            overflow: hidden;
        }

        /* خلفية جمالية */
        .bg-glow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(99,102,241,0.1) 0%, rgba(15,23,42,1) 80%);
            z-index: -1;
        }

        .container {
            width: 100%;
            max-width: 450px;
            text-align: center;
            z-index: 1;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            background: linear-gradient(to left, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            padding: 30px;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        h2 {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            color: #f1f5f9;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: right;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #94a3b8;
            margin-right: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 14px;
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
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        button {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(99, 102, 241, 0.4);
        }

        .footer-link {
            margin-top: 2rem;
            display: block;
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-link:hover {
            color: var(--primary);
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        
        <div class="card">
            <h2>أرسل لنا رسالة</h2>
            
            <form action="https://formspree.io/f/xoqgypne" method="POST">
                <div class="input-group">
                    <label>بريدك الإلكتروني</label>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>
                
                <div class="input-group">
                    <label>رسالتك</label>
                    <textarea name="message" rows="5" placeholder="كيف يمكننا مساعدتك؟" required></textarea>
                </div>
                
                <button type="submit">إرسال الرسالة</button>
            </form>
        </div>

        <a href="http://www.majedstore.com" class="footer-link">www.majedstore.com</a>
    </div>

</body>
</html>
