<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<?php $this->load->view('_parts/navbar.php') ?>
	<div class="container-fluid px-0" style="height:100vh;">
		<div class="col-8 bg-white shadow-lg" style="border-radius: 1rem; height: 85vh; width: 30vw; position: relative; top: 12%; left: 35%;">
			<div class="row">
				<div class="col text-center mt-3">
					<h5>Edit Profil</h5>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<img src="assets/images/userdummy.jpg" class="mt-3 img-thumbnail shadow" style="border-radius: 50%; width: 40%; z-index: 15;">
					<a href="#">
						<img src="assets/images/placehold.png" style="border: 3px solid white; width:10%; border-radius: 50%; position: absolute; top: 80%; left: 55%; z-index: 20; ">
					</a>

				</div>
			</div>
			<div class="row text-left mx-auto mt-3 text-secondary font-weight-light">
				Username <br>
				<input type="text" name="username" value="dummyuser" style="height: 1.5rem; width: 90%; border: 0; outline: 0; border-bottom: 1px solid gray">
				<a href="#" style="color:black; margin-left: 0.5rem;">Edit</a>
			</div>
			<div class="row text-left mx-auto mt-3 text-secondary font-weight-light">
				Email Aktif <br>
				<input type="text" name="username" value="dummyuser@example.com" style="height: 1.5rem; width: 90%; border: 0; outline: 0; border-bottom: 1px solid gray">
				<a href="#" style="color:black; margin-left: 0.5rem;">Edit</a>
			</div>
			<div class="row text-left mx-auto mt-3 text-secondary font-weight-light">
				Alamat Lengkap <br>
				<input type="text" name="username" value="Desa Pojok, Kec. Ponggok" style="height: 1.5rem; width: 90%; border: 0; outline: 0; border-bottom: 1px solid gray">
				<a href="#" style="color:black; margin-left: 0.5rem;">Edit</a>
			</div>
			<div class="row text-left mx-auto mt-3 text-secondary font-weight-light w-100 shadow-sm">
				<a class="btm btn-input w-100 " href="#" style="color: black;">
					<div class="mx-2">
						Password <br>
						<div href="#" style="color:black; margin-left: 0.5rem;">Ubah Password</div>
					</div>
				</a>
			</div>
			<div class="row text-right mx-auto mt-3">
				<a href="#" class="btn btn-outline-dark" style="position: relative; left:80%">Simpan</a>
			</div>
		</div>
</body>

</html>
