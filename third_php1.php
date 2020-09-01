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
<script src="thirdphp.js"></script>
                                                                                                
<style>
.outer
{
	
height:100%;
width:100%;
background-color:grey;
}

.container{
	background: #000 url(image1.png);
	color: silver;
	height: 75%;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
	float:left;
}
.logo{
	width:10%;
	height: 16%;
	float:left;
}
.header {
	width:90%;
	height: 16%;
	background:#5b4181;
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
.footer{
	width: 100%;
	height: 10%;
	background: #5b4181;
	float: left;
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
				<a href="#">Welcome &nbsp; &nbsp;<?php echo $_SESSION["name"];?></a></div> 

<div class="col-sm-2 log">
				<a href="first.php"> <center> <p>  logout  </p></center>  </a>
 </div> </div>
<div id="container">
<form id = "quiz" style= "background:#5b4181";"width:300px;" "border:1px solid;" name = "quiz">
<p class = "questions">PHP is-</p>
<input type = "radio" id = "mc" name = "question2" value = "HP">Hypertext preprocessor
<input type = "radio" id = "mc" name = "question2" value = "PHP">Personal Home Page<br>

<p class = "questions">When was PHP developed?</p>
<input type = "radio" id = "mc" name = "question2" value = "1995">1995
<input type = "radio" id = "mc" name = "question2" value = "1997">1997<br>

<p class = "questions">What is the keyword to print a data in php?</p>
<input type = "radio" id = "mc" name = "question3" value = "println">println
<input type = "radio" id = "mc" name = "question3" value = "echo">echo<br>

<p class = "questions">PHP scripts are executed on a server?</p>
<input type = "radio" id = "mc" name = "question4" value = "true">True
<input type = "radio" id = "mc" name = "question4" value = "false">False<br>

<p class = "questions">PHP can run?</p>
<input type = "radio" id = "mc" name = "question5" value = "ODP">On different platforms
<input type = "radio" id = "mc" name = "question5" value = "OSP">On same plateform


<input id = "button" type = "button" value = "Check it out" onclick = "check();">
</form>
<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div>
</div>
<div class="footer">
<marquee direction ="right">
This site is developed by Pratima, Srishti, Babita, Neha, Akanksha and Nirupama</marquee></div></div>
</body>
</html>