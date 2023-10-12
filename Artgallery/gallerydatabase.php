<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou@artgallery</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Barriecito|Parisienne">
    <style>
        .nav{
            width:100%;
            height: 70px;
            font-family: Pacifico;
            background-color: black;      
        }
        .nav h1{
            padding:15px 0px 0px 30px;
            color:whitesmoke;
            font-family: Barriecito;
            text-shadow: 3px 3px 6px darkgreen;
            letter-spacing: 2px;
            position: relative;
            bottom:15px;
        }
        a{
            text-decoration-line: none;
            color:orange;
            animation: blink 1s infinite;      
        }
        a:hover{
            color:white;
            text-shadow: 4px 4px 4px whitesmoke;
        }
        @keyframes blink{
            0%{
                transform: scale(0.7, 0.7);
                color:silver;
            }
            50%{
                transform: scale(1.1, 1.1);
                color:Orange;
            }
            100%{
                transform: scale(0.2, 0.2);
                color:white;
            }
        }
        body{
            background-color: black;
        }
        .div1{
            font-size:30px;
            color:silver;
            animation:change 2s linear;
            position:relative;
            bottom:350px;
            z-index:1;
            padding:0px 20px 0px 20px;
        }
        @keyframes change{
            0%{
                transform: scale(0, 0);
            }
            50%{
                transform: scale(1.1, 1.3);
            }
            100%{
                transform:scale(1,1);
            }
        }
        .splatter{
            margin-left: 350px;
            position: relative;
            left:500px;            
            transform:rotate(90deg);
            animation: splatter 4s;
        }
        @keyframes splatter{
            0%{
                opacity:0;
            }
            100%{
                opacity:1;
                /* clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%); */
                
            }
        }
        </style>
</head>
<body>
<div class="nav">
        <H1><i class="material-icons" style="font-size: 45px; position: relative; top:10px; color:orange;">palette</i> MY ART <SPAN style="color:orange;">GALLERY</SPAN></H1>
        <nav style="float: right; position:relative; bottom:68px;">
            <a href="galleryhome.php" >HOME</a>
            <a href="galleryabout.php" style="padding:50px 60px 0px 60px">ABOUT</a>
            <a href="gallerymain.php" style="padding-right:60px">GALLERY</a>
            <a href="gallerycontact.php" style="padding-right:60px">CONTACT</a>
        </nav>        
        </div>
        
        <img src="images\splatter2new.png" height="450px" width="450px" class="splatter">  
    <div class="div1">
    <center>
        <h1><span style="color:orange;">THANK YOU</span> FOR YOUR STOPOVER ON MY WEBSITE!</h1>
    </center>
    </div>
</body>
</html>




<?php
$pname=$_POST['name'];
$pmail=$_POST['email'];
$msg=$_POST['message'];
$conn=new mysqli("localhost", "root", "", "test");
if($conn->connect_error){
    echo "not connected!" . $conn->connect_error;
}
else{
    echo "connected successfully!";
}
// $var1="CREATE TABLE Tab1 (P_Name varchar(30), P_EmailID varchar(30), P_Message varchar (2000))";
// $query=$conn->query($var1);
$var2="INSERT INTO Tab1 (P_Name, P_EmailID, P_Message) VALUES
('$pname', '$pmail', '$msg')";
$query=$conn->query($var2);
$var3="DELETE FROM Tab1 WHERE P_Name=''";
$query=$conn->query($var3);
?>