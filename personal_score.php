<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter UID</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="UIDBoxContainer border">
        <div class="UIDBox" style="padding: 1.75vmin;">
            <div class="textHeader" style="text-align: center;color:white;font-size: 5.5vmin;">
                Please Enter UID<br>
                <span style="text-align: center;font-size: 3vmin;">( Please enter UID to proceed for leaderboard )</span>
            </div>
            <form method="post" action="leaderboard.php">
            <input type="text" name="uid" id="uid" class="uid inp" placeholder="Enter your UID..." required>
            <button class="btn btn-primary"  type="submit" style="margin-left:3vmin;margin-top: 4.5vmin;">
              Leaderboard
             </button>  
         </form>
         </div>
    </div>
</body>
</html>

<style>
  body{
    background-color:rgb(71, 161, 217);
  }
  .UIDBoxContainer{
    width:100vw;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  .inp{
        width:95%;
        background-color: #3F4865;
        border-bottom: 1px solid white;
        margin-left: 2vmin;
    

        margin-top: 2vmin;
    }
    form{
      margin-top: 5vmin;
      height:35vmin;
     
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    }
    input[type="text"], input[type="password"],input[type="email"], textarea {
     border: none;
     color: white;
     padding: 1.5vmin;
    outline: none;
    border-bottom: 1px solid #ccc; /* You can adjust the color and thickness of the outline */
        }
  @media(min-width:801px){
     .UIDBox{
        height:80vmin;
        width:90vmin;
        background-color:#3F4865;
        border: 1px solid #3F4865;
     }
     
  }
  @media(max-width:800px){
     .UIDBox{
        height:80vmin;
        width:90vmin;
        background-color:#3F4865;
        border: 1px solid #3F4865;
     }
  }
</style>
