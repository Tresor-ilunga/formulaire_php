<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/default.css">
	<title>Mon Site PHP</title>
</head>
<body>

	<section class="container">
		
		<form method="post" action="index.php">

			<p>Incription</p>

			<?php if(isset($_GET['success'])) {
				echo '<p class="alert success">Inscription réalisée avec succès.</p>';
			}
			else if(isset($_GET['error']) && !empty($_GET['message'])) {
				echo '<p class="alert error">'.htmlspecialchars($_GET['message']).'</p>';
			} ?>

			<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"><br>
			<input type="email" name="email" id="email" placeholder="Email"><br>
			<input type="password" name="password" id="password" placeholder="Mot de passe"><br>
			<input type="submit" value="Inscription">
		
		</form>

		<div class="drop drop-1"></div>
		<div class="drop drop-2"></div>
		<div class="drop drop-3"></div>
		<div class="drop drop-4"></div>
		<div class="drop drop-5"></div>
	</section>

</body>
</html>