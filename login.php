<?php 
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from register where username = '$username' and password = '$password'";
$hasil = mysqli_query($conn, $sql);

if (mysqli_num_rows($hasil) > 0) {
    header("Location: utama.php");
} else {
    echo "Login gagal, coba cek password";
}
?>