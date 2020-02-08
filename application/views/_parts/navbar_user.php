<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-konco">
	<button style="height: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<div class="btn-group">
			<button type="button" style=" font-size: 0.5em;" class="btn btn-konco dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="assets/images/icons/menu.png" style="height: 20px;"><br>Menu
			</button>
			<div class="dropdown-menu bg-konco">
				<a class="dropdown-item" href="<?php echo site_url('artikel') ?>">Artikel</a>
				<a class="dropdown-item" href="<?php echo site_url('catalog') ?>">Jual-Beli</a>
			</div>
		</div>
	</button>
	<a class="navbar-brand" href="<?php echo site_url('homepage') ?>"><img src="assets/images/Logo.png" alt="logo" style="height: 32px;"></a>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">

			</li>
		</ul>

		<form class="form-inline">
			<input class="form-control" style="height: 40px; width: 50vw; min-width: 25vw;" type="search" placeholder="Cari" aria-label="Search">
			<button class="btn btn-secondary mr-2" style="height: 40px;" type="submit"><img src="assets/images/icons/find.png" style="height: 24px;"></button>
		</form>

		<div class="btn-group">
			<button type="button" style=" font-size: 1em;" class="btn btn-konco-profil dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Profil
				<img src="assets/images/userdummy.jpg" style="border-radius: 50%; height: 30px; border-color: white;">
			</button>
			<div class="dropdown-menu dropdown-menu-right bg-konco" style="width: 15vw;">
				<div class="text-center">
					<img src="assets/images/userdummy.jpg" style="border-radius: 50%; width: 75%; margin-bottom: 5px;">
					<a style="color: black;" href="edit"><b>Dummy User</b></a>
					<a class="dropdown-item" href="edit">Edit Profil</a>
				</div>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="histori">Histori Transaksi</a>
				<div class="btn-group">
						<a class="dropdown-item" href="daftar_p">Daftar Produk</a>
						<a class="dropdown-item font-weight-bold" href="tmbhproduk">+</a>
				</div>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" style="color: red;">Keluar</a>
			</div>
		</div>
	</div>
</nav>
