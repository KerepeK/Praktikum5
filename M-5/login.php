<html>
<head>
	<title></title>
</head>
<body>
    <!-- membuat form -->
    <!-- memanggil postlogin.php -->
	<form method="POST" action="postlogin.php"> 
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
                <!-- pengaturan kolom -->
				<td width="130">Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
                    <!-- pengaturan button -->
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>