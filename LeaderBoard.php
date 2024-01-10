<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="textHeader container ">
            <p class="headerLogoText">Leaderboard</p>
            
        </div>
        <div class="sloganHeader container">
            <div class="sloganHeaderText">( The top performers will get exciting awards from TechHubBharat )</div>
        </div>
        <div class="iconHolder container">
            <div class="imageHolder ">
                <img src="images/techhubbharat.jpeg" style="max-width: 100%; max-height: 100%; object-fit: contain;">
            </div>
        </div>
    </div>

    <div class="container leaderBoardBody ">

        <div class="box container">
            <p style="float: right;margin-right: 3.5vmin; font-size: 3.5vmin;margin-top: 2.5vmin; font-weight: bold;">1st</p>
            <p id="1st" style="margin-top: 1vmin;font-size: 4vmin;font-weight: bold;">Abhishek Kr. Pandey<br>
            <span id="1st_email" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">pandyabhi0801@gmail.com
            </span><br>
            <span id="1st_college" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">IIMT college of Engineering
            </span></p>
        </div>
        <div class="box container">
            <p style="float: right;margin-right: 3.5vmin; font-size: 3.5vmin;margin-top: 2.5vmin; font-weight: bold;">2nd</p>
            <p id="2nd" style="margin-top: 1vmin;font-size: 4vmin;font-weight: bold;">Anish Gupta<br>
            <span  id="2nd_email" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">gputaAnish123@gmail.com
            </span><br>
            <span id="2nd_college" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">IIMT college of Engineering
            </span></p>
        </div>
        <div class="box container">
            <p  style="float: right;margin-right: 3.5vmin; font-size: 3.5vmin;margin-top: 2.5vmin; font-weight: bold;">3rd</p>
            <p id="3rd" style="margin-top: 1vmin;font-size: 4vmin;font-weight: bold;">Manas Chopra<br>
            <span id="3rd_email" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">chopramanas123@gmail.com
            </span><br>
            <span id="3rd_college" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">KCC College of Engineering</span>
            </span></p>
        </div>
        <p style="margin-top: 5vmin; margin-left: 1.75vmin;font-weight: bold; font-size: 3.5vmin;">Your Position:</p>
        <div class="box container ">
            <p style="float: right;margin-right: 3.5vmin; font-size: 3.5vmin;margin-top: 2.5vmin; font-weight: bold;">1st</p>
            <p id="user" style="margin-top: 1vmin;font-size: 4vmin;font-weight: bold;">Abhishek Kr. Pandey<br>
            <span id="user_email" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">pandyabhi0801@gmail.com
            </span><br>
            <span id="user_college" style="margin-top: 1vmin;font-size: 2.5vmin;font-weight: 400;">IIMT college of Engineering
            </span></p>
        </div>
    </div>
</body>
</html>
<style>
   .textHeader{
        height:15vmin;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 6vmin;
        font-weight: bold;
   }
   .sloganHeader{
      height: 5vmin;
      display: flex;
      justify-content: center;
      align-items: center;
   }
   .iconHolder{
     height:20vmin;
     display: flex;
     justify-content: center;

   }
   .imageHolder{
      height: 20vmin;
      width: 25vmin;
   }
   .box{
     border-bottom: 1.5px solid black;
   }
   
   @media(max-width:800px){
     .sloganHeader{
        font-size: 3vmin;
     }
     .box{
        height: 20vmin;
        width:90%;
        margin-top: 2vmin;
   }
   }
   @media(min-width:801px){
    
     .box{
        height: 20vmin;
        width:65%;
        margin-top: 2vmin;
   }
   }
</style>