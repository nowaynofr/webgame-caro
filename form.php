<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caro online</title>
	<!-- Latest compiled and minified CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<script src="js/login.js"></script>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ĐĂNG NHẬP</h3>
			</div>
			<div class="card-body">
				<form action="xuly.php" method="post">
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
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group" >
						<input type="submit" value="đăng nhập" class="button-49" role="button"> 
					</div>
				</form>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						bạn ko có tài khoản<a href="http://localhost/BTL/register.php">đăng kí ngay</a>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>
</body>
</html>