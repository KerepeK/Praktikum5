<html>
<head>
	<title></title>
</head>
<body>
    <!-- membuat form -->
	<form method="POST" action="hasilkirim.php"> 
		<table> 
			<tr> 
                <!-- pengaturan kolom -->
				<td width="130">Nama</td> 
				<td><input type="text" name="nama"></td> 
			</tr>
			<tr>
                <!-- pengaturan button -->
				<td colspan="2" align="center"> 
					<input type="submit" name="btnlogin" value="Kirim">
					<input type="reset" name="reset" value="reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>