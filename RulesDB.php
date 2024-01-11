<?php 
     include 'connDB.php' ;
    session_start();
    if(isset($_SESSION['uname'])){
        echo "<script> location.href='quizpart.php'</script>";
    }
    else{
         $_SESSION["uname"]=$_POST["name"];
         $_SESSION["email"]=$_POST["email"];
         $_SESSION["lang"]=$_POST["fav_language"];
    }


   

    
    $uname=$_POST["name"];
    $email=$_POST["email"];
    $college=$_POST["college"];
    $branch=$_POST["branch"];
    $language=$_POST["fav_language"];

    $sql = "SELECT * FROM registration";
    $result = mysqli_query($conn, $sql);
    $prev_id= mysqli_num_rows($result);
    $id=$prev_id+1;


    $sql_insert="INSERT INTO registration (`id`, `name`, `email`,`college`,`branch`,`language`)
    VALUES ($id,'$uname','$email','$college','$branch','$language')";

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
    <title>Quiz Rules</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="headerDiv ">
     <div class="container-fluid headerText">
        <div class="header">   
        <h1>
                Rules
            </h1>
        </div>
    </div>
    <div class="slogan" style="display: flex; justify-content: center; align-items: center;">
        <span style="font-size: 2.5vmin;"> ( As a member of CodeMap its a request to follow the below rules for the Quiz Event) </span>
        </div>
    </div>
</div>

<div class="rulesContainer container-fluid " style="padding: 5vmin;">

    <div class="rulesBody" style=" box-shadow: 1px 2px 2px 3px; margin-top: 5vmin; padding-bottom: 3.5vmin;">

    <ol style="margin-top: 3.5vmin; font-size: 2.75vmin;">
        <li>&nbsp;&nbsp;  Please don't cheat from online resources and means</li>
        <li>&nbsp;&nbsp;  Plagiarism  is strictly prohibited</li>
        <li>&nbsp;&nbsp;  You have to complete the quiz within given time limit</li>
        <li>&nbsp;&nbsp;  Each Question carries 10 points</li>
        <li>&nbsp;&nbsp;  No negative marking</li>
        <li>&nbsp;&nbsp;  Please Visit the leaderboard after end of quiz</li>
        <li>&nbsp;&nbsp;  Please be in a place with a stable internet connection</li>
        <li>&nbsp;&nbsp;  Be in the top 3 to win Exciting prizes</li>
        <li>&nbsp;&nbsp;  If cheating or plagiarism found you may be terminated from CodeMap group</li>
        <li>&nbsp;&nbsp;  Please read questions properly</li>
    </ol>
    
</div>

</div>
<div class="btnHolder" style="margin-top: 3vmin;display: flex; justify-content: center; align-items: center;">
<button type="button" class="btn-primary" style="font-size:3vmin"><a href="quizpart.php" style="color:white;text-decoration:none">Let's Play</a></button>
</div>

</body>
</html>
<style>
    .headerText{
        height:15vmin;
        display:flex;
        justify-content:center;
        align-items: center;
    }
    .rulesContainer{
        display: flex;
        justify-content: center;
      
    }
    .rulesBody{
        width: 110vmin;
    }

</style>
