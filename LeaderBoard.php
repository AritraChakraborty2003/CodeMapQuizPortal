<?php
 include 'connDB.php' ;
 session_start();
 
 error_reporting(0);
 $marks=array();
 $sql = "SELECT score FROM leaderboard";
 $result = mysqli_query($conn, $sql);
 // Create an empty array 
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $marks.array_push($marks,$row["score"]);
    }
 } else {
    echo "0 results";
  }

  rsort($marks);

  $first_marks=$marks[0];
  $second_marks=$marks[1];
  $third_marks=$marks[2];
  $names_array=array();
  $uid_array=array();
  $college_array=array();
  $scores_array=array();
  $cnt=1;
  $time_array=array();
  $sql1 = "SELECT * FROM `leaderboard` ORDER BY `score` DESC";
  $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $names_array.array_push($names_array,$row1["name"]);
        $uid_array.array_push($uid_array,$row1["uid"]);
        $college_array.array_push($college_array,$row1["college"]);
        $time_array.array_push($time_array,$row1["time"]);
        $scores_array.array_push($scores_array,$row1["score"]);
    }
}
$uid_user=$_POST["uid"];
$details_array_user=array();
$rank_user=array_search($uid_user,$uid_array)+1;
$sql2 = "SELECT * FROM leaderboard WHERE uid='$uid_user'";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)){
        $details_array_user.array_push($details_array_user,$row2["name"]);
        //0
        $details_array_user.array_push($details_array_user,$row2["uid"]);
        //1
        $details_array_user.array_push($details_array_user,$row2["college"]);
        //2
        $details_array_user.array_push($details_array_user,$row2["time"]);
        //3
        $details_array_user.array_push($details_array_user,$row2["score"]);
        //4
    } 
}



 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="btnHolder" style="margin-top:2.5vmin;display:flex;justify-content:right;align-items:center;margin-right:3vmin">
           
           <button class="btn btn-primary"><a href="exit.php" style="color:white;text-decoration:none">Back</a></button>
           </div>
        

    <div class="container-fluid header">
        <p ><span class="LeaderboardText"  style="text-align: center;margin-left: 4vmin;">Quiz Portal Leaderboard</span></p>
    </div>
    <p style="margin-top: -5vmin;text-align: center; color: white;">( Top performers will get exciting prizes from TechHubBharat )</p>

    <div class="iconHolder">
            <div class="imageHolder" style="height: 17vmin; width: 17vmin; border-radius: 8.5vmin;">
                <img src="images/techhubbharat.jpeg" style="max-width:100%; max-height:100%; object-fit:contain; border-radius: 8.5vmin;">
            </div>
    </div>
    <div class="leaderboardContainer">
        <div class="cardHolder">
        <div class="container border card">
          
            <div class="details">
                <div class="prize">
                    <div class="border_first" style="float: right; height: 16vmin; width: 16vmin; margin-top: 1vmin;">
                        <img src="images/first.png" style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                </div>
                    <p class="text"><span id="name1" class="name"><?php echo $names_array[0];?></span>
                    <br>UID:&nbsp;<span id="uid1"><?php echo $uid_array[0]; ?></span>
                    <br>Score:&nbsp;<span id="score1"><?php echo $scores_array[0];?></span>
                    <br>College:&nbsp;<span id="clg1"><?php echo $college_array[0]; ?></span>
                    <br>Start time(in min):&nbsp;<span id="t1"><?php echo strval(number_format(((int)$time_array[0]/60),2))?></span>
                    </p>
            </div>
        </div>
        <div class="container border card">
            <div class="details">
                <div class="prize">
                    <div class="border_first" style="float: right; height: 16vmin; width: 16vmin; margin-top: 1vmin;">
                        <img src="images/second.png" style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                </div>
            <p class="text"><span id="name2" class="name"><?php echo $names_array[1];?></span>
                <br>UID:&nbsp;<span id="uid2"><?php echo $uid_array[1]; ?></span>
                <br>Score:&nbsp;<span id="score2"><?php echo $scores_array[1];?></span>
                <br>College:&nbsp;<span id="clg2"><?php echo $college_array[1]; ?></span>
                <br>Start time(in min):&nbsp;<span id="t1"><?php echo strval(number_format(((int)$time_array[1]/60),2))?></span>
                </p>
        </div>
        </div>
        <div class="container border card">
            <div class="details">
                <div class="prize">
                    <div class="border_first" style="float: right; height: 16vmin; width: 16vmin; margin-top: 1vmin;">
                        <img src="images/third.png" style="max-width:100%; max-height:100%; object-fit:contain;">
                    </div>
                </div>
            <p class="text"><span id="name3" class="name"><?php echo $names_array[2];?></span>
                <br>UID:&nbsp;<span id="uid3"><?php echo $uid_array[2]; ?></span>
                <br>Score:&nbsp;<span id="score3"><?php echo $scores_array[2];?></span>
                <br>College:&nbsp;<span id="clg3"><?php echo $college_array[2]; ?></span>
                <br>Start time(in min):&nbsp;<span id="t1"><?php echo strval(number_format(((int)$time_array[2]/60),2))?></span>
                </p>
            </div>
        </div>

        <p class="text1" style="margin-top: 2.5vmin;font-weight: bold;font-size: 4vmin;">Your Rank:</p>
        <div class="container border card">
            <div class="details">
                <div class="prize">
                    <div class="border_first" style="float: right; height: 16vmin; width: 16vmin; margin-top: 1vmin;">
                        <p style="color: white;font-size: 4.5vmin;font-weight: bold;">Rank:&nbsp;<?php echo $rank_user ?></p>
                    </div>
                </div>
            <p class="text"><span id="name4" class="name"><?php echo $details_array_user[0] ?></span>
                <br>UID:&nbsp;<span id="uid4"><?php echo $details_array_user[1] ?></span>
                <br>Score:&nbsp;<span id="score4"><?php echo $details_array_user[4] ?></span>
                <br>College:&nbsp;<span id="clg4"><?php echo $details_array_user[2] ?></span>
                <br>Start time(in min):&nbsp;<span id="t1"><?php echo strval(number_format(((int)$time_array[3]/60),2))?></span>   
            </p>
            </div>
        </div>
        </div>
    </div>

    
   
