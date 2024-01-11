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
    <title>Quiz Part</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid" style="margin-top: 3vmin;">
        <button style="float:right; margin-right: 3vmin;padding:1vmin"><a href="exit.php" style="color:black;text-decoration:none">Exit</a></button>
    </div>
 
    <div class="quizHeader container-fluid " style="margin-top:1.5vmin">
        <p style="font-size:5vmin; font-weight:bold; text-align:center">Geeks Stage
        <br><span style="font-weight:100; font-size:2vmin">(QuizDeck the Quiz Platform of CodeMap in collaboration with TechHubBharat)</span>

        </p>
    </div>

    <div class="imageContainerHolder" style="display:flex;justify-content:center;height:24vmin;">
    <div class="imageHolder border" style="height:19vmin; width:20vmin; border-radius:10vmin;padding:2.5vmin">
        <img src="images/codemap.jpeg" style="max-width:100%;min-width:100%;object-fit:contain">
    </div>
    <div class="timeDiv" style="border:3px solid black; border-radius: 3.5vmin;margin-left:3.5vmin;margin-top:5.5vmin;height:7vmin; width:7vmin;">
         <p id="timer" style="margin-left: 1.5vmin; margin-top: 0.45vmin;font-size: 2.75vmin;">20</p>
    </div>
</div>
    <div class="quizHolder" style="margin-top:0.45vmin">
    
    
    <div class="quizSection container ">

     <div class="questionPart" style="display: flex; justify-content: center;">
        <div class="container QuestionBox " id="question" style="border-radius: 10vmin;">
                <p class="questionText"  style="margin-left: 3vmin; "><span id="qno">Q1.</span>&nbsp;&nbsp;&nbsp;<span id="questionInput">Who invented Python and what is the invention year ?</span></p>
        </div>
    </div>

   <div class="optionBox">
        <div class="row">
            <div class="col-lg-6 border option">
                <div class="optionHolder" style="height:100%;display:flex;align-items:center">
                
                <input type="radio" id="opt_1" name="ans" value="a">
                <label id="opt1" for="opt" style="margin-left:2vmin;font-size:2.5vmin">Guido Von Rossum</label>

            </div>
            </div>
            <div class="col-lg-6 border option">
            <div class="optionHolder" style="height:100%;display:flex;align-items:center">
                
                <input type="radio" id="opt_2" name="ans" value="b">
                <label id="opt2" for="opt_2" style="margin-left:2vmin;font-size:2.5vmin">Tim Berners Lee</label>

            </div>
            </div>
        </div>
    </div>
    <div class="optionBox">
        <div class="row">
            <div class="col-lg-6 border option" style="border:1px solid black">
            <div class="optionHolder" style="height:100%;display:flex;align-items:center">
                
                <input type="radio" id="opt_3" name="ans" value="c">
                <label id="opt3" for="opt_3" style="margin-left:2vmin;font-size:2.5vmin">Brian Keringham</label>

            </div>
            </div>
            <div class="col-lg-6 border option">
            <div class="optionHolder" style="height:100%;display:flex;align-items:center">
                
                <input type="radio" id="opt_4" name="ans" value="d">
                <label id="opt4" for="opt_4" style="margin-left:2vmin;font-size:2.5vmin">James Gosling</label>

            </div>
            </div>
        </div>
    </div>

    <div class="btn-Holder" style="display: flex; justify-content: center; margin-top: 4vmin;">
        <button class="btn btn-primary" id="recordbtn" >Submit</button>
    </div>
      
    </div>

   
       
    </div>

    <script>
       
       
  
            // Access the array elements 
            var questions= <?php echo json_encode($questionArray); ?>;
            var opt_1=<?php echo json_encode($option1Array); ?>;
            var opt_2=<?php echo json_encode($option2Array); ?>;
            var opt_3=<?php echo json_encode($option3Array); ?>;
            var opt_4=<?php echo json_encode($option4Array); ?>;
            var correct=<?php echo json_encode($correctArray); ?>;
            //console.log(correct);
            let index=0;
            //console.log(questions);
            //console.log(opt_1);
            let val=1; let time=10;
            let ans=["null","null","null","null","null","null","null","null","null","null"];
            let record=document.getElementById("recordbtn");
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
                let qin="Q".concat((val).toString()).concat(".");
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
              
        },10000);

        function timeHandler(){
           
            if(time==0){
             
                time=10;
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
    
    .quizSection{
        padding:3vmin;
    }
    .quizHeader{
        display: flex;
        justify-content: center;
    
        align-items: center;
    }
    @media(max-width:901px){
        .QuestionBox{
            height:19vmin;
            border:1px solid grey;
        }
        .optionBox{
            margin-top:3vmin;
        }
        .option{
            height:15vmin;
            border-radius:10vmin;
            margin-top:1.5vmin;
        }
        .questionText{
            font-size: 3.15vmin;
            margin-top: 4vmin;
        }
    }
    @media(min-width:901px){
        .QuestionBox{
            height:15vmin;
            border:1px solid grey;
           
        }
        .optionBox{
            margin-top:3vmin;
            
        }
        .option{
            height:15vmin;
            border-radius:5vmin;
        }
        .questionText{
            font-size: 2.75vmin;
            margin-top: 4.5vmin;
        }
    }

    #recordbtn{
        display:none;
    }
</style>














