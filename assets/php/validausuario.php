<?php
    include_once('conn.php');
    $x0=$_POST['p0'];//usuario
    $x1=$_POST['p1'];//password

    $pq1 = $con->prepare("SELECT COUNT(*) as logok FROM USERS WHERE USER=? AND PASSWORD=?;");
    $pq1->bind_param("ss", $x0, $x1);

    if($pq1->execute()){  //significa que si se ejecuto, no tiene nada que ver con que existan los usuarios
        $resultado = $pq1->get_result();
        $row       = mysqli_fetch_assoc($resultado);

        if($row['logok'] == 1){

            $pq1 = $con->prepare("SELECT idencrypt as idc FROM USERS WHERE USER=? AND PASSWORD=?;");
            $pq1->bind_param("ss", $x0, $x1);

            if($pq1->execute()) {  //significa que si se ejecuto, no tiene nada que ver con que existan los usuarios
                $resultado = $pq1->get_result();
                $row = mysqli_fetch_assoc($resultado);
                echo "LOGIN OK";

                session_start();
                $_SESSION['p1'] = $row['idc'];
                header ("refresh:5;url=../../mainpage.php");

            }

        }else{
            mysqli_close($con);
            echo "USUARIO O PASSWORD INCORRECTO";
              //se eliminan las cookies
            header ("refresh:5;url=../../index.php");
            return;
        }
    }else{
        echo "ERROR EN LA CONEXIÓN A LA BASE DE DATOS.";
    }

    mysqli_close($con);



/*
    if($l1 == 1){
        header ("refresh:1;url=http://localhost/project1/mainpage.php?inpuser=$x1");
    }else{
        echo "USUARIO O PASSWORD INCORRECTO";
        return;
    }




//$query = mysqli_query($con,"SELECT COUNT(*) FROM USERS WHERE USER='$x1' AND PASSWORD='$x2';");

//$login = mysqli_fetch_assoc($query);

//--$l1 =  $login[logok];*/


