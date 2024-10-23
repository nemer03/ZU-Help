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

// التحقق من بيانات تسجيل الدخول
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $university_id = $_POST["university_id"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE university_id='$university_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "تم تسجيل الدخول بنجاح";
        } else {
            echo "كلمة المرور غير صحيحة";
        }
    } else {
        echo "الرقم الجامعي غير صحيح";
    }
}

$conn->close();
?>
