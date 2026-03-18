<?php
// 1. إعدادات المجلد والحماية
$target_dir = "uploads/"; // مجلد حفظ الملفات
$upload_ok = 1;
$message = "";

// إنشاء المجلد إذا لم يكن موجوداً
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// 2. معالجة الرفع عند الضغط على الزر
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["myFile"])) {
    $file_name = basename($_FILES["myFile"]["name"]);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // التحقق من حجم الملف (أقصى حد 5 ميجابايت)
    if ($_FILES["myFile"]["size"] > 5000000) {
        $message = "عذراً، الملف كبير جداً.";
        $upload_ok = 0;
    }

    // منع أنواع معينة من الملفات الخطيرة (مثل PHP)
    if ($file_type == "php" || $file_type == "exe" || $file_type == "js") {
        $message = "عذراً، لا يُسمح برفع هذا النوع من الملفات لأسباب أمنية.";
        $upload_ok = 0;
    }

    // التحقق من عدم وجود أخطاء والبدء في النقل
    if ($upload_ok == 1) {
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
            $message = "تم رفع الملف بنجاح: " . htmlspecialchars($file_name);
        } else {
            $message = "عذراً، حدث خطأ تقني أثناء الرفع.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صفحة رفع الملفات</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; margin-top: 50px; background: #f4f4f9; }
        .upload-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 400px; }
        input[type="file"] { margin: 15px 0; display: block; }
        .btn { background: #28a745; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
        .btn:hover { background: #218838; }
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 4px; background: #e2e3e5; color: #383d41; }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>رفع ملف جديد</h2>
    
    <?php if ($message != ""): ?>
        <div class="alert"><?php echo $message; ?></div>
    <?php endif; ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>اختر الملف من جهازك:</label>
        <input type="file" name="myFile" required>
        <button type="submit" class="btn">ابدأ الرفع الآن</button>
    </form>
</div>

</body>
</html>
