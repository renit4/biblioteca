<?php
    include("../conexion.php");

    $user = $_POST["user"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    if($pass1 == $pass2){

    $sql = "INSERT INTO `usuario` (`user`,`pass`)
            VALUES ('$user','$pass1')";

    $res = mysqli_query($con,$sql);
        if($res == true){
            echo "<script> alert ('se registro excelente!');
            window.location.href = '../index.html';
            </script>";
        }
        else{
            echo "<script> alert ('Algo salio mal :(');
            window.location.href = '../index.html';
            </script>";
        }

    }
    else{
        echo "<script> alert ('Contraseñas incorectas');
            window.location.href = 'reg_usuario.html';
            </script>";
    }


    


?>