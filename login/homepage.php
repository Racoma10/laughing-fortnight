<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
    <nav>
    <div class="menu">
        <div class="logo">
            <a href="#">Super Clicker</a>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>

        </ul>
    </div>
</nav>
        <div class="img"></div>
        <div class="content">
<div class="title">Fast And Auto Mode</div>
<div class="sub-title">CHEAP AND READY TO USE</div>
<div class="btn">
    <button>Learn More</button>
    <button>Subscribe</button>
<a href="logout.php">Logout</a>

</div>
        </div>
  
  <style>
        	
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
::selection{
    color: #000;
    background: #fff;
}
nav{
    position: fixed;
    background: #1b1b1b;
    width: 100%;
    z-index: 2;
    padding: 10px 0;
}
nav .menu{
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}
.menu .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}
.menu ul{
    display: inline-flex;
}
.menu ul li{
    list-style: none;
    margin-left: 7px;
}
.menu ul li:first-child{
    margin-left: 0;
}
.menu ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}
.menu ul li a:hover{
    background: #fff;
    color: #000;
}
.img{
    background: url('abc.jpg')no-repeat;
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    position: relative;
}
.img::before{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.4);
}
.content{
    position: absolute;
    top: 52%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    padding: 0 20px;
    text-align: center;
}
.content .title{
    color: #fff;
    font-size: 55px;
    font-weight: 600;
}
.content .sub-title{
    color: #fff;
    font-size: 52px;
    font-weight: 600;
}
.content .btn{
    margin-top: 20px;
}
.content .btn button{
    height: 55px;
    width: 170px;
    border-radius: 5px;
    border: none;
    margin: 0 10px;
    border: 2px solid white;
    font-size: 20px;
    font-weight: 500;
    padding: 0 10px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
} 
.content .btn button:first-child{
    color: #fff;
    background: none;
}
.btn button:first-child:hover{
    color: black;
    background:white;
}
.content .btn button:last-child{
    color: black;
   background: white;
}

   </style>

</body>
</html>
   
       <?php 
       if(isset($_SESSION['email'])){
           $email=$_SESSION['email'];
           $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
           while($row=mysqli_fetch_array($query)){
               echo htmlspecialchars($row['firstName']) . ' ' . htmlspecialchars($row['lastName']);
           }
       }
       ?>
      
