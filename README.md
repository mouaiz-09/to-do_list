# To-Do List PHP Project

هذا المشروع هو تطبيق To-Do List باستخدام PHP و MySQL. يتيح للمستخدمين إضافة مهام، تعديلها، وحذفها.

## المتطلبات

- PHP 7.0 أو أعلى
- MySQL
- خادم ويب مثل Apache أو Nginx
- (اختياري) Composer لإدارة الحزم

## إعداد قاعدة البيانات

1. قم بإنشاء قاعدة بيانات جديدة في MySQL. يمكنك فعل ذلك باستخدام phpMyAdmin أو من خلال سطر الأوامر.

2. أنشئ قاعدة البيانات باستخدام الأمر التالي:

   ```sql
   CREATE DATABASE todo_list;
   
## اعداد لاتصال بقاعدة البيانات:
-في ملف ``config.php`` أو أي ملف يحتوي على إعدادات الاتصال بقاعدة البيانات، قم بتعديل معلومات الاتصال بقاعدة البيانات الخاصة بك كما يلي:

````
<?php
$host = 'localhost';  // أو عنوان الخادم إذا كان في مكان آخر
$dbname = 'todo_list'; // اسم قاعدة البيانات التي أنشأتها
$username = 'root';    // اسم المستخدم (افتراضي في MySQL هو 'root')
$password = '';        // كلمة المرور (إذا كانت فارغة في حال استخدام 'root' بدون كلمة مرور)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}

`````
-تأكد من أن ملف config.php يحتوي على معلومات الاتصال الصحيحة بقاعدة البيانات.

## تشغيل المشروع:
## تأكد من .
-من أن لديك`` PHP و MySQL ``مثبتين على جهازك

-قم برفع جميع ملفات المشروع إلى الخادم الخاص بك ``(مثلاً عبر Apache أو Nginx)``.   

-افتح متصفحك وادخل إلى عنوان المشروع (مثل`` http://localhost/your-project-folder).``

-يمكنك الآن إضافة المهام، تعديلها وحذفها باستخدام واجهة المستخدم.

## المساهمة:

-إذا كنت ترغب في المساهمة في المشروع، يمكنك عمل Fork للمشروع، إضافة المميزات أو إصلاح الأخطاء، ثم إرسال Pull Request.

## الملاحظات:

-تأكد من أن ملف ``config.php ``يحتوي على بيانات الاتصال الصحيحة.

-اذا كنت تستخدم بيئة تطوير محلية مثل XAMPP أو WAMP، تأكد من تشغيل Apache و MySQL.

## countect:

[![Instagram](https://img.shields.io/badge/Instagram-E4405F?style=flat&logo=instagram&logoColor=white)](https://www.instagram.com/abde.elmouazi/)
