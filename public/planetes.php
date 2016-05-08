<?php $id = $_GET['id']; ?>
<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('head.php'); ?>
	</head>
	<body id="wrapper">
		<?php include('menu.php'); ?>
		<div class="section">
			<?php include('liste_planete.php'); ?>
		</div>
	</body>
</html>