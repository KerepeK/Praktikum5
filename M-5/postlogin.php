<?php //perintah php
//jika nilai dari method post input type nama kosong atau 
//nilai dari method post email kosong maka redirect kehalaman redirect.php 
if (empty($_POST['nama']) || (empty($_POST['email']))) { 
		header("location:cekdata.php");
} else { //jika terisi
//tampilkan teks nama dan mengambil nilai dari method post input type nama
echo " Nama :".$_POST['nama']."<br>"; 
//tampilkan teks email dan mengambil nilai dari method post input type email
echo " Email :".$_POST['email']."<br>"; 
//membuat default timezone asia/jakarta
date_default_timezone_set('Asia/Jakarta');
//menampilkan tanggal, hari, dan waktu 
echo date('H:i:s a, l-d-m-Y'); 
}
?>