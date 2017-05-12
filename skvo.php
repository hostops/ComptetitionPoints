
<?php 
$myfile = fopen("skvo.points", "r") or die("Unable to open file!");
$points=(int)fread($myfile,filesize("skvo.points"));
fclose($myfile);
?>
<!DOCTYPE html>
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
							<li ><a href="/klan.php">Klan</a></li>
							<li class="active"><a href="/skvo.php">SKVO</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div id="body">
			<div class="container">
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">SKVO: <?php echo $points;?></h3>
						</div>
					<div class="panel-body">
						<form  action="addSKVOPoints.php" method="post" >
						Dodaj svoje trebušnjake.
						<input name="points" type="number" required />
						<input type="submit" value="Pošlji" />
						</form>
					</div>
				</div>
				<p><span class="label label-info">info</span> Spletno aplikacijo je izdelal Jakob Hostnik <a href="mailto:jakob.hostnik@gmail.com">jakob.hostnik@gmail.com</a> </p>
			</div>
		<div>
	</body>
</html>
