<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>đăng kí</title>
	<!-- Latest compiled and minified CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<script src="js/login.js"></script>
</head>

<body>
<button class="glow-on-hover" type="button" onclick="window.location.href='http://localhost/BTL/form.php'">Quay lại đăng nhập!</button>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ĐĂNG ki</h3>
			</div>
			<div class="card-body">
				<form action="register_submit.php" method="POST">
					<div class="input-group form-group" >
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" required=""placeholder="username">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="repassword" class="form-control" placeholder="repassword">
					</div>

					<div class="form-group" >
						<input type="submit" name="submit" value="đăng ki" class="button-49" role="button"> 
						
					</div>
					
				</form>
				
			</div>		
		</div>
	</div>
</div>
</body>
</html>