<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.copyrightText{
padding: 190px 10px;
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
<br><br>
<div class="container">
  <h2>View Data User</h2>  

  <?php
    $conn = mysqli_connect('localhost','root','','uaswebsite');
    if(isset($_GET['del'])){
        $del_id = $_GET['del'];
        $delete = "DELETE FROM tb_user WHERE user_id='$del_id'";
        $run_delete = mysqli_query($conn,$delete);
        if($run_delete === true){
            // echo "Data Telah Dihapus";
        }else{
            echo "Gagal Menghapus Data";
        }
    }
  ?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>Detail</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>

    <?php
        $conn = mysqli_connect('localhost','root','','uaswebsite');
        $select = "SELECT * FROM tb_user";
        $run = mysqli_query($conn,$select);
        while($row_user = mysqli_fetch_array($run)){
            $user_id = $row_user['user_id'];
            $user_name = $row_user['user_name'];
            $user_email = $row_user['user_email'];
            $user_password = $row_user['user_password'];
            $user_image = $row_user['user_image'];
            $user_detail = $row_user['user_detail'];
    ?>
      <tr>
        <td><?php echo $user_id;?></td>
        <td><?php echo $user_name;?></td>
        <td><?php echo $user_email;?></td>
        <td><?php echo $user_password;?></td>
        <td><img src="upload/<?php echo $user_image;?>" height="70px;"></td>
        <td><?php echo $user_detail;?></td>
        <td><a class="btn btn-danger" href="view.php?del=<?php echo $user_id;?>">Delete</a></td>
        <td><a class="btn btn-success" href="edit.php?edit=<?php echo $user_id;?>">Edit</a></td>
      </tr>
      <?php } ?> 
    </tbody>
  </table>
</div>

    <div class="copyrightText">
        <p>&copy; Copyright by 18111240_Rani Rahmawati_TIFRP18CIDA_UASWEB1</p>
    </div>

</body>
</html>
