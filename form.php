<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<form action="receiveform.php" method="POST">
		<p>
			Nom d'utilisateur : <input name="nom" type="text" />
		</p>
		<p>
			mot de passe : <input name="prenom" type="text" />
		</p>
		
		<p>
			Adresse couriel : <input name="email" type="email" />
			
		</p>
		<p>
			Pays : 
			<select name="country" >
				<option value="canada">Canada</option>
				<option value="russia">Russie</option>
				<option value="guam">Guam</option>
		</p>
			<p>
				<input type="submit" />
		</p>
	</form>
</body>
</html>