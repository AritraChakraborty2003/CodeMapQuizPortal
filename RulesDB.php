<?php 
    include 'connDB.php' ;
   
    $uid1=$_POST["uid"];
    $email1=$_POST["email"];
    $sql1 = "SELECT * FROM registration WHERE uid='$uid1'";
    $sql2= "SELECT * FROM participants WHERE uid='$uid1' and email='$email1'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result1)>0) {
        echo "<script> location.href='index.php'</script>";
    }
    elseif (mysqli_num_rows($result2)==0) {
        echo "<script> location.href='index.php'</script>";
    }
    else{
    session_start();
   

    if(isset($_SESSION['uname'])){
        echo "<script> location.href='quizpart.php'</script>";
    }
    else{
         $_SESSION["uname"]=$_POST["name"];
         $_SESSION["email"]=$_POST["email"];
         $_SESSION["college"]=$_POST["college"];
         $_SESSION["lang"]=$_POST["fav_language"];
         $_SESSION["uid"]=$_POST["uid"];
    }


   

    
    $uname=$_POST["name"];
    $email=$_POST["email"];
    $college=$_POST["college"];
    $uid=$_POST["uid"];
    $language=$_POST["fav_language"];

    $sql = "SELECT * FROM registration";
    $result = mysqli_query($conn, $sql);
    $prev_id= mysqli_num_rows($result);
    $id=$prev_id+1;


    $sql_insert="INSERT INTO registration (`id`, `name`, `email`,`college`,`uid`,`language`)
    VALUES ($id,'$uname','$email','$college','$uid','$language')";

    $result=mysqli_query($conn,$sql_insert);
    if(!$result){
        echo "Data not added Successfully";
    }   
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rules</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
        <div class="rulesContainer">
            <div class="rulesCard">
                <div class="header">
                    <p class="headerText" style="text-align: center; color: white;">Rules</p>
                </div>
                <div class="rulesBody" style="margin-top: -1vmin; padding-bottom: 3vmin;">
                     <ol>
                        <li>As a valued member of codemap please don't be involved in any kind of cheating or plagiarism</li>
                        <li class="gap">All questions carry 10 marks</li>
                        <li class="gap">No negative marking on wrong answers</li>
                        <li class="gap">Questions will automatically change after 30 seconds</li>
                        <li class="gap">The score will be declared after the end of all 10 questions</li>
                        <li class="gap">The users will be able to show leaderboard after the end of contest</li>
                        <li class="gap">Top 3 users will get exciting prizes and certificates</li>
                        <li class="gap">Don't be involved in any type of malpractice</li>
                        <li class="gap">Please be seated in a place where there is a stable internet connection</li>
                        <li class="gap">Please read the questions carefully</li>
                     </ol>

                     <div class="btnHolder" style="margin-top: 1vmin;display: flex; justify-content: center;align-items: center;" >
                        <button type="button" class="btn-primary"><a href="quizpart.php" style="color:white;text-decoration:none;">Let's Play</a></button>
                     </div>
                </div>
            </div>
        </div>
    
</body>
</html>

<style>
    body{
        overflow: hidden;
        background-color:rgb(71, 161, 217) ;
    }
    .rulesContainer{
        height:100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    @media(max-width:800px){
    .rulesCard{
      

        background-color: #343438;
        width:95vmin;
        border:1px solid #343438;
	border-radius:3vmin;
        
    }
    .headerText{
        font-size: 7vmin;
    }
    ol li{
        font-size: 4vmin;
        margin-top: 1vmin;
        color: white;
    }
}
@media(min-width:801px){
    .headerText{
        font-size:6.5vmin;
    }
    .rulesCard{
       

        background-color: #343438;
        width:125vmin;
	
        border:1px solid #343438;
	border-radius:3.5vmin;
        
    }
  
    ol li{
        font-size: 3vmin;
      
        color: white;
    }
    .gap{
        margin-top: 1.5vmin;
    }
}


</style>