<!DOCTYPE html>
<html lang="es-ES">

<head>
     <link rel="shortcut icon" type="image/x-icon" href="rm/img/tank.ico" />    
    <link rel="stylesheet" href="style.css">
	<title> Lista TM </title>
</head>

<body>
    <div class="barra">
        <h1>Listado en stock</h1>
        </div>
        <br>
        <br>
        
        <div class="barra2">
    <div class="ContainerCenter">
  <!-- Radio Seleccionar -->
  <input type="radio" name="Carrusel" id="Slider1" checked>
  <input type="radio" name="Carrusel" id="Slider2">
  <input type="radio" name="Carrusel" id="Slider3">
  
  <div class="Carrusels">
    <!-- Imagen contenido -->
    <div class="Carrusel"></div> 
    <div class="Carrusel"></div>
    <div class="Carrusel"></div>
    
    <!-- Flechas a la izquierda por cada imagen -->
    <label for="Slider3" class="ArrowLeft Arrow1">❮</label>
    <label for="Slider1" class="ArrowLeft Arrow2">❮</label>
    <label for="Slider2" class="ArrowLeft Arrow3">❮</label>
	
    <!-- Flechas a la derecha por cada imagen -->
    <label for="Slider2" class="ArrowRight Arrow1">❯</label> 
    <label for="Slider3" class="ArrowRight Arrow2">❯</label>
    <label for="Slider1" class="ArrowRight Arrow3">❯</label>
  </div>
  
  <!-- Selector circulos inferiores colgantes -->
  <div class="Selectors">
    <label for="Slider1" class="Selector"></label>
    <label for="Slider2" class="Selector"></label>
    <label for="Slider3" class="Selector"></label>
  </div>

   </div>
        </div>
<br>
<br>
                    <div class = " texto" >
                     <div class = "rectangulo3">
                         <h1>Main Battle Tank lista </h1>
                         <H1    >MBT </H1>
                     <?php
       
  $MBT_TANK = array("leopard 2a6 ","challenger 2"," T-72BM3" ,"T-80BMV");
list($mbt1 , $mbt2 ,$mbt3 ,$mbt4) = $MBT_TANK;
echo "$mbt1 , $mbt2 , $mbt3 , $mbt4 ";

 ?>
                         <h1>IFV</h1>
                                           <?php
       
  $IFV_TANK = array("bmp-2m "," M2 Bradley"," Puma" ,"Type 89");
list($ivf1 , $ivf2 ,$ivf3 ,$ivf4) = $IFV_TANK;
echo "$ivf1 , $ivf2 , $$ivf3 , $ivf4 ";

 ?>
                         <h1>APC</h1>
                                      <?php
       
  $MBT_TANK = array("bmp-2m "," M2 Bradley"," Puma" ,"Type 89");
list($mbt1 , $mbt2 ,$mbt3 ,$mbt4) = $MBT_TANK;
echo "$mbt1 , $mbt2 , $mbt3 , $mbt4 ";

 ?>
                     </div>
                    </div>
<br>

<div class = "rectangulo4">
    <h1>Escriba sus modelos</h1>
    <h3>Estimado cliente esto es para crear una lista y para que nosotros podamos saber si el modelo esta en stok o no </h3>
    <form action="set1.php">
  <p>MBT 1: <input type="text" name="list1"></p>
   <p>MBT 2: <input type="text" name="list2"></p>
    <p>MBT 3: <input type="text" name="list3"></p>
     <p>MBT 4: <input type="text" name="list4"></p>
      
  <p><input type="submit" value="chequear"></p>
</form>
    
    
    
    
    
   </div>
   <br>
   <br>
<div class = "rectangulo4">
      
 <h1>Lista de espera</h1>
 <?php
print "<p>El MBT = <b>$_REQUEST[list1]</b> esta en espera</p>\n";
print "<p>El MBT = <b> $_REQUEST[list2]</b> esta en espera</p>\n";
print "<p>El MBT = <b>$_REQUEST[list3]</b> esta en espera</p>\n";
print "<p>El MBT = <b>$_REQUEST[list4] </b> esta en espera</p>\n";
?>
          
          
          <div class="lds-hourglass"></div>
</div>
</div>
</body>

</html>