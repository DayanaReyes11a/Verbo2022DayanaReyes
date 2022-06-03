<html>
<body>
<img src= https://www.recursospython.com/wp-content/uploads/2014/02/triangle.png>
<?php

    $base = $_GET["base"];

    $high = $_GET["high"];

    $Hipo = sqrt(pow($base,2) + pow($high,2));
    
    echo "Valor de Hipotenusa: ".$Hipo;
    ?>
    </body>
    </html>  