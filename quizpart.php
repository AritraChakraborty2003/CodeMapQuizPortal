<?php
   include 'connDB.php' ;
   error_reporting(0);
   session_start();
   $language=$_SESSION["lang"];
   $questionArray=array(); 
   $option1Array=array();
   $option2Array=array();
   $option3Array=array();

   $option4Array=array();
   $correctArray=array();
    $sql = "SELECT * FROM $language";
    $result = mysqli_query($conn, $sql);
    // Create an empty array 
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
             $questionArray.array_push($questionArray,$row["question"]);
             $option1Array.array_push($option1Array,$row["option1"]);
             $option2Array.array_push($option2Array,$row["option2"]);
             $option3Array.array_push($option3Array,$row["option3"]);
             $option4Array.array_push($option4Array,$row["option4"]);
             $correctArray.array_push($correctArray,$row["correct"]);
        }
      } else {
        echo "0 results";
      }
     
      mysqli_close($conn);
 

    
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
  
 <div class="backContainer">
    
    <div class="background container">
        <div class="timerContainer" style="display: flex; justify-content:center;;">
            <div class="borderTimer" style="border: 4px solid white;">
                    <p class="timeText"  id="timer">25</p>
            </div>
        </div>
        <div class="row" style="margin-top: 3vmin;">
        <div class="first col-lg-6 ">
            <div class="text">
                <p class="questHeader" style="margin-left:2vmin;">Question <span id="qno">1</span>/10</p> 
            </div>
            <div class="question">
                <p id="questionInput" >What invented Python ?</p>
                
            </div>
         </div>
         <div class="second col-lg-6 ">

                  <div class="container optionHolder" style="  padding-bottom: 4vmin;height: 100%;display: flex;  align-items: center ;flex-direction: column;">

                       <div class="option1 opt"> 
                        
                <input type="radio" id="opt_1" name="ans" value="a">
                <label id="opt1" for="opt" class="optx" style="">Guido Von Rossum</label>
                       </div>
                       <div class="option2 opt">      <input type="radio" id="opt_2" name="ans" value="b">
                        <label id="opt2" for="opt_2"  class="optx"style="">Tim Berners Lee</label>
                        </div>
                       <div class="option3 opt"> 
                              
                <input type="radio" id="opt_3" name="ans" value="c">
                <label id="opt3" for="opt_3" class="optx" style="">Brian Keringham</label>
                       </div>
                       <div class="option4 opt"> 
                        <input type="radio" id="opt_4" name="ans" value="d">
                <label id="opt4" for="opt_4" class="optx" style="">James Gosling</label>
                    </div>

                     </div>
         </div>

        </div>
    </div>

    </div>
     <script>
       
            const date=new Date();
            var minutes=date.getMinutes();
            var seconds=date.getSeconds();
            document.cookie="timeStore="+(minutes*60+seconds).toString()
            //console.log(minutes*60+seconds);


            // Access the array elements 
            var questions= <?php echo json_encode($questionArray); ?>;
            var opt_1=<?php echo json_encode($option1Array); ?>;
            var opt_2=<?php echo json_encode($option2Array); ?>;
            var opt_3=<?php echo json_encode($option3Array); ?>;
            var opt_4=<?php echo json_encode($option4Array); ?>;
            var correct=<?php echo json_encode($correctArray); ?>;
            console.log(correct);
            let index=0;
            console.log(questions);
            console.log(opt_1);
            let val=1; let time=25;
            let ans=["null","null","null","null","null","null","null","null","null","null"];
            //let record=document.getElementById("recordbtn");
            let qno=document.getElementById("qno");
            let timer=document.getElementById("timer");
            let q=document.getElementById("questionInput");
            let opt1=document.getElementById("opt1");
            let opt2=document.getElementById("opt2");
            let opt3=document.getElementById("opt3");
            let opt4=document.getElementById("opt4");
           
          
            q.innerHTML=questions[0];
            opt1.innerHTML=opt_1[0];
            opt2.innerHTML=opt_2[0];
            opt3.innerHTML=opt_3[0];
            opt4.innerHTML=opt_4[0];
            let score=0;

        function change(){
         
            if(index==9){
               
                var opt = document.getElementsByName('ans');
                let res="null";
                
                for (i = 0; i < opt.length; i++) {
                    if (opt[i].checked){
                         res=opt[i].value
                         opt[i].checked=false;
                    }
                }
                if(correct[index]==res){
                    score+=10;
                }
                
                document.cookie = "score_user="+score.toString();
               
                ans[index++]=res;
               
                val++;
                console.log(ans);
                clearInterval(functionCall);
                location.href='score.php';
            }
            else{
               var opt = document.getElementsByName('ans');
                let res="null";
                
                for (i = 0; i < opt.length; i++) {
                    if (opt[i].checked){
                         res=opt[i].value
                         opt[i].checked=false;
                    }
                }
                if(correct[index]==res){
                    score+=10;
                }
                ans[index++]=res;
                console.log(ans);
                val++;
                let qin=((val).toString());
                qno.innerHTML=qin
                q.innerHTML=questions[index];
                opt1.innerHTML=opt_1[index];
                opt2.innerHTML=opt_2[index];
                opt3.innerHTML=opt_3[index];
                opt4.innerHTML=opt_4[index];
            }
        }
        
       
        var functionCall=setInterval(function(){
                change();
              
        },25000);

        function timeHandler(){
           
            if(time==0){
             
                time=25;
                timer.innerHTML=time;
                time--;
                
            } 
            else{
                timer.innerHTML=time;
                time--;
              
            }
                
        }

        let timeCall=setInterval(timeHandler,1000);
      

    </script>
</body>
</html>

<style>

*{
    margin : 0 ; 
    padding : 0 ; 
    box-sizing : border-box ; 

}
body{
       
        background-color: rgb(71, 161, 217);
    }
.background{
    width:120vmin;
    color: white;
    padding-top: 3vmin;
    padding-bottom: 5.5vmin;
    background-color: #3F4865  ;
    border-radius: 3vmin;
  
}

.backContainer{
    display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 1.5vmin;
        height: 100vh; width: 97vw;
}
.questHeader{
    font-size: 4vmin;
}
#questionInput{
    font-size: 3.5vmin;
    margin-left: 2vmin;
}
.opt{
    border-bottom:1px solid white;
    padding: 2vmin;
    width: 100%;
    border-radius:3vmin;
    margin-top: 2.5vmin;
}
@media(max-width:800px){
    .questHeader,.questText{
        font-size: 4.5vmin;
    }
    .qno{
        font-size: 6.5vmin;
    }
    .optx{
        font-size: 4.5vmin;
    }
    .opt{
        margin-left: -3.5vmin;
        margin-top: 4.5vmin;
    }
    .borderTimer{
        height:12vmin;width: 12vmin;
        border-radius: 6vmin;
    }
    .timerContainer{
        height: 12vmin;
    }
    .timeText{
        margin-top: 1.5vmin;
        margin-left: 2vmin;
    }
 
}
@media(min-width:801px){
    .borderTimer{
        height:9vmin;width: 9vmin;
        border-radius: 4.5vmin;
    }
    .timerContainer{
        height: 7vmin;
    }
    .timeText{
        margin-top: 1.75vmin;
        margin-left: 2.5vmin;
    }

}
</style>