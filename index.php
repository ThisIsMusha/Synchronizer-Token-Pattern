<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white">Synchronizer Token Pattern</div>
		<div class="container row d-flex flex-row justify-content-center mb-5 ">
			<div class="admin-form shadow p-2">
			
				<form class="form" action="result.php" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" autocomplete="off">
					</div>
				
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" id="password" class="form-control" autocomplete="off">
					</div>
					
					
					<input type="submit" class="btn-success mt-2" name="Login" value="Login">
					
				</form>
				
			</div>
		</div>
	
	</div>	

</header>
</body>
</html>

