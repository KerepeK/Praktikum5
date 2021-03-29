<html>
    <!-- kepala dan judul -->
    <head>
        <title>Konversi Tipe</title>
    </head>
    <body>
        <!-- perintah PHP -->
        <?php
        // isi a
        $a = 300.4;
        echo $a; // menampilkan a
        echo "<br>";
        // konversi tipe data
        echo "tipe double : ", doubleval($a), "<br>";
        echo "tipe Integer : ", intval($a),"<br>";
        echo "tipe string : ", strval($a);
        ?>
    </body>
</html>