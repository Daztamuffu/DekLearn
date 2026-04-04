<?php
require 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    echo "เข้าสู่ระบบสำเร็จ";
} else {
    echo "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
}
?>
