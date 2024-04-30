<?php

require_once "Sampark/Varatalap.php";

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $msg=$_POST['msg'];
//    $password=$_POST['password'];

    $sql="INSERT INTO info(username,email,phoneno,msg) VALUES(:username,:email,:phoneno,:msg)";

    $query=$dbo->prepare($sql);

    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':phoneno',$phoneno,PDO::PARAM_STR);
    $query->bindParam(':msg',$msg,PDO::PARAM_STR);

    if($query->execute()){
        echo"<script>
                  alert('The data are entered properly in database');  
            </script>";
    }
    else{
        echo"<script>
              alert('The dat are not entered properly in database'); 
            </script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9c379ed9e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Profile For Me</title>
</head>
<body>
<div class="header">
    <div class="navbar">
        <h2 class="logo">SM</h2>
        <ul class="items">
            <li class="item"><a href="#home" class="a">HOME</a></li>
            <li class="item"><a href="#about" class="a">ABOUT</a></li>
            <li class="item"><a href="#food" class="a">PROJECTS</a></li>
            <li class="item"><a href="#skills" class="a">SKILLS</a></li>
            <li class="item"><a href="#contact" class="a">CONTACT</a></li>
            <li class="item"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
        </ul>
    </div>

    <div class="content" id="home">
        <p class="txt">Smit Mistry</p>
        <p class="profile">A motivated and passionate student with excellent academic track record and eager to contribute in
            team success through hard work. I have good proficiency in Web Development Field especially in FrontEnd Development.

        </p>
        <a href="./CV/Smit-Mistry-FlowCV-Resume-20231211 (1).pdf" class="btn-primary" target="_blank">RESUME</a>
        <!-- <button class="btn">RESUME</button> -->
    </div>

</div>

<section class="about" id="about">
    <!-- <p>ABOUT</p> -->
    <div class="row1">
        <div class="text-box">
            <!-- <h1 class="name">SMIT MISTRY</h1> -->
            <h2 class="tit">ABOUT ME</h2>
            <p class="me">A motivated and passionate student with excellent academic track record and eager to contribute in
                team success through hard work. I have good proficiency in Web Development Field especially in FrontEnd Development.

            </p>
            <h2 class="tit">WORK EXPERIENCE</h2>
            <p class="me">TECHNOOK(2 MONs.)</p>
            <p class="me">Web Designer Intern<br>

                •Improved my skills and concepts.
                <br>
                •Build projects using HTML, CSS and JavaScript.
            </p>
        </div>
        <div class="img-box"><img src="img/profile.jpeg" alt=""></div>
    </div>
</section>

<section id="food">
    <h2 class="pro">PROJECTS</h2>
    <div class="food-container container">
        <div class="food-type fruit">
            <div class="img-container">
                <img src="./img/smit.jpg" alt="">
                <div class="img-content">
                    <h3>Weather Prediction Web App</h3>
                    <a href="./weather-main/weather-main/weatherApp/weather.html" class="btn btn-primary" target="_blank">VISIT SITE</a>
                </div>
            </div>
        </div>
        <div class="food-type vegetable">
            <div class="img-container">
                <img src="./img/restorent.jpg" alt="">
                <div class="img-content">
                    <h3>Restorent Web Site</h3>
                    <a href="./Restorent_Web_Site/index.html" class="btn btn-primary" target="_blank">VISIT SITE</a>
                </div>
            </div>
        </div>
        <div class="food-type grain">
            <div class="img-container">
                <img src="./img/taravel.jpg" alt="">
                <div class="img-content">
                    <h3>Travel World Web Site</h3>
                    <a href="./TRAVEL_WEB_SITE/index.html" class="btn btn-primary" target="_blank">VISIT SITE</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="skills" id="skills">
    <div class="myskills">
        <h1 class="my">SKILLS</h1>
        <div class="index">
            <div class="skill">
                <div class="html">
                    <div class="img"><img src="./img/HTML.jpg" alt="" class="image"></div>
                    <div class="tx">HTML</div>
                </div>

                <div class="js">
                    <div class="img"><img src="./img/css.png" alt="" class="image"></div>
                    <div class="tx">CSS</div>
                </div>

                <div class="html">
                    <div class="img"><img src="./img/js.jpg" alt="" class="image"></div>
                    <div class="tx">JAVA SCRIPT</div>
                </div>

                <div class="js">
                    <div class="img"><img src="./img/node.jpg" alt="" class="image"></div>
                    <div class="tx">NODE JS</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">

    <div class="row2">
        <div class="add">
            <h2 class="loca">LOCATION<i class="fa-solid fa-location-dot"></i></h2>
            <p class="LOC">Bardoli, Sanskar Row House A-11</p>

            <h2 class="loca">EMAIL<i class="fa-solid fa-envelope"></i></h2>
            <p class="LOC">smitmistry9122@gmail.com</p>

            <h2 class="loca">LINKED IN <i class="fa-brands fa-linkedin-in"></i></h2>
            <p class="LOC"><a href="https://www.linkedin.com/feed/" class="link" target="_blank">https://www.linkedin.com/feed/</a></p>

            <h2 class="loca">CONTACT No<i class="fa-solid fa-phone"></i></h2>
            <p class="LOC">9099449969</p>

        </div>
        <div class="form">
            <form  class="for" method="POST">
                <h1>CONTACT</h1>
                <label for="username" class="cont">USER NAME:</label>
                <br>
                <input class="my" type="text" name="username" placeholder="User Name" required>
                <br> <br>

                <label for="" class="EMAIL cont">EMAIL:</label>
                <br>
                <input class="my" type="text" name="email" placeholder="Email" required>
                <br> <br>

                <label for="" class="Phoneno cont">PHONE NO:</label>
                <br>
                <input type="number" class="my" name="phoneno"  placeholder="Phone No" required>
                <br> <br>

                <label for="" class="message cont">MESSAGE:</label>
                <br>
                <input type="text" class="my" name="msg">
                <br> <br>

                <input type="Submit" id="btn" value="Submit" name="submit" >


            </form>
        </div>
    </div>
</section>


<!-- <script src="script.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

</body>
</html>