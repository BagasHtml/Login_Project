<?php 
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "insert into register (username, password) values ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "yey, kamu berhasil!, yuk login lagi! <a href='halaman.php'>di sini<a>";
    exit;
} else {
    echo "kayaknya username atau password udah ada. coba yang lain!";
}
?>