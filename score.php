<?php
 
   session_start();
   
   $score=60;
   if($score>50){
      echo "";
      
   }
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
<div class="header container-fluid" style="height:15vmin;display:flex;justify-content:center">
       <img src="images/celeb.jpg" alt="" style="max-width:100%;max-height:100%; object-fit:contain">
       <p style="margin-top:5vmin; margin-left:3vmin; font-size:4.5vmin; font-weight:bold;letter-spacing: 0.15vmin;">It's Results Time</p>
       
</div>
<div class="container-fluid ">
<p style="text-align:center">( Don't get infleuenced by the results over self understanding )</p>
</div>



  <div class="container-fluid main" style="width:100vw;display:flex;justify-content:center;margin-top:15vmin">
   
      <div class="container-fluid" style="display:flex;justify-content:center;margin-top:4.5vmin">
         <div  style="height:35vmin;width:35vmin;margin-top:1vmin">"<?php if($score>50) echo '<img src="images/good.jpeg" style="max-width:100%; max-height:100% object-fit:contain">' ?>"
         </div>

         <div class="scoreText" style="width:65vmin;margin-left:3.5vmin">
            <p style="font-size:5.15vmin">Wow! <span id="category" style="font-weight:bold;font-size:5.25vmin">Aritra Chakraborty</span> <br>you scored <span id="category" style="font-weight:bold;font-size:5.25vmin">Good</span>  <br>your score is  <?php echo $score."/"."100";"" ?></p>
            <button class="btn-primary"><a style="color:white;text-decoration:none" href="LeaderBoard.php">Leaderboard</a></button>
            <p style="margin-top:2.5vmin">( Please check the the Leaderboard to checkout the topper list )</p>
         </div>
      </div>
   </div>


</body>


</html>
<style>
*{
   overflow-x:hidden;
}

</style>
