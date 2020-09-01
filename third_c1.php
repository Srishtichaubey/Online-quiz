<?php
session_start();
session_destroy();
?>
<html>
<head>
	<title>Know your skills</title>
	
<meta name="viewport" content="width-device-width,initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
<link href="css/bootstrap.css" rel="stylesheet"/><meta charset="utf-8">
<link href ="style_try.css" rel ="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="third.js"></script>
                                                                                                
<style>
.outer
{
	
height:100%;
width:100%;
}

.container{
	background:#000 url(bg.jpg);
	height: 75%;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
	float:left;
}
body
{
overflow-x:hidden;
width:100%;
font: 15px "Century Gothic", "Times Roman", sans-serif;
background:#eee;
min-height:550px;
background-attachment:fixed;
}
.logo{
	width:10%;
	height: 16%;
	float:left;
}
.header {
	width:90%;
	height: 16%;
	background:#637284;
	float:left;
	font-family: 'Pacifico', cursive;
	font-size: 60px;
	font-color: #000;
	text-align: center;
	z-index: 1;
}
.menu{
	float:left;
	background:#050505;
	height:10%;
	width:85%;
	}
a:log{
	margin-top:10px;
	text-decoration:none;
	margin-left: 800px;
text-align: right;
font-family: Harlow Solid Italic;
font-size: 25px;
font-color: white;
}

a:menu{
	margin-top:10px;
	text-decoration:none;
	margin-left: 600px;
text-align: right;
font-family: Harlow Solid Italic;
font-size: 25px;
font-color: white;
}

.log{
	width:15%;
	height: 10%;
	float:left;
	font-color:white;
	font-family:sarif;
	background:black;
}
</style>                                                                                                    
</head>
<body>
<div class="outer" >
<div class="row" >
<div class="col-sm-2 logo" ><img src="know.png"></div>
<div class="col-sm-10 header" "border:1px solid;">Know Your Skills</div></div>
<div class="row">
<div class="col-sm-10 menu">
				<h3><a href="#">Welcome &nbsp; &nbsp;<?php echo $_SESSION["name"]; style:"text_decoratiion:none;"?></a></h3></div> 

<div class="col-sm-2 log">
				<h3><a href="first.php"> <center>  logout </center>  </a><h3>
 </div> </div>
<div id="container">
<form id = "quiz" style= "background:#5b4181";"width:300px;" "border:1px solid;" name = "quiz">
<p class = "questions">Who designed C?</p>
<input id = "textbox" type = "text" name = "question1">
<p class = "questions">C is a:</p>
<input type = "radio" id = "mc" name = "question2" value = "Low level language">Low level language
<input type = "radio" id = "mc" name = "question2" value = "High level language">High level language<br>
<p class = "questions">Is C an object oriented language?</p>
<input type = "radio" id = "mc" name = "question3" value = "yes">Yes
<input type = "radio" id = "mc" name = "question3" value = "no"> No<br>
<p class = "questions">How many datatypes are there in C?</p>

<input type = "radio" id = "mc" name = "question4" value = "8">8
<input type = "radio" id = "mc" name = "question4" value = "7">7<br>

<p class = "questions">What is the keyword to print in C?</p>

<input type = "radio" id = "mc" name = "question5" value = "PF">Printf
<input type = "radio" id = "mc" name = "question5" value = "SOP">System.out.println
<input id = "button" type = "button" value = "Check it out" onclick = "check();">
</form>
<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div>
</div>
<div class="row footer">
  <div class="col-md-4 box">
    <a href="#">About us</a>
  </div>
    <div class="col-md-6 box">
     <a href="#">Developers</a>
    </div>
</div>
</div>
</body>
</html>