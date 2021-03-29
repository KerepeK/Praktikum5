<html>
    <!-- kepala dan judul -->
    <head>
        <title>Pemrograman PHP engan Array</title>
    </head>
    <body>
        <!-- perintah PHP -->
        <?php
        // membuat array
        $nama[] = "Muhammad";
        $nama[] = "Rizky";
        $nama[] = "Abiwafa";
        $nama[] = "Rulyawan";
        // menampilkan array
        echo $nama[1].$nama[2].$nama[0].$nama[3];
        echo "<br>";
        // menghitung jumlah array
        $jum_array = count($nama);
        echo "jumlah elemen array = ".$jum_array
        ?>
    </body>
</html>