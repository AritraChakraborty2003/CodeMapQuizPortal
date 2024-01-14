<?php
    include "connDB.php";
    session_start();
    $language=$_POST["p"];
    $q=$_POST["q"];
    $op1=$_POST["op1"];
    $op2=$_POST["op2"];
    $op3=$_POST["op3"];
    $op4=$_POST["op4"];
    $c=$_POST["c"];
    $sql = "SELECT * FROM $language";
    $result = mysqli_query($conn, $sql);
    $id=mysqli_num_rows($result);
    $id=$id+1;
    
    $sql_insert3="INSERT INTO $language (`id`, `question`, `option1`,`option2`,`option3`,`option4`,`correct`)
    VALUES ($id,'$q','$op1','$op2','$op3','$op4','$c')";

    $result4=mysqli_query($conn,$sql_insert3);
    if(!$result4){
            echo "Data not added Successfully";
        } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="btnHolder" style="display: flex; justify-content: center; align-items: center; margin-top: 6vmin;">
               <button class="btn btn-primary"><a href="q_admin.php" style="color:white">Back</a></button>
</div>
<p style="text-align:center;font-size:7vmin;font-weight:bold;color:white">Welcome Admin</p>
     <div class="formContainer">
   
        <form action="q_response.php"  method="post" class="card">
        <p style="text-align:center;font-size:3vmin;font-weight:bold;color:white">Insert Participants!!!</p>
        <input type="p" name="p" id="p" class="p inp" placeholder="Enter programming Language (in small letter)..." required>
                   <input type="text" name="q" id="q" class="q inp" placeholder="Insert Question..." required>
                   <input type="text" name="op1" id="1" class="1 inp" placeholder="Insert option one..." required>
                   <input type="text" name="op2" id="2" class="2 inp" placeholder="Insert option two..." required>
                   <input type="text" name="op3" id="3" class="3 inp" placeholder="Insert option three..." required>
                   <input type="text" name="op4" id="4" class="4 inp" placeholder="Insert option four..." required>
                   <input type="text" name="c" id="c" class="c inp" placeholder="Insert correct..." required>
                   <div class="btnHolder" style="display: flex; justify-content: center; align-items: center; margin-top: 6vmin;">
                   <input type="submit" value="submit" class="btn btn-primary">

                   </form>
    </div>

                
     </div>
</body>
</html>


<style>



body{
    background-color: rgb(71, 161, 217);
    overflow-x:hidden;
}
.formContainer{
        width:100vw;
        height:90vh;
        display:flex;
        justify-content:center;
      
    }
    @media(max-width:800px){
    .card{
        width:80vmin;
        height:110vmin;
        margin-top:5vmin;
        border:3px solid  #3F4865  ;
        background-color: #3F4865  ;

    }
    .inp{
        width:95%;
        border-radius:3vmin;
        border-bottom: 1px solid white;
        margin-left: 0.85vmin;
        padding:2vmin;
        height: 10vmin;
        margin-top: 5vmin;
    }
}
@media(min-width:801px){
    .card{
        width:80vmin;
        height:110vmin;
        margin-top:5vmin;
        border:3px solid  #3F4865 ;
        background-color: #3F4865  ;

    }
    .inp{
        width:95%;
        border-radius:3vmin;
        border-bottom: 1px solid white;
        margin-left: 1vmin;
        padding:2vmin;
        height:7vmin;
        margin-top: 5vmin;
    }
    
}
 


</style>