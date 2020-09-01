<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <script src="js_third_java.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
<style>
.container{
  background: #000 url(bg.jpg);
  color: #fff;
  height: 85%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
.header {
  width:90%;
  height: 16%;
  border-color:#323232;
  background-color:#202020; 
  float:right;
  font-family: 'Pacifico', cursive;
  font-size: 60px;
  font-color: #000;
  text-align: center;
  z-index: 1;
}
.logo{
  width:10%;
  height: 16%;
  float:left;
}
.footer
{
font-size:15px;
text-align:center;
border-top:1px solid;
border-color:#323232;
background-color:#202020;
}
.footer a
{
margin:25px;
color:orange;
text-decoration:none;
font: 15px "Century Gothic", "Times Roman", sans-serif;

}
.footer a:hover
{
text-decoration:none;
color:#9acd32;
border-top:2px solid;
border-color:orange;

}
.box
{
padding:9px;
}
hr{
color:#000000;
}
body{
background:gray;
}
.wrap{
width:300px;
height:400px;
margin:auto;
background:#7b76ff;
margin-top:10px;
padding:5px;
justify-content: center;
  align-items: center;
  position:absolute;
}
form{
padding:10px;
font-family: 'Pacifico', cursive;
border:1px dotted white;
margin:10px;
}
h2{
text align:center;
background:#8f2472;
color:white;
padding:10px;
border-radius:100px;
}
p{
  color: #171613;
  font-size:15px;
  font-family:pacifico;
}
input{
padding:10px;
margin:5px;
border-radius:5px;
border:none;
}
input[type=text],input[type=passwrd],{
width:50%;
}
input[type=button]{
  width:25%;
background:pink;
cursor:pointer;
font-size:15px;
font-weight:bold;
color:#8f2472;
}
input[type=submit]{
width:60%;
background:#336688;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:white;
}
input[type=submit]:hover{
background:navy;
}
select{
padding:10px;
width:32%;
border-radius:5px;
}
</style>
</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Test Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['name'])))
  {
header("location:second.php");
}
else
{
$name = $_SESSION['name'];
}
 <div class="bg">
<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Netcamp</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
		<li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
		</ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<form id = "quiz" style= "background:#5b4181"; "width:300px;" "border:1px solid;" name = "quiz">
<p class = "questions">Who designed java?</p>
<input id = "textbox" type = "text" name = "question1">

<p class = "questions">What is the size of long variable:</p>
<input type = "radio" id = "mc" name = "question2" value = "32">32 bit
<input type = "radio" id = "mc" name = "question2" value = "64">64 bit
<br>
<p class = "questions">What is the value of byte variable?</p>
<input type = "radio" id = "mc" name = "question3" value = "0">0
<input type = "radio" id = "mc" name = "question3" value = "UD"> Undefined
<br>
<p class = "questions">A class always has a default constructor</p>
<input type = "radio" id = "mc" name = "question4" value = "true">true
<input type = "radio" id = "mc" name = "question4" value = "False">false
<br>
<p class = "questions">What is the parent of Error and Exception classes?</p>
<input type = "radio" id = "mc" name = "question5" value = "TH">Throwable
<input type = "radio" id = "mc" name = "question5" value = "ME">Main exception


<input id = "button" type = "button" value = "Check it out" onclick = "check();">
</form>
<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div>
</div></div></div></div></div>



<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="#" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Shaina" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Shaina Mishra</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 8739036565</h4>
		<h4 style="font-family:'typo' ">larakhan627@gmail.com</h4>
		<h4 style="font-family:'typo' ">GGPM</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="new.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
