﻿<?php
//KONEKSI KE DATABASE
$conn = mysqli_connect('localhost','root','','uaswebsite');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Rani's Bakery Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style>
.navbar-brand{
    text-align: center;
    padding-top: 17px;
    font-size: smaller;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-color: chocolate;
}
a{
    font-size: smaller;
}
.copyrightText{
    padding: 8px 40px;
    line-height: 10px;
    bottom: 0px;
    width: 100%;
    text-align: center;
}
.copyrightText p{
    color: black;
}
.copyrightText a{
    color: rgb(155, 68, 6);
    font-weight: 500;
    text-decoration: none;
}
</style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rani's Bakery</a> 
            </div>
  <div 
  style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
<a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> 
  </div>
        </nav>  

           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/profil wanita.png" class="user-image img-responsive"/>
					</li>
                    <li><a href="dashboard.php"><i class="fa fa-home fa-3x"></i> Home</a></li>
                    <li><a href="dashboard.php?halaman=menu"><i class="fa fa-glass fa-3x"></i> Menu</a></li>
                    <li><a href="dashboard.php?halaman=pembelian"><i class="fa fa-money fa-3x"></i> Pembelian</a></li>
                    <li><a href="dashboard.php?halaman=pelanggan"><i class="fa fa-user fa-3x"></i> Pelanggan</a></li>
                    <li><a href="dashboard.php?halaman=logout"><i class="fa fa-key fa-3x"></i> Log Out</a></li>
                </ul>
            </div>
        </nav>  

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if(isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="menu")
                    {
                        include 'menu.php';
                    }
                    elseif($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php';
                    }
                    elseif($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php';
                    }
                    elseif($_GET['halaman']=="details")
                    {
                        include 'details.php';
                    }
                    elseif($_GET['halaman']=="tambahmenu")
                    {
                        include 'tambahmenu.php';
                    }
                    elseif($_GET['halaman']=="hapusmenu")
                    {
                        include 'hapusmenu.php';
                    }
                    elseif($_GET['halaman']=="ubahmenu")
                    {
                        include 'ubahmenu.php';
                    }
                    elseif($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif($_GET['halaman']=="hapuspelanggan")
                    {
                        include 'hapuspelanggan.php';
                    }
                    }
                    else
                    {
                        include 'home.php';
                    }
                ?>  
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    <div class="copyrightText">
        <p>&copy; Copyright By 18111240_Rani Rahmawati_TIFRP18CIDA_UASWEB1</p>
    </div>


</body>
</html>
