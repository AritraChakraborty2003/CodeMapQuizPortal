<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container-fluid formHolder">
        <div class="card">
            <p class="WelcomeHeader">Welcome To<br>
               <span class="sloganHeader">Geek's Stage</span></p>
               <form method="post" action="rulesDB.php">
                <div class="inputFields">
                   <input type="text" name="name" id="name" class="name inp" placeholder="Enter your name..." required>
                   <input type="email" name="email" id="email" class="email inp" placeholder="Enter your email..." required>
                   <input type="text" name="college" id="college" class="college inp" placeholder="Enter your college..." required>
                     <input type="text" name="uid" id="uid" class="uid inp" placeholder="Enter your uid..." required>
                   <div class="languageSelection">
                   <p style="margin-top: 3vmin;">Please choose your favourite programming Language
                      <br>
                    <div class="radioInput">
                   <input type="radio" id="C" name="fav_language" value="c" checked>
                   <label for="C">C</label><br>
                   <input type="radio" id="Java" name="fav_language" value="java">
                   <label for="Java">Java</label><br>
                   <input type="radio" id="C++" name="fav_language" value="cplusplus">
                   <label for="C++">C++</label><br>
                   <input type="radio" id="python" name="fav_language" value="python">
                   <label for="python">python</label><br>
                   <input type="radio" id="frontend" name="fav_language" value="frontend">
                   <label for="frontend">Frontend</label><br>
                   <div class="btnHolder" style="display: flex; justify-content: center; align-items: center; margin-top: 3vmin;">
                   <input type="submit" value="submit" class="btn btn-primary">
                   <button class="btn btn-primary" style="margin-left:3vmin">
                     <a href="waiting.php" style="color:white;text-decoration:none">Leaderboard</a>
                   </button>
                     </p>
                   

                  
                   
                   </p>
                   </div>
                  </div>
                
                  </form>
                  </div>
                  </div>
            </div>
    </div>  
</body>
</html>
<style>
    body{
        background-color: rgb(71, 161, 217);
    }
    .formHolder{
        height:100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      
    }
    @media(min-width:801px){
    .card{
        padding-bottom: 2.5vmin;
        width:73vmin;
        background-color: #343438;
        border:1px solid rgb(37, 35, 35);
        border-radius: 1vmin;
        opacity: 0.90;
    }
    .WelcomeHeader{
        color: white;
        font-size: 5.5vmin;
        text-align: center;
    }
    .sloganHeader{
        color: white;
        font-size: 5.65vmin;
        font-weight: bold;
        text-align: center;
    }
    .inp{
        width:95%;
        background-color: #343438;
        border-bottom: 1px solid white;
        margin-left: 2vmin;
    

        margin-top: 2vmin;
    }
    input[type="text"], input[type="password"],input[type="email"], textarea {
     border: none;
     color: white;
    outline: none;
    border-bottom: 1px solid #ccc; /* You can adjust the color and thickness of the outline */
        }
    .languageSelection{
        font-size: 2.7vmin;
        margin-left: 1.75vmin;
        color: white;
    }
    }

    @media(max-width:800px){
        .WelcomeHeader{
        color: white;
        font-size: 6.5vmin;
        text-align: center;
         }
        .card{
        padding-bottom: 2.5vmin;
        width:90vmin;
        background-color:#343438 ;
        border:1px solid rgb(37, 36, 36);
        border-radius: 5vmin;
        opacity: 0.90;
        }
        .WelcomeHeader{
        color: white;
        font-size: 7vmin;
        margin-top: 3vmin;
        text-align: center;
    }
    .sloganHeader{
        color: white;
        font-size: 7.5vmin;
        font-weight: bold;
        text-align: center;
    }
    .inp{
        width:95%;
        background-color: #343438;
        border-bottom: 1px solid white;
        margin-left: 2vmin;
    

        
    }
    input[type="text"], input[type="password"],input[type="email"], textarea {
      border: none;
       color: white;
       margin-top: 4.25vmin;
        outline: none;
        border-bottom: 1px solid #ccc; /* You can adjust the color and thickness of the outline */
        }
    .languageSelection{
        font-size: 4vmin;
        margin-left: 1.75vmin;
        color: white;
    }
    .radioInput{
        margin-top: 1.45vmin;
    }

    }
</style>