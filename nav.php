		<nav class = "navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-site">
			<div class = "container">
				<a class = "navbar-brand" href = "#">
					<img class="rounded-circle" src = "<?=$brand_logo?>" width = "30" height = "30" alt = "Brand Logo">
				</a>
				<a class = "nav-link" href = "./index.php"><i class="fas fa-home"></i> Home</a>
				<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
					<span class = "navbar-toggler-icon"></span>
				</button>
				<div class = "collapse navbar-collapse justify-content-end" id = "navbarNav">
					<ul class = "navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Aktiver Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Deaktivierter Link</a>
					</li>	
					<li class = "nav-item dropdown">
						<a class = "nav-link dropdown-toggle" href = "#" id = "dropdownId" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "true"><i class="fas fa-info-circle"></i> Dropdownmenü</a>
						<div class = "dropdown-menu dropdown-menu-right" aria-labelledby = "dropdownId">
							<a class = "dropdown-item" href = "#" target = "_new"><i class="fab fa-github"></i> Link</a>
							<a class = "dropdown-item" href = "#" target = "_new"><i class="fas fa-home"></i> Link</a>
							<div class = "dropdown-divider"></div>
							<a class = "dropdown-item" href = "#" target = "_new"><i class="fas fa-globe"></i> Link</a>
							<a class = "dropdown-item" href = "#" target = "_new"><i class="fas fa-globe"></i> Link</a>
						</div>
					</li>
					</ul>
				</div>
			</div>
		</nav>
