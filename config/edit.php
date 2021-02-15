<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.copyrightText{
padding: 90px 10px;
text-align: center;
}
.copyrightText p{
    color: black;
    font-weight: 120;
    text-decoration: none;
}
h2{
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 40px;
}
</style>

</head>
<body>
<br></br>
<div class="container">
  <h2>Edit Data User</h2>

  <?php
    $conn = mysqli_connect('localhost','root','','uaswebsite');
    if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];

      $select = "SELECT * FROM tb_user WHERE user_id='$edit_id'";
      $run = mysqli_query($conn,$select);
      $row_user = mysqli_fetch_array($run);
          $user_name = $row_user['user_name'];
          $user_email = $row_user['user_email'];
          $user_password = $row_user['user_password'];
          $user_image = $row_user['user_image'];
          $user_detail = $row_user['user_detail'];
    }
  ?>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" value="<?php echo $user_name;?>" placeholder="Masukkan Nama" name="user_name">
    </div>

    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" value="<?php echo $user_email;?>" placeholder="Masukkan Email" name="user_email">
    </div>

    <div class="form-group">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control"  value="<?php echo $user_password;?>" placeholder="Masukkan Password" name="user_password">
    </div>

    <div class="form-group">
      <label>Image :</label>
      <input type="file" class="form-control" placeholder="Name" name="user_image">
    </div>

    <div class="form-group">
      <label>Detail :</label>
      <textarea class="form-control" name="user_detail"><?php echo $user_detail;?></textarea>
    </div>

    <input type="submit" name="insert-btn" class="btn btn-primary"/>
  </form>

<?php
    $conn = mysqli_connect('localhost','root','','uaswebsite');

    if(isset($_POST['insert-btn'])){

        $euser_name = $_POST['user_name'];
        $euser_email = $_POST['user_email'];
        $euser_password = $_POST['user_password'];
        $eimage = $_FILES['user_image']['name'];
        $eimage_tmp = $_FILES['user_image']['tmp_name'];
        $euser_detail = $_POST['user_detail'];

        if(empty ($eimage)){
          $eimage = $user_image;
        }

    $update = "UPDATE tb_user SET user_name='$euser_name',user_email='$euser_email',user_password='$euser_password',
    user_image='$eimage',user_detail='$euser_detail' WHERE user_id='$edit_id' ";

    $run_update = mysqli_query($conn,$update);
        if($run_update === true) {
            echo "Data Berhasil Diubah";
            move_uploaded_file( $eimage_tmp,"upload/$eimage" );
        }else{
            echo "Gagal Mengubah Data, Coba Lagi!";
        }
    }
?>

<a class="btn btn-primary" href="view.php">View Data User</a>

</div>

    <div class="copyrightText">
        <p>&copy; Copyright by 18111240_Rani Rahmawati_TIFRP18CIDA_UASWEB1</p>
    </div>

</body>
</html>
