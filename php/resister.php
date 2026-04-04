<?php
require 'connect.php';

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$name = $_POST['name'];

$stmt = $db->prepare("INSERT INTO users (email, password, name, provider) VALUES (?, ?, ?, 'local')");
$stmt->execute([$email, $password, $name]);

echo "สมัครสมาชิกสำเร็จ";
?>
