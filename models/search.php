<html>
	<head>
	
		<script src="src/jquery.js"></script>
		<script src="src/materialize.js"></script>
		<script src="src/script.js"></script>
		
		<link rel="stylesheet" href="src/materialize.css"/>
		<link rel="stylesheet" href="src/style.css"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="fav icon" href="img/icon.png"/>
		
		<title>Amula Models</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="theme-color" content="#263238">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>
	
		<div class="app-bar">
			<span class="app-info">Amula Models</span>
			<div class="app-action valign-wrapper">
				
				<input type="a" class="search" placeholder="Enter Search Term" value="<?php echo $_GET["q"];?>"/>
			
				<?php
				
					include("protected/auth.php");
				
					if($logged_in !== true){
						echo '<a class="waves-effect waves-red btn-flat i" id="search"><i class="material-icons">&#xE8B6;</i></a>';
						echo '<span class="div"></span>';
						echo '<a class="waves-effect waves-red btn-flat" href="login">Log In</a>';
						echo '<a class="waves-effect waves-red btn-flat" href="signup">Sign Up</a>';
					} else {
						echo '<a class="waves-effect waves-red btn-flat i" id="search"><i class="material-icons">&#xE8B6;</i></a>';
						echo '<a class="waves-effect waves-red btn-flat i" href="upload"><i class="material-icons">&#xE2C6;</i></a>';
						echo '<span class="div"></span>';
						echo '<a class="waves-effect waves-red btn-flat" id="logout">Log Out</a>';
						echo '<a class="waves-effect waves-red btn-flat" href="me">My Account</a>';
					}
				?>
				
			</div>
		</div>
		
		<div class="models">
		
			<?php
			
				$search = $_GET["q"];
				$sq = explode(" ",$search);

				$connection = new mysqli("localhost","root","","3dcubed");
				
				$results = 0;
				
				foreach($sq as $el){
					$res = $connection -> query("SELECT * FROM models WHERE name='$el'");
					$results = mysqli_num_rows($res);
					
					
				};
				
				if($results == 0){
					echo "<span class='title'>0 result found for \"$search\"</span>";
				} else {
					
				}
				
			?>
		
		</div>
		
	</body>
</html>