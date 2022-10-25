<?php
include("db.php");
$nombres = '';
$telefono = '';
$boleta = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM participantes WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $telefono = $row['telefono'];
    $boleta = $row['boleta'];
   
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombres = $_POST['nombres'];
  $telefono = $_POST['telefono'];
  $boleta= $_POST['boleta'];
  $estado = $_POST['estado'];
  

  $query = "UPDATE participantes set nombres = '$nombres', telefono = '$telefono', boleta = '$boleta' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Boleta Actualizada con Éxito.';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombres" type="text" class="form-control" value="<?php echo $nombres; ?>" placeholder="Actualizar Nombre.">
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar Teléfono.">
        </div>        
        <div class="form-group">
          <input name="boleta" type="text" class="form-control" value="<?php echo $boleta; ?>" placeholder="Actualizar Número de Boleta.">
        </div>
        
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
