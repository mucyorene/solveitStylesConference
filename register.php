<?php

    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="proImg/25.jpg">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Speaker</title>
</head>
<body>

    <div id="indexTopHeader">

        <div id="logo">
            STYLES <br>
            CONFERENCES
        </div>
        <div id="navLinks">
            <div id="smText">August 24-26<sup>th</sup><sup>___</sup>Kigali</div><br><br>
            <ul id="navLink">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Speakers</a></li>
                <li><a href="schedule.html">Schedule</a></li>
                <li><a href="venue.html">Venue</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>
    </div>
    <div id="indexHeaderSpeaker">
        <div id="descTitleSpeaker">
            <br>
            Speaker <br><br>
        </div>
        <div id="descTitle2Speacker">
            Everyday the brightest web designers and the front end developers descend <br> on Kigali to discuss the latest
            technologies. Join us this August
            <br><br>
        </div>
    </div>
    <div id="indexMainSpeaker">
            <div id="leftSide">
                <span id="titles"> <b>Purchase Conference Pass </b></span><br><br>
                <div id="minTitle">
                    399 PER PASS<br><br>
                    Lorem ipsum dolor sit amet, consectetur
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id <br>
                    <br>

                    Why Attend?
                    <br><br>
                    <ul>
                        <li>Over twenty speakers.</li>
                        <li>Over twenty speakers around the world</li>
                        <li>Over twenty speakers around.</li>
                        <li>Over twenty speakers around the.</li>

                    </ul>
                </div>
                <br>
            </div>&nbsp; &nbsp; &nbsp;
            <div id="rightSide">
                <div id="formLegend">
                    <form method="POST" id="registerForm">
                        <label for="" id="labels">Name</label><br>
                        <input type="text" name="names" placeholder="Full Names"><br><br>
                        <label for="">Email</label><br>
                        <input type="text" name="emails" placeholder="Email Address" id=""><br><br>
                        <label for="">Number of Passes</label><br>
                        <select name="nAttend" id="">
                            <?php
                                $i = 1;
                                for ($i=1; $i<=10; $i++) { 
                                    ?>
                                    <option value="<?= $i;?>"><?= $i;?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        <br><br>
                        <label for="">Comments</label> <br>
                        <textarea name="comment" placeholder="" id="" cols="22" rows="4"></textarea><br><br>
                        <input type="submit" name="purchasing" style="background-color: #013f27;" value="PURCHASE" id="btnSave">
                    </form>
                </div>
            </div>
    </div><br><br>
    <div id="footer">
        <div id="footerLinks">
            <div id="copyRight">
                &copy Alright reserved 2021
            </div>
            <div id="footerLeft">
                <ul id="footerLinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="speakers.html">Speakers</a></li>
                    <li><a href="schedule.html">Schedule</a></li>
                    <li><a href="venue.html">Venue</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    if (isset($_POST['purchasing'])) {
        $a = mysqli_real_escape_string($conn,$_POST['names']);
        $b = mysqli_real_escape_string($conn,$_POST['emails']);
        $c = mysqli_real_escape_string($conn,$_POST['nAttend']);
        $d = mysqli_real_escape_string($conn,$_POST['comment']);
        
        $save = mysqli_query($conn,"INSERT INTO attenders (id,names,email,nbrOfPasses,comments) VALUES ('','$a','$b','$c','$d')") or die(mysqli_error($conn));
        if ($save) {
            echo "<script>alert('Purchased successfully');</script>";
        }else{
            echo "<script>alert('Purchased not done');</script>";
        }
    }
?>