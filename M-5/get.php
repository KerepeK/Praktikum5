<html>
    <!-- kepala dan judul -->
    <head>
        <title></title>
    </head>
    <body>
        <!-- membuat form -->
        <!-- variabel get -->
        <form method="GET" action="getAct.php">
            <table width="400" align="center" cellpadding="2" 
            cellspacing="2"> 
			    <tr> 
                    <!-- membuat table nama -->
				    <td width="130">Nama </td>
				    <td><input type="text" name="nama"></td> 
			    </tr>
			    <tr> 
                    <!-- membuat table email -->
				    <td width="130">Email</td> 
				    <td><input type="text" name="email"></td> 
			    </tr>
			    <tr> 
                    <!-- membuat button submit dan reset -->
				    <td>
                    <input type="submit" name="btnLogin" 
                    value="Login"> 
                    <input type="reset" name="reset" 
                    value="Reset"> 
				    </td>
			    </tr>
		    </table>
	    </form>
    </body>
</html>