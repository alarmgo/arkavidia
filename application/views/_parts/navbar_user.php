<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-konco">
	<a class="navbar-brand" href="#"><img src="assets/images/Logo.png" alt="logo" style="height: 32px;"></a>
	<button style="height: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<div class="btn-group">
			<button type="button" style=" font-size: 0.5em;" class="btn btn-konco dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="assets/images/icons/menu.png" style="height: 20px;"><br>Menu
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
			</div>
		</div>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">

			</li>
		</ul>

		<form class="form-inline" style="">
			<input class="form-control" style="height: 40px; width: 50vw; min-width: 25vw;" type="search" placeholder="Cari" aria-label="Search">
			<button class="btn btn-secondary mr-2" style="height: 40px;" type="submit"><img src="assets/images/icons/find.png" style="height: 24px;"></button>
		</form>
		<div class="navbar-nav">
			<a class="btn btn-dark mr-1" href="<?php echo base_url('registrasi.php') ?>">Daftar</a>
		</div>

		<div class="btn-group">
			<button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Login
			</button>
		</div>
	</div>
</nav>
