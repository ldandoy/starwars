<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="title_section">Les personnages</h1>
		</div>
	</div>
	<div class="row">
		<?php foreach ($perso as $key => $value) {
			?>
				<div class="col-lg-3">
					<div class="box">
						<div class="box-title">
							<a href="perso.php?id=<?php echo $key; ?>"><?php echo $value["name"] ?></a>
						</div>
						<div class="box-content no-padding">
							<div class="list-group">
								<li class="list-group-item">
									<span class="pull-xs-right"><?php echo $value["age"] ?></span>
									Age
								</li>
								<li class="list-group-item">
									<span class="pull-xs-right"><?php echo $value["race"] ?></span>
									Race
								</li>
								<li class="list-group-item">
									<span class="pull-xs-right"><?php echo $value["type"] ?></span>
									Type
								</li>
							</div>
						</div>
					</div>
				</div>
			<?php
		} ?>
		
	</div>
	<?php if (isset($all)) { ?>
		<div class="row">
			<div class="col-lg-12">
				<a href="persos.php" class="btn btn-default pull-right">Tous >></a>
			</div>
		</div>
	<?php } ?>
</div>