<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama']) && isset($_POST['tanggallahir']) && isset($_POST['username']) && isset($_POST['password'])) {
//inisialisasi variabel
$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
$tanggallahir = filter_input(INPUT_POST, 'tanggallahir', FILTER_SANITIZE_STRING);
$jeniskelamin = filter_input(INPUT_POST, 'jeniskelamin', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into user(nama, tanggallahir, jeniskelamin, username, password, status) values ('$nama', '$tanggallahir', '$jeniskelamin', '$username', '$password', 'member')");
if($query) {
	header('location: ../halamanlogin.html');
} else {
	echo mysqli_error($link);

}
}
}
?>