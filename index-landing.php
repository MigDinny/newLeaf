<?php

require_once "settings.php";

$show = false;
$email = null;
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	
	DB::insert('emails', [
		'email' => $email,
		'ip' => $_SERVER['REMOTE_ADDR'],
		'ua' => $_SERVER['HTTP_USER_AGENT']
	]);
	
	$show = true;
}

?>
<html>

<head>
	<title>newLeaf</title>
	<link rel="icon" href="static\images\logo-min.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css" rel="stylesheet">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

		body {
			background-image: url('static/images/desktop.jpg');
			background-size: cover;
		}

		
		#content {
			width: 99%;
			font-family: 'Poppins';
			text-align: center;
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			
		}
		
		form .button input{
			height: 45px;
			margin: 35px 0
		}
		
		form .button {
   
   
			border-radius: 5px;
			border: none;
			color: #fff;
			font-size: 18px;
			font-weight: 500;
			letter-spacing: 1px;
			cursor: pointer;
			transition: all 0.3s ease;
			background: linear-gradient(135deg, #11101d, #391058);
		}

		form .button:hover{
			/* transform: scale(0.99); */
			background: linear-gradient(-135deg, #505050, #505051);
		}
		
		input{
			font-family: 'Poppins';
			width: 30%;
			text-align: center;
			outline: none;
			font-size: 16px;
			border-radius: 5px;
			padding: 15px;
			border: 1px solid #ccc;
			border-bottom-width: 2px;
			transition: all 0.3s ease;
		}
		input:focus, input:valid{
			border-color: #505050;
		}
		
		#img {
			width: 25%;
		}
		
		
		@media only screen and (orientation: portrait) {
			body {
				background-size: cover;
				background-image: url('static/images/mobile.jpg');
			}
			
			#img { width: 75%; margin-bottom: 150px; }
			
			input { width: 75%; height: 150px; font-size: 30px; border-radius: 18px; }
								
			#msg { font-size: 80px; margin-bottom: 150px; }
			
			.button { font-size: 30px; margin-top: 30px; border-radius: 18px; }
			
		}
		
		@media(max-width: 584px){
			.container{
			max-width: 100%;
			}
		}
		
		
	</style>
</head>
<body>
<div id="content">
<img id="img" src="static/images/logo.png" />
<h1 style="color: white;" id="msg">COMING SOON...</h1>

<?php 

	if ($show) echo "<h1 style='color: green; font-size: 20px;'>Thanks for subscribing!</h2>";

?>

<form action="" method="POST">
<input type="email" name="email" placeholder="Insert your email to be notified on release" />
<br><br>
<input class="button" type="submit" value="Submit" />
</form>

</div>

</body>
</html>