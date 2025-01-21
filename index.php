</<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		पुस्तकOSH
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/logo.jpeg">
		</div>


		<?php
		if(isset($_SESSION['login_user']))
		{
			?>	
				<nav>
					<ul>
						<li style="font-size:45px";><a>पुस्तकOSH</a></li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						<li style="font-size:25px"><a href="index.php">HOME</a></li>
						<li style="font-size:25px"><a href="books.php">BOOKS</a></li>
						<li style="font-size:25px"><a href="logout.php">LOGOUT</a></li>
						<li style="font-size:25px"><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
				<nav>
					<ul>
						<li style="font-size:45px";><a>पुस्तकOSH</a></li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						<li style="font-size:25px"><a href="index.php">HOME</a></li>
						<li style="font-size:25px"><a href="books.php">BOOKS</a></li>
						<li style="font-size:25px"><a href="adminlogin.php">LOGIN</a></li>
						<li style="font-size:25px"><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		?>

		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">“She found heaven in a bookstore and got lost in the pages.”</h1><br><br>
			</div>
		</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email: पुस्तकOSH@gmail.com <br>
				Mobile: +91**********
			</p>
		</footer>
	</div>
</body>

</html>