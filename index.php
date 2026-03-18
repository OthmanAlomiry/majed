<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Majed Store | تحت الصيانة</title>
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
            overflow-x: hidden; /* لمنع التمرير الجانبي */
            position: relative;
            width: 100%;
        }

        /* خلفية متحركة محسنة */
        .bg-animate {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 80%);
            z-index: -1;
        }

        .container {
            text-align: center;
            padding: 20px;
            width: 100%;
            max-width: 500px; /* تحديد عرض مناسب للجوال */
            margin: 0 auto; /* التوسيط الإجباري */
        }

        .logo {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(to left, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        p {
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 2.5rem;
            font-size: 0.95rem;
            padding: 0 10px;
        }

        /* العداد التنازلي - تحسين العرض للجوال */
        .countdown {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 2.5rem;
        }

        .count-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 15px 5px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }

        .count-num {
            display: block;
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary);
        }

        .count-label {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 5px;
        }

        .url-box {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            border: 1px dashed var(--primary);
            font-size: 0.9rem;
            direction: ltr; /* لضمان ظهور الرابط بشكل صحيح */
        }

        .pulse {
            width: 10px;
            height: 10px;
            background: #22c55e;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(34, 197, 94, 0.4);
            animation: pulse-animation 2s infinite;
        }

        @keyframes pulse-animation {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
    </style>
</head>
<body>

    <div class="bg-animate"></div>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        
        <h1><span class="pulse"></span> تحت الصيانة</h1>
        
        <p>نعمل حالياً على تحديث المتجر لنمنحكم أفضل تجربة تسوق. نعتذر عن هذا الانقطاع المؤقت.</p>

        <div class="countdown">
            <div class="count-item">
                <span class="count-num">03</span>
                <span class="count-label">أيام</span>
            </div>
            <div class="count-item">
                <span class="count-num">18</span>
                <span class="count-label">ساعة</span>
            </div>
            <div class="count-item">
                <span class="count-num">45</span>
                <span class="count-label">دقيقة</span>
            </div>
        </div>

        <div class="url-box">www.majedstore.com</div>
    </div>

</body>
</html>
