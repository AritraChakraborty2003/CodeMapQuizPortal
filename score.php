<?php
    include 'connDB.php' ;
   session_start();
   
   error_reporting(0);
   $score1=$_COOKIE["score_user"];
   $time=$_COOKIE["timeStore"];
   $name=$_SESSION["uname"];
   $email=$_SESSION["email"];
   $college=$_SESSION["college"];
   $uid=$_SESSION["uid"];
   
    $sql_insert="INSERT INTO leaderboard (`uid`, `name`, `email`,`college`,`score`,`time`)
    VALUES ('$uid','$name','$email','$college','$score1','$time')";

    $result=mysqli_query($conn,$sql_insert);
    if(!$result){
        echo "Data not added Successfully";
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
<div class="header container-fluid" style="display:flex;justify-content:center">
   <div class="imageHolder" style="height:15vmin;">
   <img src="images/celeb.png" alt="" style="max-width:100%;max-height:100%; object-fit:contain">
   </div>    
   <p style="margin-top:5vmin; margin-left:3vmin; font-size:5vmin; font-weight:bolder;letter-spacing: 0.15vmin;">It's Results Time</p>
       
</div>


<div class="container-fluid ">
<p style="text-align:center" style="font-weight:bold">( Don't get infleuenced by the results over self understanding )</p>
</div>

<div class="container-fluid codeMapLogo">
<div class="imageHolderLogo">
   <img src="images/codemap.jpeg" style="max-width:100%; max-height:100%; object-fit:contain">
</div>
</div>

  <div class="container-fluid main" style="display:flex;justify-content:center;">
   
      <div class="container-fluid" style="overflow:hidden;display:flex;flex-wrap:wrap;justify-content:center;margin-top:4.5vmin">
         <div class="imageContainerDiv" style="width:70vmin; display:flex; justify-content:center; align-tems:center">
         <div class="imageDiv" style="height:37vmin;width:37vmin;margin-top:0.5vmin;overflow:hidden"><?php if($score1>=40 && $score1<=50) echo '<img src="images/average.png" style="max-width:100%; max-height:100%; object-fit:contain;">' ;
                                                                          elseif($score1>50) echo '<img src="images/good.png" style="max-width:100%; max-height:100%; object-fit:contain;">';
                                                                          else echo '<img src="images/sad.png" style="max-width:100%; max-height:100%; object-fit:contain;">';?>
         </div>
</div>
         <div class="scoreText" style="width:80vmin;margin-left:3.5vmin">
            <p class="appText" style="font-size:5.15vmin"> 
            "<?php if($score1>=40 && $score1<=50) echo 'Hmmm...' ;
              elseif($score1>50) echo 'Wow!...';
              else echo 'oops!';?>"
            <span id="category" style="font-weight:bold;font-size:5.25vmin"><?php echo $_SESSION["uname"] ?></span> <br>you scored <span id="category" style="font-weight:bold;font-size:5.25vmin">
            "<?php if($score1>=40 && $score1<=50) echo 'Average' ;
              elseif($score1>50) echo 'Excellent';
              else echo 'Poor'; ?>" </span>  <br>your score is  <?php echo $score1."/"."100";"" ?></p>
            <div class="btnHolder" style="display:flex;justify-content:center;align-items:center">
           
            <button class="btn btn-primary"><a href="waiting.php" style="color:white;text-decoration:none">Leaderboard</a></button>
            </div>
            <p style="margin-top:3vmin">( Please check the the Leaderboard to checkout the topper list )</p>
         </div>
      </div>
   </div>


</body>


</html>
<style>
*{
   margin:0;
   padding: 0;
   box-sizing:border-box;
   overflow-x:hidden;
}
body{
   background-color: rgb(71, 161, 217);
   color:white; 
}
.main{
   background-color: #343438;
}
@media(max-width:800px){
   .scoreText{
       padding-left:4.5vmin;
   }
   .btn{
      font-size:3.75vmin;
   }
   .main{
      width: 95vmin;
      margin-top:4.5vmin;
      border-radius:3vmin;
      padding: 2vmin;
   }
   .codeMapLogo{
      height:20vmin;
      margin-top:3vmin;
      display:flex;
      justify-content:center;
      align-items:center;
   }
   .imageHolderLogo{
      height:20vmin;
      width:20vmin;
      border:1px solid white;
      border-radius:10vmin;
   }
}
@media (min-width:801px) and (max-width:1281px){
   .scoreText{
       padding-left:4.5vmin;
       border:1px solid #343438;
   }
   .main{
      width: 95vw;
      border:1px solid #343438;
      border-radius:3vmin;
      margin-top:3.5vmin;
      
      padding-left:3vmin;
   }
   .codeMapLogo{
      height:15vmin;
      margin-top:1vmin;
      display:flex;
      justify-content:center;
      align-items:center;
      overflow:hidden;
   }
   .imageHolderLogo{
      height:15vmin;
      width:15vmin;
      border:1px solid white;
      border-radius:7.5vmin;
   }
   
}
@media(min-width:1282px){
   .scoreText{
       padding-left:4.5vmin;
       border:1px solid #343438;
   }
   .main{
      width: 74vw;
      border:1px solid #343438;
      border-radius:3vmin;
      margin-top:3.5vmin;
   }
   .btn{
      font-size:3vmin;
   }
   .codeMapLogo{
      height:15vmin;
      margin-top:1vmin;
      display:flex;
      justify-content:center;
      align-items:center;
      overflow:hidden;
   }
   .imageHolderLogo{
      height:15vmin;
      width:15vmin;
      border:1px solid white;
      border-radius:7.5vmin;
   }
}

</style>
