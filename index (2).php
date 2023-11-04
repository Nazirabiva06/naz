<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>




<div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
<p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>
<a href="index.php" class="btn">LOGOUT</a>
</div>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;400;600;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/9d3dc3e116.js"></script>



    <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   
</head>  

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png" ></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars"onclick="showMenu()"></i>
        </nav>


        <div class="text-box">
            <h1>World's Biggest University</h1>
            <p>Making website is now one of the easiest thing in the world. You 
            just need to learn "HTML, CSS, <br>Javascript" and you are good to go.</p>
            <a href="" class="hero-btn">Visit Us To Know More</a>
        </div>

    </section>
<!------ course ------>



<section class="course">
    <h1>Courses We Offer</h1>
    <p>here are the some course for student.</p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>A university is an institution of higher education, usually comprising a college 
            of liberal arts and sciences and graduate and professional schools and having the authority 
            to confer degrees in various fields of study.</p>
        </div>

        
        <div class="row">
            <div class="course-col">
                <h3>Degree</h3>
                <p>A university is an institution of higher education, usually comprising a college 
                of liberal arts and sciences and graduate and professional schools and having the authority 
                to confer degrees in various fields of study.</p>
            </div>


         <div class="row">
             <div class="course-col">
                <h3>Post Graduation</h3>
                <p>A university is an institution of higher education, usually comprising a college 
                of liberal arts and sciences and graduate and professional schools and having the authority 
                to confer degrees in various fields of study.</p>
            </div>
    </div>
</section>



<!------JavaScript for Toggle Menu------>
    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>




<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Unbounded', cursive;

}
.header{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/banner.png);
    background-position: center;
    background-size: cover;
    position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: white;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.text-box{
    width: 90%;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 50px;
}
.text-box p{
    margin: 10px 0 40px;
    font-size: 14px;
    color: #fff;
}
.hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}

nav .fa{
    display: none;
}
@media(max-width: 700px){
    .text-box h1{
        font-size: 20px;
    }
    .nav-links ul li{
        display: block;
    }
    .nav-links{
        position: absolute;
        background: #f44336;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }
    nav .fa{
        display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }
    .nav-links ul{
        padding: 30px;
    }
}

/*----- course -----*/
.course{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}
h1{
    font-size: 36px;
    font-weight: 600;
}
p{
    color: #777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}
.row{
    
    display: flex;
    justify-content: space-between;

}


.course-col{
    
    background: #fff3f3;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    justify-content: space-between;
}


.container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }



</style>
   


<!--footer-->
<div class="footer">
        <div class="footer-content"></div>
        <div class="footer-bottom">

          <div class="row">
            <div class="col">
              <img src="logo.png" class="logo">
              <p>I'm Nazira Biva. Student of Dhaka Mohila Polytechnic Institute at Computer department. Here are some of my working experience. I hope it will be choosen by you all.</p>
            </div>


           
            <div class="col">
              <h3>Institute <div class="underline"><span></span></div> </h3>
              <p>Agargaon</p>
              <p>Sher-E-Bangla Nogor</p>
              <p>Dhaka, Bangladesh</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0716688840303!2d90.37447161445641!3d23.780462093545335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74b86758839%3A0x506b8daebdec8358!2sDhaka%20Mohila%20Polytechnic%20Institute!5e0!3m2!1sen!2sbd!4v1660198216460!5m2!1sen!2sbd" width="50%" height="100" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
              
            </div>

            <div class="col">
              <h3>About Me <div class="underline"><span></span></div> </h3>
              <p>Home</p>
              <p>Services</p>
              <p>Contact</p>
              <p class="email-id">nazirabiva111@gmail.com</p>
              <h4>No-01616734666</h4>

            </div> 

            <div class="col">
              <h3>Newsletter <div class="underline"><span></span></div> </h3>
              <form>
                <i class="far fa-envelope"></i>
                <input type="email" placeholder="Enter your email id" required>
                <button type="submit"><i class="fas fa-arrow-right"></i></button>
              </form>
              <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100079367126851"><i class="fab fa-facebook-f"></i> </a>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-instagram"></i>
      
                </div>
      
            </div>
          </div>
        </div>
        
        <hr>
        <p class="copyright">Nazira Biva @ 20222 - All Right Reserved</p>
        </div>
      </div>
      <!--// footer-->
    

      
      <style>

.footer {
	background: linear-gradient(to right, #00093c, #2d0b00);
	color: #fff;
	height: 500px;
	padding: 100px 0 30px;
	border-top-left-radius: 125px;
	font-size: 13px;
	line-height: 20px;

}
.row{
	width: 85%;
	margin: auto;
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	justify-content: space-between;
}
.col{
	flex-basis: 25%;
	padding: 10px;
}
.col:nth-child(2) .col:nth-child(3){
	flex-basis: 15%;

}
.logo{
	width: 80px;
	margin-bottom: 30px;
}
.col h3{
	width: fit-content;
	margin-bottom: 40px;
	position: relative;

}
.email-id{
	width: fit-content;
	border-bottom: 1px solid #ccc;
	margin: 20px 0;
}
ul li{
	list-style: none;
	margin-bottom: 12px;
}
ul li a{
	text-decoration: none;
	color: #fff;
}
form{
	padding-bottom: 15px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	border-bottom: 1px solid #ccc;
	margin-bottom: 50px;

}
form .far{
	font-size: 10px;
	margin-right: 10px;
}
form input{
	width: 100%;
	background: transparent;
	color: #ccc;
	border: 0;
	outline: none;

}
form button{
	background: transparent;
	border: 0;
	outline: none;
	cursor: pointer;
}
form button .fas{
	font-size: 16px;
	color: #ccc;

}
.social-icons .fab{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	text-align: center;
	line-height: 40px;
	font-size: 20px;
	color: #000;
	background: #fff;
	margin: 15px;
	cursor: pointer;
}


hr{
	width: 90%;
	border: 0;
	border-bottom: 1px solid #cccccc;
	margin: 20px auto;
}
.copyright{
	text-align: center;
}

.underline{
	width: 100%;
	height: 5px;
	background: #767676;
	border-radius: 3px;
	position: relative;
	top: 25px;
	left: 0;
}
.underline span{
	width: 15px;
	height: 100%;
	background: #fff;
	border-radius: 3px;
	position: absolute;
	top: 0;
	left: 10px;
	animation: moving 2s linear infinite;
}
@keyframes moving{
	0%{
		left: -20px;
	}
	100%{
		left: 100%;
	}
}
</style>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>





    
</body>
</html>