<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Barriecito|Parisienne">
    <title>Contact</title>
    <style>
        .nav{
            width:100%;
            height: 70px; 
            font-family: Pacifico;
            background-color: black;      
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
        body{
            /* background-image: url("/images/artgallery6.jpg");
            background-repeat: no-repeat;
            background-size: 100% 800px; */
            font-weight:100;
            background-color: black;
        }
    
        fieldset{
            background-image: linear-gradient(to top right, orange, rgb(218, 231, 38), orange);
            color:black;
            box-shadow: 4px 4px 8px silver;
            text-shadow: 4px 4px 8px orange;
            font-size: 25PX;
            font-family: Barriecito;
            width:450px;
            margin-left:420px;

        }
        
        input, textarea{
            font-size: 15px;
            font-family: Pacifico;
            font-weight: 1000;
            letter-spacing: 2px;
            background-image: linear-gradient(to bottom right, black, orange);
            color:white;
        }
        .button{
            padding:6px;
            background-image: linear-gradient(to right, yellow, gold, orange);
            border:3px solid yellow;
            color:black;
            box-shadow: 3px 3px 5px 4px grey;
            border-radius: 20px;
        }
        .button:hover{
            
            background-image: linear-gradient(to right, black, black);
            color:yellow;
            border-color:black;
            transform: scale(1.1, 1.1);
        }
        .scroll{
            animation: scrolling 10s infinite linear alternate;
        }
        @keyframes scrolling{
            0%{
                transform: translate(50%, 0%);
            }
            100%{
                transform: translate(-50%, 0%);
            }
        }
      .lasth1{
        color:white;
        font-family: Parisienne;
        position: relative;
        bottom: 90px;
        left:170px;
        font-size: 40px;
        animation: bump 1.5s infinite linear;
        
       }
       @keyframes bump{
        0%, 100%{
            transform: scale(1, 1);
            color:black;
        }
        50%{
            transform: scale(1, 1.1);
            color:white;
        }
       }

       .insta{
        padding-right:12px;
       }

       .logo{
        display: flex;
        margin-left:185px;
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
        <form name="myForm" onsubmit="return checkme()" method="post" action="gallerydatabase.php">
            <fieldset>
                <CENTER>
                <legend>Contact me</legend>
                <table>
                <tr><td>Your Name: </td><td>&nbsp</td><td><input type="text" name="name"size="30px"></td></tr>
                <tr><td>Your Email ID:</td><td>&nbsp</td><td><input type="email" name="email" size="30px"></td></tr>
                <tr><td>Your Message:</td><td>&nbsp</td><td><textarea name="message" rows="4" cols="31"></textarea></td></tr>
                </table>
                <input type="reset" value="CLEAR" class="button">
               <input type="submit" value="SUBMIT" class="button">               
            </CENTER> 
            <br>
            <div class="logo">
                <a href="https://www.instagram.com/_blackandwhite_gallery/">
                    <img src="images\instanew.jpg" height="35px" width="35px" class="insta"></a>
                <a href="mailto: sharmilaguna27@gmail.com"><img src="images\new gmail.jpg" height="35px" width="35px"></a>
            </div>  
            
    </fieldset>
    </form>      
        <div class="scroll">
        <img src="images\Daco_3530281.png" height="70px" width="700px" >
        <h1 class="lasth1">Thank You!</h1>
        </div>

        <script>
         function checkme() {
    let pname = document.myForm.name.value;
    let pmail = document.myForm.email.value;
    let pmsg = document.myForm.message.value;
    
    if (pname === "") {
        alert("Please enter your name!");
        return false;
    } else if (pmail === "") {
        alert("Please enter your Email ID!");
        return false;
    } else if (pmsg === "") {
       alert( "Please type your message!");
        return false;
    }
}

        </script>
        
        
    

<!-- <script>

    document.getElementById("myForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form values
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Construct the mailto link with subject and body
        var subject = encodeURIComponent("Message from " + name);
        var body = encodeURIComponent("Name: " + name + "\nEmail: " + email + "\n\nMessage:\n" + message);

        // Create the mailto link
        var mailtoLink = "mailto:someone@example.com" + "?subject=" + subject + "&body=" + body;

        // Open the user's default email client
        window.location.href = mailtoLink;
    });

    

</script> -->
</body>
</html>