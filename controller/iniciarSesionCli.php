<?php

    // enlazamos las dependencias necesarias, conexion a la base de datos
    // y las consultas que realizaran el insert en la tabla
    require_once('../model/conexion.php');
    require_once('../model/validarSesion.php');

    $emailC=$_POST['emailC'];
    $claveC=md5($_POST['claveC']);

    $objetoConsultas = new validarSesion();
    //iniciarSesionCli es la funcion de la clase validarSesion
    $result = $objetoConsultas->iniciarSesionCli($emailC, $claveC);


?>