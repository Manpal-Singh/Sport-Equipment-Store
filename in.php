<!DOCTYPE HTML>
<html>
<head>
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
<body style="background:url('77.png'); background-size:cover">

	
			<div class="header-bottom">
					<div class="container">


	        <?php 
				  require_once("./connect.php");
				  session_start();
				  $e=$_SESSION["roll"];
				  //var_dump($e);
			      $k=$conn->query("select * from members where roll_no='$e';");
				  $o=mysqli_fetch_assoc($k);
				  echo "<pre> <p style ='font-family:Corben-Regular;font-size:40px; color:black'>WELCOME <a href='in.php'>".$o['f_name']." ".$o['l_name']." </a>                 <a href='get2.php'  style='font-size:30px; color:Red; margin-right:200px' > Not Returned </a>    </p> </pre>" ;
			?>
	    </div>

</div>
			  
			


		<div class="banner-section">
			<div class="container">
				<div class="banner-grids">
					<div class="col-md-6 banner-grid">
						<h2>Best Sports Equipments</h2>
						<p>You can never be fit and fine without sweating to your limit, so get set GO!!!</p>
						<a href="games.php" class="button"> Issue now </a>
					</div>
				<div class="col-md-6 banner-grid1">
						<img src="images/p2.png" class="img-responsive"  style="width:1000px"alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		<div class="banner-bottom">
		<div class="gallery-cursual">
	
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<img style="height:264px" class="lazyOwl" data-src="images/swimming.jpg" alt="name">
				<div class="item-info">
					<h5>Swimming</h5>
				</div>
			</div>
			<div class="item">
				<img style="height:264px" class="lazyOwl" data-src="images/hockey.jpg" alt="name">
			<div class="item-info">
					<h5>Hockey</h5>
				</div>
			</div>
			<div class="item">
				<img style="height:264px" class="lazyOwl" data-src="images/Handball.jpg" alt="name">
			<div class="item-info">
					<h5>Hand ball</h5>
				</div>
			</div>
			<div class="item">
				<img style="height:264px" class="lazyOwl" data-src="images/b4.jpg" alt="name">
			<div class="item-info">
					<h5>Table Tennis</h5>
				</div>
			</div>
			<div class="item">
				<img  style="height:264px" class="lazyOwl" data-src="images/swimming.jpg" alt="name">
			<div class="item-info">
					<h5>Swimming</h5>
				</div>
			</div>
			<div class="item">
				<img  style="height:264px" class="lazyOwl" data-src="images/b6.jpg" alt="name">
			<div class="item-info">
					<h5>Football</h5>
				</div>
			</div>
			<div class="item">
				<img  style="height:264px" class="lazyOwl" data-src="images/Archery.jpg" alt="name">
			<div class="item-info">
					<h5>Archery</h5>
				</div>
			</div>
			<div class="item">
				<img style="height:264px"  class="lazyOwl" data-src="images/hockey.jpg" alt="name">
			<div class="item-info">
					<h5>Hockey</h5>
				</div>
			</div>
			<div class="item">
				<img style="height:264px"  class="lazyOwl" data-src="images/Handball.jpg" alt="name">
			<div class="item-info">
					<h5>Hand Ball</h5>
				</div>
			</div>
			<div  style="height:264px" class="item">
				<img class="lazyOwl" data-src="images/b4.jpg" alt="name">
			<div class="item-info">
					<h5>Table Tennis</h5>
				</div>
			</div>
		</div>
		<!--sreen-gallery-cursual-->
		
		
	
		
</body>
</html>