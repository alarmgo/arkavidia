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
	<div class="container-fluid">
		<div class="row mt-4 pt-5">
			<div class="col">
				<div class="text-left" style="font-size: 1.5rem;">
					Produk Ternak Anda (3)
					<a href="TmbhProduk" class="btn btn-outline-dark" style="position: relative; left: 70vw;">Tambah Produk</a>
					<hr align="left" style="height: 1px; background: gray; width:100%; " />
				</div>

				<div class="row mt-3" style="height: 45vh;">
					<a href="produk" class="col btn btn-cat mx-5" style="width: 45vh;">
						<div class="row m-auto">
							<img class="img-fluid edit mx-auto my-3" style="height: 25vh; width: 25vh; object-fit: cover;" src="assets/images/c1.jpeg">
						</div>
						<div class="row text-left ml-1">
							<b>Rp22.000.000</b>
						</div>
						<div class="row ml-1">
							<div style="font-size: 0.7rem;">Jual sapi/lembu limosin betina</div>
						</div>
						<div class="row ml-1 mt-5">
							<div style="font-size: 0.7rem;">Desa Pojok</div>
							<div style="font-size: 0.7rem; position:relative; right: -230px;">kemarin</div>
						</div>
					</a>
					<div class="col btn btn-cat mx-5">
						<div class="row m-auto">
							<img class="img-fluid mx-auto my-3" style="height: 25vh; width: 25vh; object-fit: cover;" src="assets/images/c2.jpg">
						</div>
						<div class="row text-left ml-1">
							<b>Rp22.000.000</b>
						</div>
						<div class="row ml-1">
							<div style="font-size: 0.7rem;">Jual sapi/lembu limosin betina</div>
						</div>
						<div class="row ml-1 mt-5">
							<div style="font-size: 0.7rem;">Desa Pojok</div>
							<div style="font-size: 0.7rem; position:relative; right: -230px;">kemarin</div>
						</div>
					</div>
					<div class="col btn btn-cat mx-5">
						<div class="row m-auto">
							<img class="img-fluid mx-auto my-3" style="height: 25vh; width: 25vh; object-fit: cover;" src="assets/images/c3.jpg">
						</div>
						<div class="row text-left ml-1">
							<b>Rp22.000.000</b>
						</div>
						<div class="row ml-1">
							<div style="font-size: 0.7rem;">Jual sapi/lembu limosin betina</div>
						</div>
						<div class="row ml-1 mt-5">
							<div style="font-size: 0.7rem;">Desa Pojok</div>
							<div style="font-size: 0.7rem; position:relative; right: -230px;">kemarin</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</body>

</html>
