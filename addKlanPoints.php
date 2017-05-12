<?php 
$myfile = fopen("klan.points", "r") or die("Unable to open file!");
$points=(int)fread($myfile,filesize("klan.points"));
$add = (int)$_POST["points"];
file_put_contents("klan.points",(string)($points+$add));
fclose($myfile);
header("Location: klan.php");
?>
