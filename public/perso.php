<?php
	$id = $_GET['id'];
	$all = TRUE;
?>
<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('head.php'); ?>
	</head>
	<body id="wrapper">
		<?php include('menu.php'); ?>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="box">
							<div class="box-title">
								<a href="perso.php?id=jebels"><?php echo $perso[$id]['name']; ?></a>
							</div>
							<div class="box-content no-padding">
								<div class="list-group">
									<li class="list-group-item">
										<span class="pull-xs-right"><?php echo $perso[$id]['age']; ?></span>
										Age
									</li>
									<li class="list-group-item">
										<span class="pull-xs-right"><?php echo $perso[$id]['race']; ?></span>
										Race
									</li>
									<li class="list-group-item">
										<span class="pull-xs-right"><?php echo $perso[$id]['type']; ?></span>
										Type
									</li>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="box">
							<div class="box-title-princ">
								<?php echo $perso[$id]['name']; ?>
							</div>
							<div class="box-content">
								<?php echo $perso[$id]['histoire']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<?php include('liste_perso.php'); ?>
		</div>
	</body>
</html>