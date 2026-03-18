<?php
// كود معالجة الإرسال
$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "oooom24@gmail.com";
    $subject = "رسالة جديدة من موقع Majed Store";
    $user_email = $_POST['email'];
    $user_message = $_POST['message'];
    
    $body = "لديك رسالة جديدة من زائر للموقع:\n\n";
    $body .= "البريد الإلكتروني للزائر: $user_email\n";
    $body .= "الرسالة:\n$user_message\n";
    
    $headers = "From: webmaster@majedstore.com" . "\r\n" .
               "Reply-To: $user_email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majed Store | تواصل معنا</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        :root { --primary: #6366f1; --accent: #a855f7; --bg: #0f172a; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Tajawal', sans-serif; }
        body { background-color: var(--bg); color: white; min-height: 100vh; display: flex; align-items: center; justify-content: center; overflow-x: hidden; width: 100%; padding: 20px 0; }
        .bg-animate { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, rgba(99,102,241,0.15) 0%, rgba(15,23,42,1) 80%); z-index: -1; }
        .container { text-align: center; padding: 20px; width: 100%; max-width: 450px; margin: 0 auto; }
        .logo { font-size: 2rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(to left, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        
        /* تصميم الفورم */
        .contact-form { background: rgba(255, 255, 255, 0.03); padding: 25px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); margin-top: 20px; }
        .input-group { margin-bottom: 15px; text-align: right; }
        input, textarea { width: 100%; padding: 12px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: white; outline: none; transition: 0.3s; }
        input:focus, textarea:focus { border-color: var(--primary); box-shadow: 0 0 10px rgba(99,102,241,0.2); }
        button { width: 100%; padding: 12px; border-radius: 10px; border: none; background: linear-gradient(45deg, var(--primary), var(--accent)); color: white; font-weight: bold; cursor: pointer; transition: 0.3s; }
        button:hover { opacity: 0.9; transform: translateY(-2px); }
        
        .success-msg { color: #22c55e; margin-bottom: 15px; font-weight: bold; }
        .countdown { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 2rem; }
        .count-item { background: rgba(255, 255, 255, 0.05); padding: 10px; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.1); }
        .count-num { display: block; font-size: 1.2rem; font-weight: 800; color: var(--primary); }
    </style>
</head>
<body>
    <div class="bg-animate"></div>
    <div class="container">
        <div class="logo">MAJED STORE</div>
        
        <div class="countdown">
            <div class="count-item"><span class="count-num">03</span><small>أيام</small></div>
            <div class="count-item"><span class="count-num">18</span><small>ساعة</small></div>
            <div class="count-item"><span class="count-num">45</span><small>دقيقة</small></div>
        </div>

        <div class="contact-form">
            <?php if($message_sent): ?>
                <div class="success-msg">✅ تم إرسال رسالتك بنجاح!</div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="input-group">
                    <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
                </div>
                <div class="input-group">
                    <textarea name="message" rows="4" placeholder="اكتب رسالتك هنا..." required></textarea>
                </div>
                <button type="submit">إرسال الآن</button>
            </form>
        </div>
        
        <p style="margin-top: 20px; font-size: 0.8rem; color: #64748b;">www.majedstore.com</p>
    </div>
</body>
</html>
