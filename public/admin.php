
</!DOCTYPE html PUBLIC>
<html>
<head>
	<title>Admin Page</title>
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

					include("../includes/layouts/admin_navigation.php");
				 ?>
			</div>
			<div id ="page">
				<p>Page ni dre</p>
			</div>
		</div>

	<div id ="footer">
		<?php 
			include("../includes/layouts/footer.php");
		?>
	</div>

</body>
</html>