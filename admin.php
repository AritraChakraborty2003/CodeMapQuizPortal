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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
     <p style="text-align:center;font-size:7vmin;font-weight:bold;color:white">Welcome Admin</p>
     <div class="formContainer">
        <form action="insert_data.php"  method="post" class="card">
        <input type="text" name="name" id="name" class="name inp" placeholder="Enter your name..." required>
                   <input type="text" name="password" id="password" class="password inp" placeholder="Enter your password..." required>
                   <div class="btnHolder" style="display: flex; justify-content: center; align-items: center; margin-top: 6vmin;">
                   <input type="submit" value="submit" class="btn btn-primary">
</div>
                </form>
     </div>
</body>
</html>
<style>
    body{
        overflow-x:hidden;
        background-color:skyblue;
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
        height:55vmin;
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
        height:40vmin;
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