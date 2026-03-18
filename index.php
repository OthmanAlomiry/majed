<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* خلفية متحركة */
        body::before {
            content: "";
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 70%);
            animation: moveBg 10s infinite linear;
            z-index: -1;
        }

        @keyframes moveBg {
            0% { transform: translate(-25%, -25%); }
            50% { transform: translate(0%, 0%); }
            100% { transform: translate(-25%, -25%); }
        }

        .container {
            text-align: center;
            padding: 2rem;
            max-width: 600px;
            z-index: 1;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(to left, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 1px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #f1f5f9;
        }

        p {
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 2.5rem;
        }

        /* العداد التنازلي */
        .countdown {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .count-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: 15px;
            min-width: 80px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .count-item:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .count-num {
            display: block;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
        }

        .count-label {
            font-size: 0.8rem;
            color: #64748b;
        }

        .url {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            border: 1px dashed var(--primary);
        }

        /* تأثير النبض للصيانة */
        .pulse {
            width: 12px;
            height: 12px;
            background: #22c55e;
            border-radius: 50%;
            display: inline-block;
            margin-left: 8px;
            box-shadow: 0 0 0 rgba(34, 197, 94, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo">MAJED STORE</div>
        <h1><span class="pulse"></span> الموقع تحت الصيانة حالياً</h1>
        <p>نحن نعمل بجهد لنقدم لكم تجربة تسوق فريدة. ترقبوا الإطلاق الكبير قريباً جداً!</p>

        <div class="countdown">
            <div class="count-item">
                <span class="count-num" id="days">05</span>
                <span class="count-label">يوم</span>
            </div>
            <div class="count-item">
                <span class="count-num" id="hours">12</span>
                <span class="count-label">ساعة</span>
            </div>
            <div class="count-item">
                <span class="count-num" id="minutes">45</span>
                <span class="count-label">دقيقة</span>
            </div>
        </div>

        <a href="http://www.majedstore.com" class="url">www.majedstore.com</a>
    </div>

    <script>
        // كود بسيط لتحديث العداد بشكل عشوائي جمالي أو يمكنك ضبط تاريخ محدد
        function updateCounter() {
            const mins = document.getElementById('minutes');
            let currentMins = parseInt(mins.innerText);
            if(currentMins > 0) mins.innerText = (currentMins - 1).toString().padStart(2, '0');
        }
        setInterval(updateCounter, 60000);
    </script>
</body>
</html>

