<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KNOW YOUR SKILL </title>
 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'  type='text/css'>
 <link rel ="stylesheet" href="style_try.css" >

<script src="js/jquery.js" type="text/javascript"></script>
 
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <!--<script src="js/java2db.js" type="text/javascript"></script>-->
 <script>
 function check2(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
	var question5 = document.quiz.question5.value;
	var correct = 0;


	if (question1 == "super") {
		correct++;
}
	if (question2 == "AC") {
		correct++;
}	
	if (question3 == "sc") {
		correct++;
	}
	if (question4 == "True") {
		correct++;
	}
	if (question5 == "method") {
		correct++;
	}
	
	var pictures = ["win.gif","win.gif", "meh.jpeg","meh.jpeg", "lose.gif","lose.gif"];
	var messages = ["Great job!","good", "That's just okay","Believe in yourself","You really need to do better","Try a little harder"];
	var score;

	if (correct == 0) {
		score = 5;
	}

	if (correct == 1) {
		score = 4;
	}

	if (correct == 2) {
		score = 3;
	}
	if (correct == 3 ) {
		score = 2;
	}
	
	if (correct == 4 ) {
		score = 1;
	}
	if (correct == 5 ) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";
	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
	document.getElementById("picture").src = pictures[score];
	}
	</script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Know Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
<a href="mid.php" class="pull-right btn sub1 title3" style="margin-top:16px; text-align:; "><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
<?php echo '<span class="pull-right top title1" ><a href="new.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
?></div>
</div></div>
<div class="bg" style="background:#000 url(bg.jpg);">
<div class="row">
<div class="col-sm-12">
<h2 style="color:orange;"><center><b><u>JAVA QUIZ:- Level 2</u><b></center></h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form id = "quiz" name = "quiz" style= "background:#b3a990; margin-top:10px; margin-left:200px; font-style:sarif; width:400px; height:450px; border:1px solid;">
<p class = "questions">Keyword used to access the method from superclass is:?</p>
<input id = "textbox" type = "text" name = "question1">
<p class = "questions">Abstract method can be in?</p>
<input type = "radio" id = "mc" name = "question2" value = "Normal class">Normal class<br>
<input type = "radio" id = "mc" name = "question2" value = "AC">Abstract class<br>

<p class = "questions">Which binding is used in private method of class?</p>
<input type = "radio" id = "mc" name = "question3" value = "sc">Static<br>
<input type = "radio" id = "mc" name = "question3" value = "Dynamic"> Dynamic<br>

<p class = "questions">Return type can be same in method overriding?</p>

<input type = "radio" id = "mc" name = "question4" value = "True">true<br>
<input type = "radio" id = "mc" name = "question4" value = "false">false<br>

<p class = "questions">Name should be started with lowercase in case of?</p>

<input type = "radio" id = "mc" name = "question5" value = "method">method<br>
<input type = "radio" id = "mc" name = "question5" value = "if">Interface
<div class="row">
<div class="col-sm-12">
<input id = "button" type = "button" value = "submit" style="background:orange; border:1px solid;" onclick = "check2()">
</div></div>
</form>
<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div>
</div>
<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div></div></div></div>



<!--Footer start-->
<div class="row footer" style=" background:#000 url(pic/bg2.png); height:150px; margin-:0px; margin-top:0px; padding-top:10px; padding-right:30px;">
<div class="col-md-3 box">
  <h4 align="center" style="font-family:'vardana'; color:orange;"><h4 align="center" style="font-family:'vardana'; color:orange;">Terms & Condition</h4>
    <img src="pic/ic/copyright.png"style="height:40px;width:40px;">
</div>


<div class="col-md-3 box"><a href="#" data-toggle="modal" data-target="#aboutus">
<h4 align="center" style="font-family:'vardana'; color:orange;">
About us</h4>
<img src="pic/ic/about.png" style="height:40px;width:40px;margin-left:30px;"></a>
</div>


<div class="col-md-3 box"><a href="developer.php">
<h4 style="font-family:'vardana'; color:orange;">Developers</h4><a href="developer.php"><img src="pic/ic/dl.png" style="height:40px;width:40px;align:center;margin-left:-30px;"></a></div>
 
 
<div class="col-md-3 box"><h4 align="center" style="font-family:'vardana'; color:orange;">Contact Us</h4>
<div class="row">
  <div class="col-sm-3"><a href="https://m.facebook.com/Know-your-skills-1880663715368981/"><img src="pic/ic/fb.png" style="height:40px;width:40px; text-decoration:none;"></a></div>
  <div class="col-sm-3"><a href="www.whatsapp.com"><img src="pic/ic/wt.png" style="height:40px;width:40px;"></a></div>
   <div class="col-sm-3"> <a href="www.instagram.com"><img src="pic/ic/insta.png" style="height:40px;width:40px;"></a></div>
   <div class="col-sm-3">   <a href="www.twitter.com"><img src="pic/ic/tweet.png" style="height:40px;width:40px;"></a></div>
</div></div>



</div>


<div class="modal fade title1" id="aboutus">
  <div class="modal-dialog">
    <div class="modal-content" style="background:#000 url(pic/bg1.jpg)">
      <div class="modal-header">
        <h3 class="modal-title" style="font-family:'sarif'; align:'center'; "><span style="color:orange"><b>ABOUT THIS SITE<b> </span></h3>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-3">
		 <img src="pic/about.jpg" width=130 height=150 alt="developers" class="img-rounded">
		 </div>
		 <div class="col-md-9">
	<h4 style="font-family:'sarif'; text-align:'right'; ">This quiz is made with the idea of providing the users a dynamic and interesting way to test their programming skills and knowledge. We are constantly working to provide our users the best possible experience of online learning </h4>
	</div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!---/.end of footer-->




</body>
</html>
