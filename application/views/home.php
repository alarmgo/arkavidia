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
	<div class="container-fluid px-0">

		<div id="carouselExampleIndicators" class="carousel slide pt-5 mt-3" data-ride="carousel">
			<div class="carousel-overlay"></div>
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner pt-0">
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/images/1.jpg" style="height: 70vh; object-fit: cover; object-position: 0 0;" alt="First slide">
					<div class="carousel-caption">
						<h3>KONCOTERNAK.ID</h3>
						<p style="font-size: 1.1em;">Solusi penyebaran informasi dan perdagangan ternak untuk desa.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/images/2.jpg" style="height: 70vh; object-fit: cover; object-position: 0 0;" alt="Second slide">
					<div class="carousel-caption">
						<h3>KONCOTERNAK.ID</h3>
						<p style="font-size: 1.1em;">Solusi penyebaran informasi dan perdagangan ternak untuk desa.</p>
					</div>
				</div>
			</div>

		</div>
		<div>
			<hr style="height: 1px; background: black; width:95%;" />
			<p class="text-center" style="font-size: 1.5em;">INFO LEBIH LANJUT <br>
				<a href="#target"><img src="assets/images/icons/chevron.png" style="width: 2em;"></a>
			</p>

		</div>
		<div id="target"></div>
		<div class="px-5 pb-5" style="background-color: #e9e9e9" >
			<div class="text-center">
				<h1 class="pt-5 pb-3">APA ITU KONCO<font color="#8B0C0C">TERNAK</font>?<br /> <img src="assets/images/icons/line.png"></h3>
					<div class="text-center d-inline-block mb-2" style=" width: 60vw;">
						<b>KoncoTernak</b> <i>( Jawa, Sahabat-Ternak )</i>, adalah sebuah layanan untuk menghubungkan pemasok daging
						dengan para calon pembeli. Dengan KoncoTernak, pengguna baik pembeli maupun penjual
						dapat memberikan serta mendapatkan informasi seputar peternakan.
					</div>
			</div>
			<hr style="border-color: #aaaaaa; height: 1px;" />
			<div class="text-center">
				<h1 class="mb-5">Layanan Kami</h1>
			</div>
			<div class="row w-100">
				<div class="col">
					<img class="img-fluid d-block mx-auto" src="assets/images/icons/l1.png">
					<hr style="border-color: #a1a1a1 !important; height: 1px; width: 80%;">
					<div class="text-center">Transaksi dapat dilakukan pada website
						dengan jaminan keamanan.</div>
				</div>
				<div class="col">
					<img class="img-fluid d-block mx-auto" src="assets/images/icons/l2.png">
					<hr style="border-color: #a1a1a1 !important; height: 1px; width: 80%;">
					<div class="text-center">Memberikan berita peternakan terkini
						serta tips dan trik dalam mengembangkan usaha Anda.</div>
				</div>
				<div class="col">
					<img class="img-fluid d-block mx-auto" src="assets/images/icons/l3.png">
					<hr style="border-color: #a1a1a1 !important; height: 1px; width: 80%;">
					<div class="text-center">Memastikan Anda mendapatkan harga terbaik
						sehingga kedua pihak terpuaskan.</div>
				</div>
			</div>
		</div>
		<div class="row w-100 font-weight-light">
			<div class="col text-left ">
				KONCOTERNAK &copy; 2020
			</div>
			<div class="col text-right">
				Kontak Kami @ <a href="twitter.com">Twitter</a> | <a href="instagram.com">Instagram</a> | <a href="facebook.com">Facebook</a> | Hotline : (021) 888558
			</div>
		</div>


	</div>
</body>

</html>
