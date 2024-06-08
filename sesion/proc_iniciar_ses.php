<?php
    include("../conexion.php");

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "SELECT U.user 
            FROM usuario U
            WHERE `user`='$user'
            AND `pass`='$pass'";

    $res = mysqli_query($con,$sql);
    $vec = mysqli_fetch_array($res);

    if($user == $vec[0]){

        if($res == true){
            echo "<script> alert ('se inicio excelente!');
            window.location.href = '../menu.html';
            </script>";
        }
        else{
            echo "<script> alert ('Algo salio mal :(');
            window.location.href = '../index.html';
            </script>";
        }

    }
    else{
        echo "<script> alert ('Datos incorectos');
            window.location.href = '../index.html';
            </script>";
    }


    


?>