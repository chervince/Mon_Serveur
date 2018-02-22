<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<?php


	function convertCountryValueToFrenchLabel($value) {
		if($value === "canada") {
			return "Canada";
		}
		else if ($value === "russia") {
			return "Russie";
		}
		else if ($value === "guam") {
			return "Guam";
		}
		else {
			return "Pays inconu";
		}
	}

	$nom 					= $_POST["nom"];
	$prenom 				= $_POST["prenom"];
	$email 					= $_POST["email"];
	$country 				= convertCountryValueToFrenchLabel($_POST["country"]);
	$servername 			= "localhost";
	$username 				= "root";
	$password 				= "";
	$dbname 				= "formulaire";

	try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql = "INSERT INTO form_246 (nom, prenom, email, country)
    	VALUES ('$nom', '$prenom', '$email', '$country')";
    	// use exec() because no results are returned
    	$conn->exec($sql);
    	$last_id = $conn->lastInsertId();
    	echo "New record created successfully. Last inserted ID is: " . $last_id;
    	}
	catch(PDOException $e)
    	{
    	echo $sql . "<br>" . $e->getMessage();
    	}

		$conn = null;
	

?>

<body>
	<h1>Vous avez bien été inscri</h1>
	<p>voici un rappel des info que vous avez envoyé</p>
	<p>
		Nom d'utilisateur : <span id="nom"><?=$nom?></span>
	</p>	
	
	<p>
		prenom : <span id="prenom"><?=$prenom?></span>
	</p>
		
	<p>
		Adresse couriel : <span id="email"><?=$email?></span>
	</p>
	<p>
		Pays : <span id="country"><?=$country?></span>
			
	</p>

	
</body>
</html>
