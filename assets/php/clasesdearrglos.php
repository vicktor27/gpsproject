<?php
$arreglo = array("victor", "solis", "cardoza");
echo "<p>FORTRADICIONAL</p><br>";
for($i = 0 ; $i < 7; $i++){
    echo $arreglo[$i]."<br>";
}

echo "<p>FOREACH</p><br>";

foreach($arreglo as $x1)
{
    //$arreglo[$i]
    echo $x1."<br>";
}
echo "<br>";
echo $arreglo[2]."<br>";
echo $arreglo[0]."<br>";
echo $arreglo[5]."<br>";

//arreglos asociativos, son aquellos que en lugar de tener un indice numerico, tienen un nombre y se recorreon POR FUERZA con un foreach

echo "<p>ARREGLOS ASOCIATIVO</p><br>";
//=> asocia A
$personas = array("NOMBRE"=>"Victor","APPATERNO"=>"Solis","APMATERNO"=>"Cardoza");

foreach($personas as $x1)
{
    echo $x1."<br>";
}

echo $personas['NOMBRE']."<br>";
echo $personas['APPATERNO']."<br>";
echo $personas['APMATERNO']."<br>";

echo "<p>MARRANON DEL FETCH ASSOC</p><br>";
    include_once('conn.php');

    $query = "select idusers as c1, user as c2, password as c3, idusertype as c4  from users;";
    $arreglodetablauser = mysqli_query($con, $query);  //al hacer esto se guardara como un arreglo asociativo bidimensional

        while($renglon = mysqli_fetch_assoc($arreglodetablauser)){  //PASANDO DE BIDIMENSIONAL A UNIDIMENSIONAL
            echo $renglon['c1']." ".$renglon['c2']." ".$renglon['c3']." ".$renglon['c4']."<br>";
        }


        //

        //html     //php           //jquery
        //7mo PHP //8vo Jquery+PHP //9no (react or angular)