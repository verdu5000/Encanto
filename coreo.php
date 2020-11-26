<?php
if (isset($POST_['enviar'])) {
  if (!empty($_POST['Nombre']) &&  !empty($_POST['Apellido'])  &&  !empty($_POST['Telefono']) &&  !empty($_POST['Email']) &&  !empty($_POST['name'])) {

  $Nombre = $_POST['Nombre'];
  $Apellido =$_POST['Apellido'];
  $Telefono =$_POST['Telefono'];
  $Email =$_POST['Email'];
  $name =$_POST['name'];
  $header = "From: verdu_5000@hotmail.com" . "\r\n";
  $header .= "Reply-To : verdu_5000@hotmail.com" . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion();
  $mail = @mail($Nombre,$Apellido,$email,$Telefono,$name,$header);
  if ($mail) {
    echo "<h4> !Mensaje enviado correctamente¡</h4>";
  }



  }

}



 ?>
