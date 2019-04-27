<?php

$user = $_POST['username'];
$pw = $_POST['password'];

if($user =="siswa education" && $pw =="kamisiapbelajar"){
header("Location: https://www.arkademy.com/");

} else {

echo" Login Gagal";
}
?>
