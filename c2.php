<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KNOW YOUR SKILL </title>
 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <link rel ="stylesheet" href="style_try.css" >
<script src="js/jquery.js" type="text/javascript"></script>
 <script src="js/c2db.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Know Your Skill</span></div>
<div class="col-md-4 col-md-offset-2">
<a href="mid.php" class="pull-right btn sub1 title3" style="margin-top:16px; text-align:; "><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
  <?php echo'<span class="pull-right top title1" ><a href="new.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
?></div>
</div></div>
<div class="bg" style="background:#000 url(bg.jpg);">
<div class="row">
<div class="col-sm-12">
<h2 style="color:orange;"><center><b><u>C QUIZ:- Level 2</u><b></center></h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form id = "quiz" name = "quiz" style= "background:#b3a990; font-style:sarif; margin-top:28px; margin-left:200px; width:300px; height:400px; border:1px solid;">
<p class = "questions"><b>OUTPUT OF:</b><br>
main() <br>
{ <br>
	int i=1; <br>
	while (i++<=5) <br>
		printf("%d",i++); <br>
}</p>
<input type = "radio" id = "mc" name = "question2" value = "2">2 4 6<br>
<input type = "radio" id = "mc" name = "question2" value = "1">1 3 5<br><br>

<p class = "questions"><b>IN THE FOLLOWING CODE, p2 IS:</b><br><br>
Typedf int*ptr;<br>
ptr p1, p2;</p>
<input type = "radio" id = "mc" name = "question4" value = "p">pointer<br>
<input type = "radio" id = "mc" name = "question4" value = "ip">integer pointer<br>

<div class="row">
<div class="col-lg-6">
<input id = "button" type = "button" value = "submit" style="background:orange;" "border:1px solid;" onclick = "check3();"></div>
</div>
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
<div class="row footer" style=" background:#000 url(pic/bg2.png); height:150px; margin-right:0px; margin-top:0px; padding-top:10px; padding-right:30px;">
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
