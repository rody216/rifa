<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nombres = $_POST['nombres'];
  $telefono = $_POST['telefono'];
  $boleta = $_POST['boleta'];
  // $pag = $_POST['estado'];
  $query = "INSERT INTO participantes(nombres, telefono, boleta) VALUES ('$nombres', '$telefono', '$boleta')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
  
    die ("<h1>EL Número ya lo Seleccionaron anteriormente, Porfavor escoja otro.</h1>"); ;
    
  }  
  $_SESSION['message'] = 'Número Seleccionado Satisfactoriamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
