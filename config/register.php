<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.copyrightText{
padding: 120px 10px;
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
  <h2>REGISTRASI</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" placeholder="Masukkan Nama" name="user_name">
    </div>

    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="user_email">
    </div>

    <div class="form-group">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" placeholder="Masukkan Password" name="user_password">
    </div>

    <div class="form-group">
      <label>Image :</label>
      <input type="file" class="form-control" placeholder="Name" name="user_image">
    </div>

    <div class="form-group">
      <label>Detail :</label>
      <textarea class="form-control" name="user_detail"></textarea>
    </div>

    <input type="submit" name="insert-btn" class="btn btn-primary"/>
  </form>

<?php
    $conn = mysqli_connect('localhost','root','','uaswebsite');

    if(isset($_POST['insert-btn'])){

        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $image = $_FILES['user_image']['name'];
        $tmp_name = $_FILES['user_image']['tmp_name'];
        $user_detail = $_POST['user_detail'];

    $insert = "INSERT INTO tb_user(user_name,user_email,user_password,user_image,user_detail) VALUES('$user_name',
    '$user_email','$user_password','$image','$user_detail')";

    $run_insert = mysqli_query($conn,$insert);
        if($run_insert === true) {
            echo "Data Berhasil Ditambahkan";
            move_uploaded_file($tmp_name,"upload/$image" );
        }else{
            echo "Gagal Menambahkan Data, Coba Lagi!";
        }
    }
?>

</div>
    <div class="copyrightText">
        <p>&copy; Copyright by 18111240_Rani Rahmawati_TIFRP18CIDA_UASWEB1</p>
    </div>

</body>
</html>
