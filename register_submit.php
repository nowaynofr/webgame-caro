<?php
	include 'config.php';
	if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
		// code...
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		if ($password != $repassword) {
			header("location: http://localhost/BTL/register.php");
		}
		$sql = "SELECT * FROM member WHERE username='$username' ";
		$old = mysqli_query($conn,$sql);
		//$password = md5($password);
		if (mysqli_num_rows($old) > 0){
			header("location: http://localhost/BTL/register.php");	
		}
		$sql = "INSERT INTO member (username,password) VALUES ('$username','$password')";
		mysqli_query($conn,$sql);
		echo "Đã đăng ký thành công";
	}else{
		$message = "đăng kí thật bạir";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: http://localhost/BTL/register.php");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <style>
body {
	background-image: url('res/gcl.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

.container{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.heading{
    color: black;
    text-transform: uppercase;

    backface-visibility: hidden;
    margin-bottom: 60px;
}

.heading-title{
    display: block;
    font-size: 60px;
    font-weight: 400;
    letter-spacing: 33px;
    animation-name: hieu-ung-di-chuyen-sang-trai;
    animation-duration: 2s;
    animation-timing-function: ease-out;
}

.heading-sub{
    display: block;
    font-size: 20px;
    letter-spacing: 12px;
    animation-name: hieu-ung-di-chuyen-sang-phai;
    animation-duration: 2s;
    animation-timing-function: ease-out;
}

@keyframes hieu-ung-di-chuyen-sang-trai{
    0%{
        opacity: 0;
        transform: translateX(-100px);
    }
    80%{
        transform: translateX(15px);
    }
    100%{
        opacity: 1;
        transform: translate(0);
    }
}

@keyframes hieu-ung-di-chuyen-sang-phai{
    0%{
        opacity: 0;
        transform: translateX(100px);
    }
    80%{
        transform: translateX(-15px);
    }
    100%{
        opacity: 1;
        transform: translate(0);
    }
}
.btn:link,
.btn-visited{
    text-decoration: none;
    padding: 15px 40px;
    display:inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: relative;

}
.btn:hover{
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,.2);
}
.btn:active{
    transform: translateY(-2px);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}
.btn-white{
    background-color: #fff;
    color: #777;
}



</style>
<body>
 	<header>
        <div class="header">
            <div class="container">
                <h1 class="heading">
                    <span class="heading-title">cờ caro</span>
                    <span class="heading-sub">Game của các bậc hiền nhân. chiến thuật tư duy đỉnh cao game không cho con nít</span>
                </h1>
                <a href="http://localhost/BTL/index.html" class="btn btn-white">Chơi ngay</a>
            </div>
            
        </div>
	</header>
 	
		
</body>
</html>