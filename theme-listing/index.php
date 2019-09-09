<!DOCTYPE html>
<html lang="en">
<head>
	<title>Theme Update Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<?php
		$api_return = file_get_contents('http://api.wordpress.org/themes/info/1.1/?action=query_themes&request[author]=8degreethemes&request[fields][last_updated]=true&request[fields][parent]=true&request[fields][sections]=true&request[per_page]=40&request[browse]=updated&request[fields][downloaded]=true&request[fields][active_installs]=true');
		$themes = json_decode($api_return);
	?>
	
	<?php if( !empty( $themes ) ) : ?>
		<?php $all_themes = $themes->themes; $sno = 1; ?>
			<div class="limiter">
				<div class="container-table100">
					<div class="wrap-table100">
							<div class="table">

								<div class="row header">
									<div class="cell">
										SNo.
									</div>
									<div class="cell">
										Theme Name
									</div>
									<div class="cell">
										Last Updated
									</div>
									<div class="cell">
										Version
									</div>
									<div class="cell">
										Active Installs
									</div>
									<div class="cell">
										Total - % Active
									</div>
									<div class="cell">
										Rating
									</div>
									<div class="cell">
										Theme Type
									</div>
								</div>

								<?php foreach( $all_themes as $theme ) : ?>
									<?php
									//print_r($theme);
										//$rel_date = date_create($theme->released);
										$num_date = date_create($theme->last_updated);
										$earlier = new DateTime($theme->last_updated);
										$later = new DateTime(date('Y-m-d'));
										$diff = $later->diff($earlier)->format("%a");
										$row_class = '';
										if( $diff < 1 ) {
											$row_class = 'stage';
										} elseif( $diff < 7 ) {
											$row_class = 'stage0';
										} elseif( $diff < 14 ) {
											$row_class = 'stage1';
										} elseif( $diff < 30 ) {
											$row_class = 'stage2';
										}else {
											$row_class = 'stage3';
										}
									?>
									<div class="row <?php echo $row_class; ?>">
										<div class="cell" data-title="Serial No">
											<?php echo $sno; ?>
										</div>
										<div class="cell" data-title="Theme Name">
											<?php echo $theme->name; ?>
										</div>
										<div class="cell" data-title="Last Updated">
											<?php echo date_format($num_date, 'j M Y'); ?>
										</div>
										<div class="cell" data-title="Theme Version">
											<?php echo $theme->version; ?>
										</div>
										<div class="cell" data-title="Active Installs">
											<?php echo $theme->active_installs; ?>
										</div>
										<div class="cell" data-title="Total Dwnld">
											<?php
											$aPer = (($theme->active_installs)/($theme->downloaded))*100;
											echo $theme->downloaded." - ". number_format($aPer,2); ?>
										</div>
										<div class="cell" data-title="Ratings">
											<?php echo $theme->rating.'% in '.$theme->num_ratings; ?>
										</div>
										<?php $cell_class = isset($theme->parent) ? ' child' : ' child parent'; ?>
										<div class="cell<?php echo $cell_class; ?>" data-title="Child Theme">
											<a href="https://wordpress.org/support/theme/<?php echo $theme->slug; ?>/">
											<?php if(isset($theme->parent)) :
												echo "Child Theme";
											else:
												echo "Parent Theme";
											endif; ?>
										</a>
										</div>
									</div>
									<?php $sno++; ?>
								<?php endforeach; ?>
							</div>
					</div>
				</div>
			</div>
	<?php endif; ?>
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>