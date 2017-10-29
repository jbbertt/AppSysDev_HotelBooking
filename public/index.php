
</!DOCTYPE html PUBLIC>
<html>
<head>
	<title>Hotel Booking System</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/public.css">
</head>

<body>
	<div id ="header">
		<?php 
			include("../includes/layouts/header.php");
		?>
	</div>
		<div id ="main">
			<div id ="navigation">
				<?php 
					include("../includes/layouts/index_navigation.php");
				 ?>
			</div>
			<div id ="page">
				
				
				<div class="home">
					<p>Home design here</p>
				</div>

				<div class="About">
					<?php 
					include("pages/about.php");
					 ?>
				</div>

				<div class="bookroom">
					<p> redirect to Book room.php</p>
				</div>

				<div class="roomlist">
					<p>do room list</p>
				</div>

				<div class="contactus">
					<?php 
					include("pages/contact.php");
					 ?>
				</div>
				</div>

				<div class="register">
					<?php 
					include("pages/registration.php");
					 ?>
				</div>

				<div class="login">
					<?php 
					include("pages/login.php");
					 ?>
				</div>
		</div>

	<div id ="footer">
		<?php 
			include("../includes/layouts/footer.php");
		?>
	</div>

</body>
</html>