<?php

    $conexion= new mysqli('localhost','root','','datos_php');
  //  $con =new mysqli($host,$user,$password,$db);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/styles_index.css"> 
    <link rel="icon"href="ico/Favicon.ico">
</head>
<body>
    <div class="Tabls">


  
<h1> Datos de la Base de datos </h1>

<table >
    <tr>
        <thead>
         <th>id</th>
         <th>Nombre</th>
         <th>Email</th>
        </thead>
       
    </tr>

    <?php

        $sql="SELECT * FROM personas";
        $result= mysqli_query($conexion,$sql);

        while($mostrar= mysqli_fetch_array($result)){
          ?>

        <tr>
         <td><?php echo $mostrar['id'] ?></td>
         <td><?php echo $mostrar['nombre'] ?></td>
         <td><?php echo $mostrar['email'] ?></td>
        </tr>

            <?php
        }



    ?>
  
</table>

  <a href="guardar_persona.php"><img src="img/bt3.png" width="150px" height="150%"  alt="logo"></a>


</div>
      
    
</body>
</html>