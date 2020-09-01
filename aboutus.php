<html>
<head>
<style>
.row
{
height:300px;
width:1200px;
background:blue;

#gallery
{
min-height:600px;
width:1200px;
background:#478ee0;
}
}
.col
{
height:200px;
width:300px;
background:white;
float:left;
margin:25px;
padding:25px;
}
.col img
{
height:100%;
width:100%;
filter:grayscale(100%);
}
.col img:hover
{
filter:grayscale(0%);
}
.col:hover
{
border-radius:20px;
transform:scale(1.1);
box-shadow:10px 10px 20px red;
transition:all ease 1s;
}
</style>
</head>
<body>
<div id="gallery">
<div class="row">
<div class="col">
<img src="image/S.jpg"/>
</div>
<div class="col">
<img src="image/P.jpg"/>
</div>
<div class="col">
<img src="image/c.jpg"/>
</div>
</div>
<div class="row">
<div class="col">
<img src="image/N.jpg"/>
</div>
<div class="col">
<img src="image/d.jpg"/>
</div>
<div class="col">
<img src="image/ne.jpg"/>
</div>
</div>
</div>
</div>
</body>
</html>