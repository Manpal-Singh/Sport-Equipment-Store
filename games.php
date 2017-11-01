<!DOCTYPE HTML>
<html>
<head>
<style>
img {
	width:350px;
	height:350px;
	border-radius:100%;
	transition: all 1s;
}
img:hover{
	
	transform: rotate(20deg);
}
</style>
<title>NITC Sports Equipment</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</head>
<body>
		 <?php 
				  require_once("./connect.php");
				  session_start();
				  $e=$_SESSION["roll"];
				  //var_dump($e);
			      $k=$conn->query("select * from members where roll_no='$e';");
				  $o=mysqli_fetch_assoc($k);
				  echo "<div style ='font-family:Corben-Regular;font-size:20px; color:red'>WELCOME <a href='in.php'>".$o['f_name']." ".$o['l_name']." </a></div>" ;
			?>
		<div class="gallery">
			<div class="container">
			<h3 style ='font-family:Corben-Regular;font-size:40px;color:black'>Featured Sports and Games</h3>
			<div class="gallery-grids">
				<div class="col-md-3 gallery-grid ">
					<a href="brand.php?game=Cricket"><img src="images/Cricket.jpg" class="img-responsive" alt=""/>
					<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Cricket</p>
					
					</div>
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Basketball"><img src="images/Basketball.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Basket Ball</p>

				</div>
					<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Volleyball"><img src="images/Volleyball.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Volley Ball</p>
						
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Football"><img style="height:175px" src="images/Football.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Football</p>
						
				</div>
					<div class="col-md-3 gallery-grid ">
						<a href="brand.php?game=Chess"><img style="height:175px"src="images/Chess.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Chess</p>
						
				</div>
					<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Squash"><img style="height:175px"src="images/Squash.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info simpleCart_shelfItem">
						<p>Squash</p>
						
				</div>
					<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Table Tennis"><img style="height:175px"src="images/Table Tennis.jpg" class="img-responsive" alt=""/><div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info simpleCart_shelfItem">
						<p>Table Tennis</p>
						
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Lawn Tennis"><img style="height:175px"src="images/Lawn Tennis.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info simpleCart_shelfItem">
						<p>Lawn Tennis</p>
						
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Swimming"><img style="height:175px"src="images/Swimming.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Swimming</p>
						
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Hockey"><img style="height:175px" src="images/hockey.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Hockey</p>
						
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Handball"><img style="height:175px"src="images/Handball.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>HandBall</p>
						<div class="galry">
						
						
					<div class="clearfix"></div>
					</div>
					</div>
				</div>
				<div class="col-md-3 gallery-grid">
						<a href="brand.php?game=Archery"><img style="height:175px" src="images/Archery.jpg" class="img-responsive" alt=""/>
						<div class="gallery-info">
					<div class="quick">
					
					</div>
					</div></a>
					<div class="galy-info">
						<p>Archery</p>
						
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		
</body>
</html>
