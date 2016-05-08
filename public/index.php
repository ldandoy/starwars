<?php include('data.php'); ?>
<?php
	$all = TRUE;
	$limit = TRUE;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('head.php'); ?>
	</head>
	<body id="wrapper">
		<div class="section_bg section">
			<?php include('menu.php'); ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="title_section">Résumé des évènements</h1>
						<h2 class="title">Sur la planète ORDMANTEL</h2>
						<ul>
							<li>Récupération vaisseau HWK1000</li>
							<li>Départ pour CORUSCANT</li>
						</ul>
						<h1 class="title">Sur la planète CORUSCANT</h2>
						<ul>
							<li>Jebels et entre dans la casse.</li>
							<li>Se fait mettre dehors par le propriétaire de la casse.</li>
							<li>Jebels tombe nez à nez avec un droïd je sais plus quoi.</li>
							<li>Ils se font poursuivre hors de la casse et court après avoir volé un scooter jusqu'au hagar des vaisseau</li>
							<li>Il se cache dans un vaisseau qui est entrain de décoller</li>
						</ul>
						<h2 class="title">Sur la planète GAMOR</h2>
						<ul>
							<li>Ravitaillement sur la planète et achat de ration de survie</li>
						</ul>
						<h2 class="title">Sur la station KWENN</h2>
						<ul>
							
						</ul>
						<h2 class="title">Sur la planète SHOLGANA</h2>
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<?php include('liste_perso.php'); ?>
		</div>

		<div class="section">
			<?php include('liste_planete.php'); ?>
		</div>
		<div class="section">
			<?php include ('liste_vaisseau.php'); ?>
		</div>
		<?php include('foot.php'); ?>
	</body>
</html>