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
 <script src="log6_db.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>

 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Know Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
<?php echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="log.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="new.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
?></div>
</div></div>
<div class="bg" style="background:#000 url(bg.jpg);">
<div class="row">
<div class="col-md-12">
<form id = "quiz" name = "quiz" style= "background:#b3a990; font-style:sarif; padding:10px; margin-left:30px; margin-top:10px; width:300px; height:480px; border:1px solid;">
<p class = "questions">Who developed Python?</p>
<input type = "radio" id = "mc" name = "question2" value = "GVR">Guido van Rossum<br>
<input type = "radio" id = "mc" name = "question2" value = "Patrick Naughton"><br>Patrick Naughton<br>

<p class = "questions">How many keywords are there in Python?</p>
<input type = "radio" id = "mc" name = "question2" value = "28">28<br>
<input type = "radio" id = "mc" name = "question2" value = "30">30<br>

<p class = "questions">What's the placeholder for the body of a function?</p>
<input type = "radio" id = "mc" name = "question3" value = "body">body<br>
<input type = "radio" id = "mc" name = "question3" value = "pass">pass<br>

<p class = "questions">What is the begining of a class definition</p>
<input type = "radio" id = "mc" name = "question4" value = "class">class<br>
<input type = "radio" id = "mc" name = "question4" value = "def">def<br>

<p class = "questions">Is python case sensitive?</p>
<input type = "radio" id = "mc" name = "question5" value = "true">true<br>
<input type = "radio" id = "mc" name = "question5" value = "False">False<br>
<div class="row">
<div class="col-lg-6">
<input id = "button" type = "button" value = "submit" style="background:orange"; "border:1px solid;" onclick = "check6();"></div>
<div class="col-lg-6"><a href="space/shootgame.php">
<input id = "button" type = "button" value = "next" style="background:orange;" "border:1px solid;"></a></div></div>
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
<div class="row footer">
<div class="col-md-6 box">
<a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a>
</div>

<div class="col-md-6 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div></div>
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
		 <img src="P&S.jpg" width=180 height=200 alt="Pratima & Srishti" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Srishti Pratima</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+918739036565</h4>
		<h4 style="font-family:'typo' ">sheupratima@gmail.com</h4>
		<h4 style="font-family:'typo' ">Govt. girls polytechnic meza, Prayagraj</h4></div></div>
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
<form role="form" method="post" action="admin.php?q=log.php">
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
