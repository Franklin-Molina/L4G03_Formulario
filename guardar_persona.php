<?php

//datos conexion
$host = "localhost";
$user ="root";
$password= "";
$db="datos_php";


//Crear conexion

$con =new mysqli($host,$user,$password,$db);

//Prueba de conexion

if ($con->connect_error)
{
    echo "error de conexion con la bd";

}else{
    echo"!!Conexion exitosa con la bd¡¡ <br>";
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];

 if($nombre=="" || $email=="")
 {
   echo ("Por favor ingrese datos");
 }else{
/*
echo "La informacion enviada es: <br> Nombre :$nombre <br> Email : $email";

*/

$query ="insert into personas(nombre,email) values('$nombre','$email')";

if ($con->query($query)){
    echo "!!Persona guardada correctamente¡¡";
    }else{
        echo "Error al guardar la persona".$con->error;
    }
 }





$con->close();

header('Location: crear.php');


?>