</body>
</html>

<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
body{
    background-color: rgb(71, 161, 217);
}
.header{
     display: flex;
     height:17vmin;
     margin-top: 1.5vmin;
     justify-content: center;
     align-items: center;
    }

@media(max-width:800px){
    .LeaderboardText{
        font-size: 5vmin;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    .card{
        
        margin-top: 3vmin;
        background-color: #3F4865  ;
        width: 97vw;border-radius:3vmin;
        padding: 2vmin;
    }
    .text1{
        font-size: 4vmin;
        color: white;
    }
    .text{
        color: white;
    }
    .text{
        color: white;
        font-size: 3vmin;
    }
    .name{
        font-weight: bold;
    }
    .leaderboardContainer{
    display: flex;
    
    height:97vh;
    justify-content: center;
    margin-top: 2.5vmin;
    
        }
        .iconHolder{
            height: 17vmin;
            display: flex;
            justify-content: center;
        }
}
@media(min-width:801px){
    .text{
        color: white;
        font-size: 3vmin;
    }
    .name{
        font-weight: bold;
        font-size:4vmin;
        letter-spacing:0.15vmin;
    }
    .LeaderboardText{
        font-size: 5vmin;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    .text1{
        font-size: 4vmin;
        color: white;
    }
    .card{
       
        margin-top: 3vmin; background-color: #3F4865  ;
        width:60vw;border-radius:3vmin;
        padding: 1.5vmin;
    }
    .leaderboardContainer{
        display: flex;
    
        height:97vh;
     justify-content: center;
  
}
.iconHolder{
            height: 17vmin;
            display: flex;
            justify-content: center;
        }
}
</style>
