<?php

$conexion = null;

function conectar(){
	global $conexion;

	$servidor = "localhost";
	$usuario = "admin";
	$contrasena = "josue123";
	$baseDeDatos = "elbonzai";

	$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDeDatos);

	mysqli_set_charset($conexion, 'utf8');
}





function desconectar(){
	global $conexion;

	mysqli_close($conexion);
}





function validarLogin($usuario,$clave){
	global $conexion;

	conectar();
	
    $consulta = "SELECT * FROM Empleado WHERE CorreoElectronico ='".$usuario."' AND Contrasena='".$clave."'";
    $respuesta = mysqli_query($conexion,$consulta);

    
    if($fila = mysqli_fetch_row($respuesta)){
        session_start();
        $_SESSION['usuario'] = $usuario;
        return true;
    }
    return false;
	desconectar();
}





function getUsuarios(){
    global $conexion;
    $respuesta = mysqli_query($conexion,"SELECT * FROM persona");
    return $respuesta->fetch_all();
}





function getUsuario(){
    global $conexion;

    $respuesta = mysqli_query($conexion,"SELECT * FROM persona INNER JOIN usuario ON persona.email = usuario.email WHERE usuario.email='".$_SESSION['usuario']."'");
    
    
    return mysqli_fetch_array($respuesta);
}


function sesionIniciada(){
    session_start();
    return isset($_SESSION['usuario']);
}

