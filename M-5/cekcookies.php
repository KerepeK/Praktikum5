<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        if (isset($variable_cookies)){
            echo 'Variable cookiesnya "$variable_cookies" nilainya adalah'
            .$variable_cookies;
        }
        else {
            echo "Variable cookies belum diterapkan";
        }
        ?>
    </body>
</html>