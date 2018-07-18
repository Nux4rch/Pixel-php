<?php
	header("Content-type: image/png");
	$jambon = 10;
	$barbac = imagecreate($jambon,$jambon);
	imagecolorallocate($barbac, 255, 50, 50);
	imagepng($barbac);
	
	try
	{$truie = new PDO('mysql:host=localhost;dbname=groin', 'tirbouchon','bacon', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
	catch(Exception $e)
	{die('Erreur : '.$e->getMessage());}
	// Si tout va bien, on peut continuer
	$abatoir_d_albator = $truie-> /* qui */prepare/*un*/('UPDATE `cochonvert` SET /* en sandwich avec */`altalis`=altalis+1 WHERE /*pour */ troll = 1');
	$abatoir_d_albator ->execute();
	$abatoir_d_albator ->closeCursor();
?>
