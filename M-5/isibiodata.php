<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="inputbiodata.php"> 
		<h2> Masukan Biodata Anda: </h2>
		<table width="600"  cellpadding="2" cellspacing="2">  
			<tr> 
				<td width="130">Nama </td> 
				<td><input type="text" name="nama"></td> 
			</tr>
			<tr> 
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">Tempat dan Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td> 
			</tr>
			<tr>
				<td width="130">Pendidikan</td> 
				<td><input type="text" name="pendidikan"></td> 
			</tr>
			<tr>
				<td width="130">Alamat</td> 
				<td><input type="text" name="alamat"></td> 
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Kirim">
					<input type="reset" name="reset" value="Reset"> 
				</td>
			</tr>
		</table>
	</form>
</body>
</html>