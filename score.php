<?php
 
   session_start();
   
   $score=60;
   $score1=$_COOKIE["score_user"];

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
   
      <div class="container-fluid" style="overflow:hidden;display:flex;justify-content:center;margin-top:4.5vmin">
         <div  style="height:31vmin;width:27vmin;margin-top:1vmin;overflow:hidden">"<?php if($score1>=40 && $score1<=50) echo '<img src="images/average.png" style="max-width:100%; max-height:100%; object-fit:contain;">' ;
                                                                          elseif($score1>50) echo '<img src="images/good.jpeg" style="max-width:100%; max-height:100%; object-fit:contain;">';
                                                                          else echo '<img src="images/sad.png" style="max-width:100%; max-height:100%; object-fit:contain;">';?>"
         </div>

         <div class="scoreText" style="width:65vmin;margin-left:3.5vmin">
            <p style="font-size:5.15vmin"> 
            "<?php if($score1>=40 && $score1<=50) echo 'Hmmm...' ;
              elseif($score1>50) echo 'Wow!...';
              else echo 'oops!';?>"
            <span id="category" style="font-weight:bold;font-size:5.25vmin"><?php echo $_SESSION["uname"] ?></span> <br>you scored <span id="category" style="font-weight:bold;font-size:5.25vmin">
            "<?php if($score1>=40 && $score1<=50) echo 'Average' ;
              elseif($score1>50) echo 'Excellent';
              else echo 'Poor'; ?>" </span>  <br>your score is  <?php echo $score1."/"."100";"" ?></p>
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
