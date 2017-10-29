<html>
	<head>
	
		<script src="src/jquery.js"></script>
		<script src="src/materialize.js"></script>
		<script src="src/script.js"></script>
		
		<link rel="stylesheet" href="src/materialize.css"/>
		<link rel="stylesheet" href="src/style.css"/>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="fav icon" href="img/icon.png"/>
		
		<title>Upload - Amula Models</title>
		
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
			<span class="app-info">Amula Models - Upload</span>
			<i class="material-icons back">&#xE5C4;</i>
		</div>
		
		<form name="upload" class="cards">
		
			<div class="card">
				<span class="card-title">Name</span>
				<div class="card-content">
					<div class="input-field">
						<input id="name" name="name" type="text" required>
						<label for="name">Model Name</label>
					</div>
						
				</div>
			</div>
			
			<div class="card">
				<span class="card-title">Description</span>
				<div class="card-content">
					<div class="input-field">
						<textarea id="desc" maxlength="360" name="desc" required class="materialize-textarea"></textarea>
						<label for="desc">Model Description</label>
					</div>
						
				</div>
			</div>
			
			<div class="card">
				<span class="card-title">Images</span>
				<div class="card-content">
					<div class="file-field">
						<div class="btn red waves-effect waves-light">
							<span>Images</span>
							<input type="file" multiple accept="image/png">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path" name="images" type="text" placeholder="Upload one or more files">
						</div>
					</div>
				</div>
			</div>
			
			<div class="card">
				<span class="card-title">Models</span>
				<div class="card-content">
					<div class="file-field">
						<div class="btn red waves-effect waves-light">
							<span>Models</span>
							<input type="file" name="models" multiple accept="application/sla,application/vnd.ms-pki.stl,application/x-navistyle" required>
						</div>
						<div class="file-path-wrapper">
							<input class="file-path" type="text" placeholder="Upload one or more files">
						</div>
					</div>
				</div>
			</div>
			
			<div class="card">
				<span class="card-title">Upload</span>
				<div class="card-content">
					<input type="submit" value="sign up" class="waves-effect waves-red btn-flat block"/>
				</div>
			</div>
			
		</form>
		
	</body>
</html>