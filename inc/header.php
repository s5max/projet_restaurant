<?php

	//Requete sql from options

	$select = $bdd->prepare('SELECT * FROM options');
	$options = $select->fetchAll(PDO::FETCH_ASSSOC); 

?><!DOCTYPE html>
<html lang='fr'>

	<head>
	
		<meta charset="utf-8">
		
		<title><?=$title;?></title>
		
	</head>

	<body>
		
	<nav>

		<header>

			<h1><?=$options['name'];?></h1>

			<address><?=$options['address'];?></address>

			<p><?=$options['tel'];?></p>

		</header>

		<ul>
			<li><a href="contact.php">Nous contacter</a></li>
		</ul>

	</nav>


	</body>

</html>