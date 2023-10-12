<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Barriecito|Parisienne">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
     .nav{
            width:100%;
            height: 70px;
            font-family: Pacifico;
            background-color: black;
            
        }
        .nav H1{
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
        }
        a:hover{
            color:white;
            text-shadow: 4px 4px 4px whitesmoke;
        }
        body{
            background-color: black;
        }

        .grids{
            display:grid;
            grid-template-columns: auto auto auto auto;
            padding:25px 0px 25px 25px;
            width:1100px;
            grid-gap:20px;
            background-color: orange;

        }
        .grids div{
            border:2px solid black;
            height:200px;
            width:220px;
            position: relative;
            transition: transform 0.8s linear; 
            
        }
        .grids div:hover{
            transform: scale(1.8, 2);
            z-index: 1;
        }
       

    </style>
    </head>

<body id="clickymain">
    <div class="nav">
        <H1><i class="material-icons" style="font-size: 45px; position: relative; top:10px; color:orange;">palette</i> MY ART <SPAN style="color:orange;">GALLERY</SPAN></H1>
        <nav style="float: right; position:relative; bottom:68px;">
            <a href="galleryhome.php" >HOME</a>
            <a href="galleryabout.php" style="padding:50px 60px 0px 60px">ABOUT</a>
            <a href="gallerymain.php" style="padding-right:60px">GALLERY</a>
            <a href="gallerycontact.php" style="padding-right:60px">CONTACT</a>
        </nav>        
        </div> 
        <br><br><br><br><br><br>
        <center>
        
    <div class="grids" id="clicky">
        <div><img src="images\myart12.jpg" height="200px" width="220px"  onmouseover="func1()" onmouseout="func2()" ></div>
        <div><img src="images\myart25.jpg" height="200px" width="220px"  onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart30.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart28.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart29.jpg" height="200px" width="220px"  onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart14.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart2.jpg" height="200px" width="220px"  onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart23.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart22.jpg" height="200px" width="220px"  onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart10.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart21.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart20.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart3.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart29.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart5.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart7.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart9.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart8.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart4.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart13.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart27.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart6.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
        <div><img src="images\myart1.jpg" height="200px" width="220px" onmouseover="func1()" onmouseout="func2()"></div>
        <div><img src="images\myart2.jpg" height="200px" width="220px" onmouseout="func1()" onmouseover="func2()"></div>
    </div>
</center>
    <br><br>
   <script>
    
    function func1(value){
        document.getElementById('clicky').style.backgroundImage="linear-gradient(to right, lightyellow, orange)";
    }
    function func2(){
        document.getElementById('clicky').style.backgroundImage="linear-gradient(to left, navy, orange)";
    }
    function func3(){

    }
   
   </script>
    
</body>
</html>