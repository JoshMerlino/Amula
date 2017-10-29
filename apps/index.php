<html>
	<head>
	
		<script src="src/jquery.js"></script>
		<script src="src/materialize.js"></script>
		<script src="src/script.js"></script>
		
		<link rel="stylesheet" href="src/materialize.css"/>
		<link rel="stylesheet" href="src/style.css"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="fav icon" href="img/icon.png"/>
		
		<title>Amula Apps</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="theme-color" content="#263238">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>
	
		<div class="app-bar">
			<span class="app-info">Amula Apps</span>
			<div class="app-action valign-wrapper">
				
				<?php
				
					include("protected/auth.php");
				
					if($logged_in !== true){
						echo '<a class="waves-effect waves-light btn-flat i" id="apps"><i class="material-icons">&#xE5C3;</i></a>';
						echo '<span class="div"></span>';
						echo '<a class="waves-effect waves-light btn-flat" href="login">Log In</a>';
						echo '<a class="waves-effect waves-light btn-flat" href="signup">Sign Up</a>';
					} else {
						echo '<a class="waves-effect waves-light btn-flat i" href="./"><i class="material-icons">&#xE5C3;</i></a>';
						echo '<span class="div"></span>';
						echo '<a class="waves-effect waves-light btn-flat" id="logout">Log Out</a>';
						echo '<a class="waves-effect waves-light btn-flat" href="me">My Account</a>';
					}
				?>
				
			</div>
		</div>
		
		<div class="apps">
		
			<?php
				$files = scandir("../");
				sort($files);
				
				foreach($files as $app){
					if(!in_array($app,array(".htaccess","index.php","apps","dist","..","."))){
						
						$appuc = ucfirst($app);
						
						echo "<a class='app waves-effect waves-medium' href='../$app/'><img src='../$app/img/icon.png'/><span class='title'>Amula $appuc</span></a>";
					}
				}
			?>
		
		</div>
		
	</body>
</html>