<?php

include('includes/db.php');

$nombre = $_POST["nombre"];
$email = $_POST["email"];

  if($nombre=="" || $email==""){

  }else{

    $sql ="insert into personas(nombre,email) values('$nombre','$email')";
    
    if (DB::query($sql)){
        echo "!!Persona guardada correctamente¡¡";
        }else{
            echo "Error al guardar la persona".$con->error;
        }
      

  }

  header('Location: crear.php');

?>

