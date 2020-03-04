<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon"href="ico/Favicon.ico">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles.css"> 
    <title>login</title>
</head>
<body>
 
 <div class="login-box" >

     
      <img src="img/lgo2.png" class="avatar" alt="Avatar Image"> 
     <h1>Login</h1>
     
     <form action="guardar_persona.php" method="post">
         
            <label for="usuario" >Usuario</label> 
            <input type="text" name="nombre" required placeholder="usuario">
            
            <label for="email">Email</label> 
            <input type="text" name="email" required placeholder="email">
            
            <input type="submit" value="Guardar">
            
          
          
            <a href="index.php"><img src="img/bt4.png" width="100px" height="100%"  alt="logo"></a>
           
          
           
            

          
         
    </form>
     
 </div>
 

    
</body>
</html>