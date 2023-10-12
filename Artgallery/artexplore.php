<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artgalleryexplore</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Barriecito|Parisienne">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
                transform: scale(0.7, 0.7);
                color:white;
            }
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

     .entry{
            width:100%;
            height:450px;
            font-size: 45px;
            background-color: white;
            font-family: Parisienne;
        }
        .grids{
            display: grid;
            grid-template-columns: auto auto auto auto;
            background-image: linear-gradient(to right, black, black );
            /* background-image: linear-gradient(to bottom right, grey, black, white, grey, black, grey); */
            /* border:2px double whitesmoke; */
            outline:2px solid black;
            padding:20px;
            grid-row-gap:20px;
            position: relative;
            bottom:20px;
        }
        .grids2{
            display: grid;
            grid-template-columns: auto auto auto auto;
            /* grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); */
            background-image: linear-gradient(to right, black, black );
            /* outline:2px solid black; */
            padding:20px;
            grid-row-gap:20px;
        }
        .grids div{
            height:250px;width:290px;
            /* border:2px double white; */
        }
        .grids2 div{
            height:250px;width:290px;
        }
        .merge1{
            grid-area:1/1/2/3;
        }
        .merge2{
            grid-area:1/3/3/5;
        }
        .merge3{
            grid-area:3/1/5/3;
        }
        .merge4{
            grid-area:3/3/5/4;
        }
        .merge5{
            grid-area:3/4/4/5;
        }
        .merge6{
            grid-area:5/1/6/3;
        }
        .grids img{
            border:5px solid silver;
        }
        .grids2 img{
            border: 5px solid silver;
        }
        .portraits{
            /* border:2px solid blue; */
            height: 355px;
            width:85%;
            background-color: black;
            color:silver;
        }
        body{
            background-color: black;
        }
</style>
</head>
<body>
    
</body>
<div class="nav">
    <H1><i class="material-icons" style="font-size: 45px; position: relative; top:10px; color:orange;">palette</i> MY ART <SPAN style="color:orange;">GALLERY</SPAN></H1>
    <nav style="float: right; position:relative; bottom:68px;">
        <a href="galleryhome.php" >HOME</a>
        <a href="galleryabout.php" style="padding:50px 60px 0px 60px">ABOUT</a>
        <a href="gallerymain.php" style="padding-right:60px">GALLERY</a>
        <a href="gallerycontact.php" style="padding-right:60px">CONTACT</a>
    </nav>        
    </div>

    <div class="entry" style="display:flex; align-items: center;justify-content: center; background-image: url(artgallerybgg.jpg); background-repeat: no-repeat; background-size: 100%, 450px;">
        <div class="portraits" >
            <center><h1 style="position: relative; bottom:49px; color:goldenrod;">Pencil Sketches</h1>
                <span style="font-size: 35px; position:relative; bottom:145px; color:goldenrod;">@_blackandwhite_gallery</span>
                <h6 style="position:relative; bottom:190px; letter-spacing: 2px;padding:0px 10px 0px 10px; font-size: 31px; color:silver;" >Welcome to the Pencil Sketching Gallery, where the timeless beauty of graphite on paper comes to life.<br>
                    Pencil sketches reflect the depth of human expression and the boundless creativity of artists.</h6></center>
        </div>
    </div>
    <br><br><br><br>

    <div class="grids">
        <div class="merge1"><img src="images\myart14.jpg" height="250px" width="600px"></div>
        <div class="merge2"><img src="images\myart8.jpg" height="520px" width="600px"></div>
        <div><img src="images\myart21.jpg" height="250px" width="290px"></div>
        <div><img src="images\myart11.jpg" height="250px" width="290px"></div>
        <div class="merge3"><img src="images\myart28.jpg" height="520px" width="600px"></div>                       
        <div class="merge4"><img src="images\myart10.jpg" height="520px" width="290px"></div>
        <div class="merge5"><img src="images\myart25.jpg" height="250px" width="290px"></div>   
        <div><img src="images\myart26.jpg" height="250px" width="290px"></div>
        <div class="merge6"><img src="images\myart7.jpg" height="250px" width="600px"></div>
        <div><img src="images\myart3.jpg" height="250px" width="600px"></div>                
    </div>
    <br><br><br><br>
    <div class="entry" style="color:silver; background-image: url(brushpot.jpg); background-repeat: no-repeat; background-size: 100%, 450px;">
    <center><h1 style="color:goldenrod;">Paintings</h1>
    <span style="font-size: 35px; position:relative; bottom:80px; color:goldenrod;">@_blackandwhite_gallery</span>
    <h6 style="position:relative; bottom:100px; letter-spacing: 2px;" >Welcome to the Gallery of Paintings. Explore this vibrant world of pigments and brushstrokes, where every canvas is a story waiting to be told and every stroke of paint is a brush with inspiration.</h6></center>
    <!-- <img src="/images/artgallery3.jpg" height="120px" width="100%" style="position:relative; bottom:160px;"> -->
    </div>
    <br><br><br><br>
    <div class="grids2">
        <div class="merge1"><img src="images\myart30.jpg" height="520px" width="600px"></div>
        <div class="merge2"><img src="images\myart5.jpg" height="520px" width="600px"></div>
        <div></div>
        <div></div>
        <div class="merge3"><img src="images\myart12.jpg" height="520px" width="600px"></div>                       
        <div class="merge4"><img src="images\myart23.jpg" height="520px" width="290px"></div>
        <div class="merge5"><img src="images\myart22.jpg" height="520px" width="290px"></div>   
        <div></div>
        <div class="merge6"><img src="images\myart2.jpg" height="250px" width="600px"></div>
        <div><img src="images\myart6.jpg" height="250px" width="600px"></div>
    </div>
    <br><br><br><br>
    <div class="entry" style="display:flex; align-items: center;justify-content: center; background-image: url(bgg5.jpg); background-repeat: no-repeat; background-size: 100%, 450px;">
        <div class="portraits">
            <center><h1 style="position: relative; bottom:49px; color:goldenrod;">Portraits</h1>
                <span style="font-size: 35px; position:relative; bottom:145px; color:goldenrod;">@_blackandwhite_gallery</span>
                <h6 style="position:relative; bottom:190px; letter-spacing: 2px; font-size: 31px;" >Immerse yourself in the world of portraiture, 
                    where every stroke of the brush or pencil captures the beauty and complexity of the human spirit. 
                    Join us in celebrating the art of seeing, the art of knowing, 
                    and the art of portraying the many faces of humanity.</h6></center>
        </div>
    </div>
    <br><br><br><br>
    <div class="grids2">
        <div class="merge1"><img src="images\myart27.jpg" height="520px" width="600px"></div>
        <div class="merge2"><img src="images\myart29.jpg" height="520px" width="600px"></div>
        <div></div>
        <div></div>
        <div class="merge3"><img src="images\myart4.jpg" height="520px" width="600px"></div>                       
        <div class="merge4"><img src="images\myart1.jpg" height="520px" width="290px"></div>
        <div class="merge5"><img src="images\myart20.jpg" height="520px" width="290px"></div>   
        <div></div>
        <div class="merge6"><img src="images\myart13.jpg" height="290px" width="600px"></div>
        <div><img src="images\myart9.jpg" height="290px" width="600px"></div>
    </div>
    <br><br><br><br>
</html>