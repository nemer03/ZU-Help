<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university_system";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعادة كلمة المرور
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // التحقق مما إذا كان البريد الإلكتروني موجودًا
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    
        echo "يتم العمل على هذه الميزة قريبا";

    
        }
     else {
        echo "البريد الإلكتروني غير موجود.";
    }


$conn->close();
?>