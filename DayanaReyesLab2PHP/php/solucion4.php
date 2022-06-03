<html>
    <body align="center">
        <?php
        $numero = $_GET['num'];
        
$numero;
if($numero > 0){
    echo "El número ingresado es <b>positivo.</b>";
}

else if ($numero < 0){
    echo "El número ingresado es <b>negativo.</b>";
}
else{
    echo "El número ingresado es <b>neutro.</b>";
}
        ?>
    </body>    
</html>