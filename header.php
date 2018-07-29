<!doctype html>
<html lang = "<?=$lang; ?>">
	<head>
		<title><?=$text_hp_title; ?></title>

		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="./assets/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="./assets/images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Required meta tags -->
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

		<!--  Fonts and icons  -->
		<link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Montserrat">
		<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Open+Sans:400,300">
		
		<!-- Layout CSS for site-->
		<link rel = "stylesheet" href = "./assets/css/layout.css">
		<link rel = "stylesheet" href = "./assets/css/style.css"> 

	</head>

	<body>
<?php if ( $showNavbar ) include("./nav.php"); ?>
		<div class = "force_min_height">
			<div class = "jumbotron jumbotron-fluid" style = "background-image: url('<?php echo $header_backround_url; ?>');">
				<div class = "container">
					<div class = "d-inline-flex flex-column" style = "background: rgba(255, 255, 255, 0.3); border-radius: 12px; padding: 12px; border: 1px solid #d3d3d3">
							<h6 class = "title"><font color = "white"><?=$text_header_small?></font></h6>
							<h1><font color = "white"><?=$text_header_big?></font></h1>
					</div>
				</div>
			</div>
