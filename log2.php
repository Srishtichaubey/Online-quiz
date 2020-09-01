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
 <script src="third.js" type="text/javascript"></script>
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
<form id = "quiz" name = "quiz" style= "background:#b3a990;" "font-style:sarif;" "margin:" "width:300px;" "height:400px;" "border:1px solid;">
<p class = "questions">Who designed C?</p>
<input id = "textbox" type = "text" name = "question1">
<p class = "questions">C is a:</p>
<input type = "radio" id = "mc" name = "question2" value = "Low level language">Low level language<br>
<input type = "radio" id = "mc" name = "question2" value = "High level language">High level language<br>
<p class = "questions">Is C an object oriented language?</p>
<input type = "radio" id = "mc" name = "question3" value = "yes">Yes<br>
<input type = "radio" id = "mc" name = "question3" value = "no"> No<br>
<p class = "questions">How many datatypes are there in C?</p>

<input type = "radio" id = "mc" name = "question4" value = "8">8<br>
<input type = "radio" id = "mc" name = "question4" value = "7">7<br>

<p class = "questions">What is the keyword to print in C?</p>

<input type = "radio" id = "mc" name = "question5" value = "PF">Printf<br>
<input type = "radio" id = "mc" name = "question5" value = "SOP">System.out.println
<div class="row">
<div class="col-lg-6">
<input id = "button" type = "button" value = "submit" style="background:orange"; "border:1px solid;" onclick = "check1();"></div>
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
<div class="col-md-3 box">
  <h4 align="center" style="font-family:'vardana'; color:orange;"><h4 align="center" style="font-family:'vardana'; color:orange;">Terms & Condition</h4>
    <img src="pic/copyright.png"style="height:40px;width:50px;">
</div>


<div class="col-md-3 box">
<h4 align="center" style="font-family:'vardana'; color:orange;">
<a href="#" data-toggle="modal" data-target="#aboutus">About us</a></h4>
<img src="pic/about.png" style="height:30px;width:50px;">
</div>


<div class="col-md-3 box"><a href="#">
 <h4 align="center" style="font-family:'vardana'; color:orange;">
 Developers</h4>
 <a href="develop.php"><img src="pic/dev.png" style="height:30px;width:50px;"></a></div>
 
 
<div class="col-md-3 box"><h4 align="center" style="font-family:'vardana'; color:orange;">Contact Us</h4>
<div class="row">
  <div class="col-sm-3"><a href="www.facebook.com"><img src="pic/facebook.png" style="height:30px;width:40px;"></a></div>
  <div class="col-sm-3"><a href="www.whatsapp.com"><img src="pic/whatsapp.png" style="height:30px;width:40px;"></a></div>
   <div class="col-sm-3"> <a href="www.instagram.com"><img src="pic/instagram.png" style="height:30px;width:40px;"></a></div>
   <div class="col-sm-3">   <a href="www.twitter.com"><img src="pic/twitter.png" style="height:30px;width:40px;"></a></div>
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
