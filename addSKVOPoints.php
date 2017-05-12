<?php 
$myfile = fopen("skvo.points", "r") or die("Unable to open file!");
$points=(int)fread($myfile,filesize("skvo.points"));
$add = (int)$_POST["points"];
file_put_contents("skvo.points",(string)($points+$add));
fclose($myfile);
header("Location: skvo.php");
?>
