<?php
// 1. إظهار الأخطاء لتشخيص المشكلة (مهم جداً الآن)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$target_dir = "uploads/";
$message = "";

// إنشاء المجلد إذا لم يكن موجوداً
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0755, true);
}

// 2. التحقق من عملية الإرسال
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["myFile"])) {
    
    // التحقق من وجود خطأ في الرفع من طرف السيرفر
    if ($_FILES["myFile"]["error"] !== UPLOAD_ERR_OK) {
        $message = "خطأ في الرفع: كود الخطأ هو " . $_FILES["myFile"]["error"];
    } else {
        $file_name = basename($_FILES["myFile"]["name"]);
        $target_file = $target_dir . $file_name;

        // محاولة نقل الملف
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
            $message = "✅ تم الرفع بنجاح: " . htmlspecialchars($file_name);
        } else {
            $message = "❌ فشل نقل الملف. تأكد من صلاحيات مجلد uploads.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>رفع الملفات - up.php</title>
    <style>
        body { font-family: Tahoma, sans-serif; background: #f0f2f5; text-align: center; padding: 50px; }
        .box { background: white; padding: 30px; border-radius: 10px; display: inline-block; shadow: 0 4px 6px rgba(0,0,0,0.1); border: 1px solid #ddd; }
        .msg { padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; background: #fffbcc; }
    </style>
</head>
<body>

<div class="box">
    <h2>نظام رفع الملفات</h2>

    <?php if ($message != ""): ?>
        <div class="msg"><?php echo $message; ?></div>
    <?php endif; ?>

    <form action="up.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myFile" required>
        <br><br>
        <button type="submit" style="padding: 10px 20px; cursor: pointer;">رفع الملف الآن</button>
    </form>
    
    <p style="font-size: 12px; color: #666; margin-top: 20px;">
        المسار الحالي على السيرفر: <?php echo $_SERVER['PHP_SELF']; ?>
    </p>
</div>

</body>
</html>
