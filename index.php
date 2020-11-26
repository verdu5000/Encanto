<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Encanto</title>
  </head>
  <link rel="stylesheet" type="text/css" href="css/encanto.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="icon" href="imagenes/favicon.ico">
  <script type="text/javascript" src="js/main.js">

  </script>
  <body>
  <div class="datos">
     <form  method="post">
<input type="texto" name="Nombre" placeholder="Nombre"   required>
<input type="texto"  name="Apellido" placeholder ="Apellido"  required>
<input type="texto"name="Telefono" placeholder="Telefono" required >
<input type="texto"name="Email" placeholder="Email" required >
<textarea name="name" placeholder="SERVICIO A REALIZAR Y FECHA" ></textarea>
<input type="submit" name="enviar" value="Reserva tu cita" >



</form></div>

<?php
include("correo.php")
?>

<div class="titulo">
  <h1>SERVICIOS QUE OFRESEMOS</h1>

</div>

    <!--<button type="button" name="Reserva">Reserva tu cita aqui</button>-->

    <div id="header">
      <ul class="nav">

          <li ><a href="">UÑAS</a> <ul>
            <li><a href="">UÑAS DE ACRILICO</a></li>
            <li> <a href="">ESMALTADO EN GEL</a></li>

          </ul></li>
          <li><a href="">CABELLO</a> <ul>
            <li><a href="">DECOLORACION DE CABELLO</a></li>
            <li><a href="">APLICACION DE TINTE</a></li>
            <li><a href="">CORTE</a></li>
            <li><a href="">PEINADOS(BODAS Y XV AÑOS)</a> <ul>



            </ul> </li>

          </ul></li>


          <li><a href="">MANICURE Y PEDICURE</a>
            <li><a href="">MAQUILLAJE</a><ul>
              <li><a href="">BODAS</a></li>
              <li><a href="">XV AÑOS</a> </li>
              <li><a href="">DE FANTASIA</a></li>
              <li><a href="">CASUAL</a></li>

            </ul></li>
          </li>


        </ul> </li>
      </ul>


    </div>
    <br>
    <br>
    <div id="nosotros" class="texto">
      <h2>Que hacemos en nuestro trabajo</h2>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>




  </body>
</html>
