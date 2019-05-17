<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo '<h3>Successfully logged in</h1>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
</head>
<body>


<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white">Welcome <?php echo $uname ?> </div>
		<div class="container row d-flex flex-row justify-content-center mb-5 ">
			<div class="admin-form shadow p-2">
			
				<form class="form" action="home.php" method="POST">
					<div class="form-group">
						<label for="username"><h4>Write Something<h4></label><br>
                        <input type="text" name="updatepost" class="form-control">
					</div>
				
					<div id="div1">
						<input type="hidden" name="token" value="" id="token_to_be_added"/>
					</div>
                    <div class="form-group">
                        <input type="submit"  class="btn btn-info btn-md" value="updatepost">
                    </div>
					
				</form>
				<a href="logout.php" class="btn btn-danger mb-2">Logout</a>
			</div>
		</div>
	
	</div>	

</header>




</body>
</html>