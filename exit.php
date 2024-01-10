<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
      <div class="cardContainer container-fluid border">
            <div class=" container-fluid card">
                  <div class="textHeader">
                     <p style="text-align: center;"><span style="font-weight: bold;" class="welcomeText">Welcome to</span> <br><span style="font-weight: bold;" class="platName">Geeks Stage</span> by <span style="font-weight: bold; " class="gName">CodeMap</span> 
                     <br> ( In association with <span style="font-weight: bold; letter-spacing: 0.10vmin;" class="companyName">TechHubBharat</span> )</p>
                  </div>
                  <form method="post" action="rulesDB.php">
                  <div class="inputFields">
                     <input type="text" name="name" id="name" class="name inp" placeholder="Enter your name...">
                     <input type="email" name="email" id="email" class="email inp" placeholder="Enter your email...">
                     <input type="text" name="college" id="college" class="college inp" placeholder="Enter your college...">
                     <input type="text" name="branch" id="branch" class="branch inp" placeholder="Enter your branch" >
                     <p style="margin-top: 3vmin;">Please choose your favourite programming Language
                        <br>
                     <input type="radio" id="C" name="fav_language" value="C">
                     <label for="C">C</label><br>
                     <input type="radio" id="Java" name="fav_language" value="Java">
                     <label for="Java">Java</label><br>
                     <input type="radio" id="C++" name="fav_language" value="C++">
                     <label for="C++">C++</label><br>
                     <input type="radio" id="python" name="fav_language" value="python">
                     <label for="python">python</label><br>
                     <input type="radio" id="frontend" name="fav_language" value="frontend">
                     <label for="frontend">Frontend</label><br>
                     <div class="btnHolder" style="display: flex; justify-content: center; align-items: center; margin-top: 3vmin;">
                     <input type="submit" value="submit" class="btn btn-primary">
                     </p>
                     </div>
                    </div>
                    </form>
            </div>
      </div>
</body>
</html>



<style>
    .cardContainer{
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card{
        width: 80vmin;
        box-shadow: 5px 3px 3px 5px;
     
    }
    .textHeader{
        margin-top: 3vmin;
    }
    .inputFields{
        padding: 3vmin;
    }

    .inp{
        width: 100%;

        margin-top: 2.5vmin;
        padding: 1.5vmin;
    }
    @media(min-width:800px){
    .welcomeText{
        font-size: 5vmin;
    }
    .gName{
        font-size: 2.75vmin;
    }
    .platName{
        font-size: 2.75vmin; 
    }
    .compName{
        font-size: 2.5vmin;
    }
}
@media(max-width:800px){
    .welcomeText{
        font-size: 7vmin;
    }
    .gName{
        font-size: 3.75vmin;
    }
    .platName{
        font-size: 3.75vmin; 
    }
    .compName{
        font-size: 3.5vmin;
    }
}


    
  
</style>