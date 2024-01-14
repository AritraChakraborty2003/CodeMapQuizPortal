<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

    <div class="waitBoxContainer border">
        <div class="waitBox">
            <div class="textBox">
            <p class="header pa">Geek's Stage</p>
            <p class="slogan pa">Welcome to The Quiz Leaderboard</p>
            <p class="info pa">The Leaderbord opens in below (mins.)</p>
        </div>

        <div class="timerContainer" style="display: flex;justify-content: center;height:17vmin;margin-top: 4vmin;">
                <div class="timeBox" style="display: flex; justify-content: center; align-items: center;height:17vmin;width:17vmin; border: 5px solid white;border-radius: 8.5vmin;">
                        <p id="timerBox">calc</p>
                </div>
        </div>
        <div class="btnHolder" style="margin-top:2.5vmin;display:flex;justify-content:center;align-items:center">
           
           <button class="btn btn-primary"><a href="exit.php" style="color:white;text-decoration:none">Back</a></button>
           </div>
        </div>
    </div>
    
</body>
<script>

let checkcall=setInterval(() => {
            
            if(date1.getMinutes()>=58){
                location.href='personal_score.php';
            }

            if(date1.getMinutes()<58){
                location.href='exit.php';
            }
       }, 100);
const timer=document.getElementById("timerBox");

const date1 = new Date();
var time=26-date1.getMinutes();
timer.innerHTML=time;
function timeHandler(){
   time--;
   timer.innerHTML=time;
   if(date1.getMinutes()>=42){
        location.href='personal_score.php';
   }    
   if(time==0){
        location.href='personal_score.php';
   }

  }


       let timeCall=setInterval(timeHandler,60000);
     
     
</script>
</html>
<style>
    body{
        background-color:rgb(71, 161, 217) ;
    }
    .waitBoxContainer{
        display:flex;
        height:100vh; width:100vw;
        justify-content: center;
        align-items:center;
    }
    .waitBox{
        background-color: #3F4865;
        border: 1px solid #3F4865 ;
        
        padding-bottom:3vmin;
        width:85vmin;
        border-radius:3vmin;
    }
    .pa{
        color: white;
        font-size: 3.5vmin;
    }
    .header{
        font-weight: bold;
    }
    .textBox{
        display: flex;
        margin-top: 1vmin;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #timerBox{
        color:white;
        font-size: 4vmin;
    }
    
    </style>