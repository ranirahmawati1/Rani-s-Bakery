<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rani's Bakery Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Tangerine:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kurale&family=Oranienbaum&family=Parisienne&family=Tangerine:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css"/>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}
p{
    font-weight: 300;
    color: black;
    font-size: 1.2em;
}
body{
    min-height: 1000px;
}

section{
    padding: 100px;
}
.row{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.row .col50{
    position: relative;
    width: 48%;
}
.titleText{
    color: black;
    font-size: 3em;
    font-weight: 300;
    font-family: 'Oranienbaum', serif;
}
.titleText span{
    color: black;
    font-weight: 700;
    font-size: 2em;
    font-family: 'Oranienbaum', serif;
}
.row .col50 .imgBx{
    position: relative;
    width: 100%;
    min-height: 300px;
}
.row .col50 .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.title{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Oranienbaum', serif;
}
.menu .content{
    display: flex;
    justify-content: center;
    flex-direction: row-reverse;
    flex-wrap: wrap;
    margin-top: 20px;
}
.menu .content .box{
    width: 340px;
    margin: 20px;
    border: 5px solid black;
    box-shadow: 0 5px 35px rgba (0,0,0,0.08);
}
.menu .content .box .imgBx{
    position: relative;
    width: 100%;
    height: 300px;
}
.menu .content .box .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.menu .content .box .text{
    padding: 15px 0 5px;
    font-family: 'Oranienbaum', serif;
}
.menu .content .box .text h3{
    font-weight: 400;
    color: black;
    text-align: center;
    font-family: 'Oranienbaum', serif;
}
.testimonials .content{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    margin-top: 40px;
}
.testimonials .content .box{
    width: 340px;
    margin: 20px;
    padding: 40px;
    background: white;
    border: 5px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.testimonials .content .box .imgBx{
    position: relative;
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
    border-radius: 50%;
    overflow: hidden;
}
.testimonials .content .box .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.testimonials .content .box .text{
    text-align: center;
}
.testimonials .content .box .text p{
    color: black;
    font-style: italic;
}
.testimonials .content .box .text h3{
    margin-top: 20px;
    color: black;
    font-size: 1.1em;
    color: black;
    font-weight: 600;
    font-family: 'Oranienbaum', serif;
}
.copyrightText{
    padding: 8px 40px;
    border-top: 1px solid rgba(0,0,0,0.1);
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

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText"><span>A</span>bout Us</h2>
                <p>Rani's Bakery berdiri sejak 2015, merupakan tempat yang paling terkini untuk mendapatkan aneka roti dan kue 
                    yang dibuat dengan bahan terbaik.<br>
                    Menu-menu pilihan yang memiliki citarasa lezat dan sehat. Beli roti disini membuat perut kenyang, hatipun senang.</p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="../image/tokoku.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="title">
            <h2 class="titleText">Our <span>B</span>est Seller Menu's</h2>
            <p>Menu Rani's Bakery yang paling banyak diminati pelanggan</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="../image/donat.jpeg">
                </div>
                <div class="text">
                    <h3>Donat</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/gandum.jpeg">
                </div>
                <div class="text">
                    <h3>Roti Gandum</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/pie.jpeg">
                </div>
                <div class="text">
                    <h3>Pie</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/garlic.jpeg">
                </div>
                <div class="text">
                    <h3>Korean Garlic Bread</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/sourdough.jpeg">
                </div>
                <div class="text">
                    <h3>Sourdough Bread</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/croisant.jpeg">
                </div>
                <div class="text">
                    <h3>Croisant</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="titleText">They <span>S</span>aid About Us</h2>
            <p>Ulasan mereka terhadap Rani's Bakery</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="../image/sinta.jpg">
                </div>
                <div class="text">
                    <p>Pelayanannya sangat baik, rotinya enak. Saya sangat suka, apalagi donatnya beda dari toko-toko lain. Rani's Bakery 
                        memang paling top!</p>
                    <h3>Sinta Ramayanti</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/rizky.jpg">
                </div>
                <div class="text">
                    <p>Berbagai menu bakery sudah saya cicipi dari berbagai tempat. Namun Rani's Bakery adalah bakery shop 
                        terbaik yang membuat saya tidak ingin ketinggalan untuk mencoba menu-menu barunya.</p>
                    <h3>Rizky Ramadhan</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="../image/noviana.jpg">
                </div>
                <div class="text">
                    <p>Menu favorit saya di Rani's Bakery adalah special korean garlic bread. Harum garlicnya sangat aromatik, saya sudah 
                        menjadi langganan dari mulai bakery shop ini hadir.</p>
                    <h3>Noviana Saila Hakim</h3>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    window.addEventListener('Scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script> 
</body>
</html>