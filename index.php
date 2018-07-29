<?php
    if (isset($_GET["lang"])) $lang = $_GET["lang"];
    else $lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

    if (file_exists("./lang/" . $lang . ".txt.php")) include "./lang/" . $lang . ".txt.php";
    else include "./lang/en.txt.php";

	include("./settings/settings.php");
    include("./header.php"); 
?>
			<!-- Infoleiste -->
			<div class = "alert info-text" role = "alert">
				<div class = "container">
					<b>Herzlich Willkommen!</b>
				</div>
			</div>

			<div class = "container-fluid flex1" id = "Content">

				<!-- Cards -->
				<div class="container">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Nutzungshinweis!</strong> Dieses Template steht jedem frei zur Verfügung.<br>
						Lediglich ein Hinweis mit einem Link zu dem Projekt auf Github im Footer ist bindend und ausreichend!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<h1>Cards</h1>
					<div class="row">
						<div class="container col-sm-12 col-lg-6 mb-5"> <!-- linke Spalte -->
							<div class="card h-100">
								<div class="cover">
									<img class="card-img-top" src="<?php echo $header_backround_url; ?>" alt="Card image cap">
								</div>
								<div class="user">
									<img class="rounded-circle" src="./assets/images/brand_logo.jpg" alt="Logo Brand">
								</div>
								<div class="card-body">
									<h5 class="card-subtitle text-center text-info">Überschrift</h5>
									<h6 class="card-title text-center">Titel</h6>
									<p class="card-text text-center">Beschreibung</p>
								</div>
								<div class="card-footer">
								<h6 class="card-title text-center"><a href="#">Link#1</a></h6>									
								</div>
							</div>
						</div>
						<div class="container col-sm-12 col-lg-6 mb-5"> <!-- rechte Spalte -->
							<div class="card h-100">
								<div class="cover">
									<img class="card-img-top" src="<?php echo $header_backround_url; ?>" alt="Card image cap">
								</div>
								<div class="user">
									<img class="rounded-circle" src="./assets/images/brand_logo.jpg" alt="Logo Brand">
								</div>
								<div class="card-body">
									<h5 class="card-subtitle text-center text-">Überschrift</h5>
									<h6 class="card-title text-center">Titel</h6>
									<p class="card-text text-center">Beschreibung</p>
								</div>
								<div class="card-footer">
								<h6 class="card-title text-center"><a href="#">Link#1</a></h6>									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<h1>Tabs</h1>
					<div class = "nav nav-tabs nav-space justify-content-center nav-tabs-site">
						<a class = "nav-item nav-link active" id = "erster-tab" data-toggle = "tab" href = "#erster" role = "tab" aria-controls = "erster" aria-selected = "true"><i class="fab fa-500px"></i> 1. Tab</a>
						<a class = "nav-item nav-link" id = "zweiter-tab" data-toggle = "tab" href = "#zweiter" role = "tab" aria-controls = "zweiter" aria-selected = "false"><i class="fab fa-apple"></i> 2. Tab</a>
						<a class = "nav-item nav-link" id = "dritter-tab" data-toggle = "tab" href = "#dritter" role = "tab" aria-controls = "dritter" aria-selected = "false"><i class="fab fa-android"></i> 3. Tab</a>
						<a class = "nav-item nav-link" id = "vierter-tab" data-toggle = "tab" href = "#vierter" role = "tab" aria-controls = "vierter" aria-selected = "false"><i class="fab fa-docker"></i> 4. Tab</a>
						<a class = "nav-item nav-link" id = "fuenfter-tab" data-toggle = "tab" href = "#fuenfter" role = "tab" aria-controls = "fuenfter" aria-selected = "false"><i class="fab fa-github"></i> 5. Tab</a>
					</div>

					<div class = "tab-content" id = "myTabContent">
						<div id = "erster" class = "tab-pane fade show active mb-5" role = "tabpanel" aria-labelledby = "erster-tab">
							<div class="container">
								Text Tab #1
							</div>
						</div>		
						<div id = "zweiter" class = "tab-pane fade mb-5" role = "tabpanel" aria-labelledby = "zweiter-tab">
							<div class="container">
								Text Tab #2
							</div>
						</div>
						<div id = "dritter" class = "tab-pane fade mb-5" role = "tabpanel" aria-labelledby = "dritter-tab">
							<div class="container">
							Text Tab #3
							</div>
						</div>
						<div id = "vierter" class = "tab-pane fade mb-5" role = "tabpanel" aria-labelledby = "vierter-tab">
							<div class="container">
							Text Tab #4
							</div>
						</div>
						<div id = "fuenfter" class = "tab-pane fade mb-5" role = "tabpanel" aria-labelledby = "fuenfter-tab">
							<div class="container">
							Text Tab #5
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<h1>Alerts</h1>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>DANGER!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						<strong>INFO!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>WARNING!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>SUCCESS!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						<strong>PRIMARY!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="alert alert-secondary alert-dismissible fade show" role="alert">
						<strong>SECONDARY!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>

			</div> <!-- Ende container-fluid flex1 -->
<?php include("./footer.php"); ?>
