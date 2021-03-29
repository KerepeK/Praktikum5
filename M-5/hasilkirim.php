<?php
if (empty($_POST['nama'])) { 
    // jika kolom tak diisi akan diantar ke halaman kososng
	header("location:kosong.php");
} else {
    // jika diisi akan muncul di halaman dengan tulisan yang ditulis dikolom sebelumnya
	echo "<center>Nama :".$_POST['nama']."</center><br>"; 
}
?>