<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
    body{
    margin: 0;
    padding: 0;
    background: url("../image/bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif;
}
.login{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.308);
    padding: 20px;
    width: 270px;
    box-shadow: 0 0 10px 5px chocolate;
}
.avatar{
    font-size: 50px;
    background: cornsilk;
    width: 80px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    position: fixed;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    color: #2c3e50;
}
.login h2{
    text-align: center;
    color: white;
    padding-top: 10px;
    letter-spacing: 8px;
}
.box-login{
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    border-bottom: 2px solid white;
    padding: 8px 0;
}
.box-login i{
    font-size: 20px;
    color: white;
}
.box-login input{
    width: 100%;
    padding: 0 10px;
    background: none;
    border: none;
    outline: none;
    color: white;
    font-size: 15px;
}
.box-login input::placeholder{
    color: white;
}
.btn-login{
    width: 100%;
    background: none;
    padding: 10px;
    border: 1px solid white;
    font-size: 15px;
    letter-spacing: 5px;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}
.btn-login:hover{
    background: rgba(0,0,0,0.8);
}
.buttom{
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
.buttom a{
    color: white;
    font-size: 14px;
    text-decoration: none;
}
.buttom a:hover{
    text-decoration: underline;
}
#footer{
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.808);
    position: absolute;
    line-height: 10px;
    bottom: 0px;
    width: 100%;
}
</style>
</head>

<body>

<div class="container-fluid">
    <div class="login">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Login Form</h2>
        <form name="loginform">
        <div class="box-login">
            
            <i class="fas fa-envelope"></i>
           
            <input type="email" id="email" name="email" placeholder="Email" >
        </div>
        <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Password" >
        </div>

        <button type="button" class="btn-login" id="login"> Log In</button>
        <div class="buttom">
            <div class="d-flex justify-content-center links">
			<a href="register.php">Registrasi</a>
			</div>
            <a href="#">Lupa password?</a>
        </div>
    </form>
    </div>
    
    <div id="container">
    <div id="footer">
        <p>&copy; Copyright by 18111240_Rani Rahmawati_TIFRP18CIDA_UASWEB1</p>
    </div>
    </div>
    </footer>
</div>
</body>

<script language="JavaScript">
    var login = document.getElementById("login");
    login.addEventListener("click", () => {
        var email = document.forms["loginform"]["email"].value;
        var password = document.forms["loginform"]["password"].value;

        if (email == "admin@gmail.com" && password == "admin123") {
            window.location.replace("dashboard.php");
            alert('Selamat! Login Sukses');
        }else{
            alert('Mohon Maaf Login Gagal')
        }
    });
</script>

</body>
</html>