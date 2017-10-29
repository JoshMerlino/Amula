<html>
	<head>
	
		<script src="src/jquery.js"></script>
		<script src="src/materialize.js"></script>
		<script src="src/script.js"></script>
		
		<link rel="stylesheet" href="src/materialize.css"/>
		<link rel="stylesheet" href="src/style.css"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="fav icon" href="img/icon.png"/>
		
		<title>My Account - Amula Models</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="theme-color" content="#263238">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<?php
		include("protected/auth.php");
		if($logged_in !== true){
			header("Location: signup");
		}
	?>
	
	<body>
	
		<div class="app-bar wi">
			<span class="app-info">Amula Models - My Account</span>
			<i class="material-icons back">&#xE5C4;</i>
			<div class="app-action valign-wrapper">
				<a class="waves-effect waves-red btn-flat" id="logout">Log Out</a>
			</div>
		</div>
		
		<input type="file" class="upload" id="avatar" accept="image/png">
		
		<div class="change_avatar">
			<img src="../dist/avatars/<?php echo $user["userid"];?>.png"></img>
			<a class="waves-effect waves-red btn-flat b upload">upload avatar</a>
		</div>
		
		<div class="main">
		
			
			
		</div>
		
	</body>
</html>