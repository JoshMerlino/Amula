<html>
	<head>
	
		<script src="src/jquery.js"></script>
		<script src="src/materialize.js"></script>
		<script src="src/script.js"></script>
		
		<link rel="stylesheet" href="src/materialize.css"/>
		<link rel="stylesheet" href="src/style.css"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="fav icon" href="img/icon.png"/>
		
		<title>Log In - Amula Models</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="theme-color" content="#263238">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<?php
		include("protected/auth.php");
		if($logged_in == true){
			header("Location: ./");
		}
	?>
	
	<body>
	
		<div class="app-bar wi">
			<span class="app-info">Amula Models - Log In</span>
			<i class="material-icons back">&#xE5C4;</i>
		</div>
		
		<div class="card">
			<span class="card-title">Log In</span>
			<form name="login" class="card-content">
				<div class="input-field">
					<input id="email" name="email" type="email" required>
					<label for="email">Email Address</label>
				</div>
				<div class="input-field">
					<input id="password" name="password" type="password" required>
					<label for="password">Password</label>
				</div>
				
				<input type="submit" value="login" class="block waves-effect waves-red btn-flat"/>
				
			</form>
		</div>
		
	</body>
</html>