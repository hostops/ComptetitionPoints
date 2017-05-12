<?php 
$klanfile = fopen("klan.points", "r") or die("Unable to open file!");
$klanpoints=fread($klanfile,filesize("klan.points"));
fclose($klanfile);
$skvofile = fopen("skvo.points", "r") or die("Unable to open file!");
$skvopoints=fread($skvofile,filesize("skvo.points"));
fclose($skvofile);
?>

<!doctype HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SKVO vs.  KLAN</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="styles/site.css" rel="stylesheet">
		<script src="scripts/jquery/jquery-2.2.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header"> 
						<a class="navbar-brand" href="/">Trebušnjaki</a>
					</div>
					<div id="navbar" class="collapse navbar-collapse">
						<ul class="navbar-nav nav">
							<li><a href="/klan.php">Klan</a></li>
							<li><a href="/skvo.php">SKVO</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div id="body">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-6">
					
						<a href="/klan.php" class="thumbnail">
						<h6>KLAN:  <?php echo $klanpoints?> </h6>
							<img src="images/zdravoZivim.jpg" alt="Klan...">
						</a>
					</div>
					
					<div class="col-xs-6 col-md-6">
					
						<a href="/skvo.php" class="thumbnail">
						<h6>SKVO: <?php echo $skvopoints?></h6>
							<img src="images/vaje.jpg" alt="Skvo...">
						</a>
					</div>
				</div>
				<p><span class="label label-info">info</span> Spletno aplikacijo je izdelal Jakob Hostnik <a href="mailto:jakob.hostnik@gmail.com">jakob.hostnik@gmail.com</a> </p>
			</div>
		<div>
	</body>
</html>
