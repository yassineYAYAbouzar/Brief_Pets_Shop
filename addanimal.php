<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.col-lg-5 {
    max-width: 49.666667%;
}
</style>
<?php
include 'header.php';
?>
<button class="btn btn-info mb-3">Back to back</button>
<form method="POST">
  <div class="form-group">
    <input type="" class="form-control" name="Pet_iD" placeholder="Enter Pet_iD">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Pet_category"  placeholder="Enter Pet_category">
  </div>
  <div class="form-group">
    <input type="" class="form-control" name="Breed" placeholder="Enter Breed">
  </div>
  <div class="form-group ">
    <input type="" class="form-control col-lg-5 d-inline" name="Weight" placeholder="Enter Weight">
    <input type="" class="form-control col-lg-5 d-inline" name="Height"  placeholder="Enter Height">
  </div>
  <div class="form-group">
    <input type=""  class="form-control col-lg-5 d-inline" name="Age" placeholder="Enter Age" >
    <input type="" class="form-control col-lg-5 d-inline" name="Fur" placeholder="Enter Fur" >
  </div>
  <button type="submit" name="save" class="btn btn-info btn-block">Save</button>
</form>
<?php
include 'footer.php';
include 'conect.php';
if(isset($_POST['save'])){
  $Pet_iD =$_POST['Pet_iD'];
  $Pet_category =$_POST['Pet_category'];
  $Breed =$_POST['Breed'];
  $Weight =$_POST['Weight'];
  $Height =$_POST['Height'];
  $Age =$_POST['Age'];
  $Fur=$_POST['Fur'];
  $stmts = $con->prepare("INSERT INTO `animals` (`id_produit`, `id_client`, `breed`, `weight`, `height`, `age`, `fur`) VALUES ('$Pet_iD', '$Pet_category', '$Breed', '$Weight', ' $Height', '$Age', '$Fur');");
  $stmts->execute();
  echo "<script>window.location.assign('animals.php') ;</script>";
}
?>
<?php
if(isset($_POST['out'])){
  session_unset();
  session_destroy();
  header('location: login.php');
}
?>