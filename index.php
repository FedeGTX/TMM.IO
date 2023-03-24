<!DOCTYPE html>
<html>
<head>

        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="rm/img/tank.ico" />
	<title> Menu TM</title>
	<meta charset="utf-8">
        
                  
</head>
<body>
 

    <div class = "rectangulo2">
    <h1>Tank Media Market</h1>
    </div>
  
    <div class = "rectangulo">
         <div class = " texto" >
             <BR>
    <h1>Inicia secion</h1>
     
    
	<?php
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {  
			
			$usuario = $_POST['usuario'];
			$contrasena = $_POST['contraseña'];

			
			if ($usuario == 'usuario' && $contra == 'contra') {
				
				header("location: inicio.html");
				exit;
			} else {
				
				echo '<p>Usuario y/o contraseña incorrectos.</p>';
			}
		}
	?>

	

	<form method="post" action="
            <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="usuario">Usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>
		<label for="contrasena">Contraseña:</label><br>
		<input type="password" id="contrasena" name="Contraseña"><br><br>
                <div class =" enviar">
		<a href="set1.php"> <input type="buton" value="Entrar"> </a>
                </div>
         </div>
	</form>
    <br>
    <br>
    <br>
 
         </div>
      
    
    <div class = "rectangulo">
         <div class = " texto" >
             <BR>
    <h1>Crear cuenta</h1>
    
	<?php
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {  
			$usuario = $_POST['correo'];
			$usuario = $_POST['usuario'];
                        $usuario = $_POST['telefono'];
			$contrasena = $_POST['contraseña'];

			
			if ($usuario == 'usuario' && $contra == 'contra') {
				
				header("location: inicio.html");
				exit;
			} else {
				
				echo '<p>Usuario y/o contraseña incorrectos.</p>';
			}
		}
                
	?>

	

	<form method="post" action="
            <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="usuario">Usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>
                
                <label for="usuario">correo:</label><br>
		<input type="text" id="correo" name="correo"><br>
                
                <label for="usuario">Telefono:</label><br>
		<input type="Num" id="Telefono" name="telefono"><br>
                
		<label for="contrasena">Contraseña:</label><br>
		<input type="password" id="contrasena" name="Contraseña"><br><br>
                <div class =" enviar">
		<a href="set1.php"> <input type="buton" value="Entrar"> </a>
                </div>
        </form>
	
         </div>
    </div>
        
        
</body>
</html>
