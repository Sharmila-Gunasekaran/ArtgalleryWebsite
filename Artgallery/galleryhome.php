<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Artgallery</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Barriecito|Parisienne">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>      
        
            .side{
            height:600px;
            width:240px;
            border:2px solid black;
            background-color: black;
            color: goldenrod;
            padding:0px 10px 10px 10px;
            font-family: Parisienne;
        }
        a{
            text-decoration-line: none;
            color:Orange;
            font-size: 40px;
        }
        a:hover{
            color:whitesmoke;
            text-shadow: 3px 3px 5px wheat;
        }
        #iclass{
            font-size: 100px;
            color:black;
            border-radius:50%;
        }
        
        body{
            background-color: rgb(0, 44, 0);
            background-color: black;
        }
        .main{
            background-image: url("artgallery bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            height:624px;
            width:1050px;
            font-family: Barriecito;
            font-size:44px;
            animation:slideview 10s infinite 2s;
        }
        @keyframes slideview{
            0%, 150%{
                background-image: url("artgallery bg.png");
            }
            50%{
                background-image: url("bgg5.jpg");
            }
        }
        .sec{
            width:100%;
            height:400px;
            background-image: url(bgg5.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        aside{
            background-color: black;
            border:2px solid black;
            width:80%;
            height:250px;
            position: relative;
            top:80px;
            font-size: 30px;
            font-family: Parisienne;
            color:silver;
            letter-spacing: 2.4px;
        }
        button{
            padding:5px;
            box-shadow: 3px 3px 6px 3px  white;
            color:black;
            font-weight: 30px;  
            font-size: 20px;  
            background-image: linear-gradient(to bottom right, gold, orange, yellow, goldenrod);
            animation-name: blink;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;       
        }
        @keyframes blink{
            0%{
                transform: scale(0.9, 0.9);
            }
        
            50%{
                transform: scale(1.1, 1.1);
            }
            100%{
                transform: scale(1, 1);
            }
        }

        .sec a{
            font-size: 30px;
        }
        .main h2{
            animation: blinking 1.3s linear 0s;
            
        }
        @keyframes blinking{
            0%, 100%{
                transform: scale(1,1);
            }
            50%{
                transform: scale(0, 1.2);
            }
        }
        .main p{
            animation: blinking2 1s linear 2s infinite;
        }
        @keyframes blinking2{
            0%, 100%{
                transform: scale(1,1);
            }
            50%{
                transform: scale(1, 1.2);
            }
        }
        #anchor1{
            animation: anchor1 1s infinite ease-in-out;
        }
        @keyframes anchor1{
            0%, 100%{
                color:silver;
            }
            50%{
                color:orange;
            }
        }
        #anchor2{
            animation: anchor2 2s infinite ease-in-out 2s;
        }
        @keyframes anchor2{
            0%, 100%{
                color:orange;
            }
            50%{
                color:silver;
            }
        }
        #anchor3{
            animation: anchor3 3s infinite ease-in-out 3s;
        }
        @keyframes anchor3{
            0%, 100%{
                color:silver;
            }
            50%{
                color:orange;
            }
        }
        #anchor4{
            animation: anchor4 4s infinite ease-in-out 4s;
        }
        @keyframes anchor4{
            0%, 100%{
                color:orange;
            }
            50%{
                color:silver;
            }
        }
        
    </style>
</head>
<body>
    <DIV STYLE="display: flex;">
    <div class="side">
        <div style="background-image:linear-gradient(to bottom right, gold, rgb(240, 177, 60), gold);
        box-shadow: 3px 3px 5px grey;
         font-family: Barriecito; color:black;">
        <center>
        <i class="material-icons" id="iclass">person_pin</i>
        <H1>Sharmila</H1>
        <H2>Artist</H2>
        <br>
    </div>    

   </center>
   <center>
        <nav>
            <br>
            <a href="galleryhome.php" id="anchor1">
                <i class="material-icons">home</i> Home
            </a><br><br>
            <a href="galleryabout.php" id="anchor2">
                <i class="material-icons">note</i> About
            </a><br><br>
            <a href="gallerymain.php" id="anchor3">
                <i class="material-icons" >photo_library</i> Gallery
            </a><br><br>
            <a href="gallerycontact.php" id="anchor4">
                <i class="material-icons" >call</i> Contact
            </a>       
        </nav>
    </center>
    </div>

    <div class="main">
        <center>
            <h2 style="position:relative; top:190px; text-shadow: 3px 3px 3px white; color:rgb(0, 41, 0);">WELCOME TO MY ARTGALLERY<BR></h2>
                <p style="position:relative; top:140px; text-shadow: 3px 3px 3px white;">@_blackandwhite_gallery</p>
            </center>
    </div>
</DIV>
<br><br><br><br>
<section class="sec">
    <center>
<aside>
    <h3>"Through the passage of time, art remains an everlasting source of inspiration."</h3>
    <a href="artexplore.php"><button>EXPLORE MY ARTWORKS <I class="material-icons" style="position: relative; top:7px;">east</I></button></a>
</aside>
</center>
</section>
<br><br>        
</body>
</html>