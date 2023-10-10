<?php
    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  
    $edad= $_POST["txtedad"]; // usamos un arreglo para almacenar  
    $correo= $_POST["txtcorreo"];
    $password= $_POST["txtpassword"];

    echo "<h1>Datos ingresados:</h1>";
    echo "<p>Mi Nombre es:  " . $nombre."</p> ";
    echo "<p>Mi Edad es:    " . $edad."</p> ";
    echo "<p>Mi Correo es:    " . $correo."</p>";
    echo "<p>Mi Contraseña es:    " . $password."</p>"."<br>"."<br>";
    echo "<a href='index.php'>Volver a contestar formulario</a>";   
include "footeer.php";
?>