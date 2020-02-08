<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="assets/res/css/bootstrap.min.css" rel="stylesheet">
	<title>Admin Konco Ternak</title>
	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

		<a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>">KoncoTernak</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">

			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i> Admin
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<div class="container-fluid">
		<div class="row mt-5" style="height: 100vh;">
			<div class="col bg-dark px-0">
				<button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">User</button>
				<button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">Transaksi</button>
				<button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">About</button>



			</div>
			<div class="col-10 bg-light">

			</div>
		</div>
	</div>

</body>

<script src="assets/res/jquery/jquery.min.js'"></script>
<script src="assets/res/boostrap.bundle.min.js'"></script>
<script src="assets/res/admin/js/sb-admin.min.js'"></script>

</html>
