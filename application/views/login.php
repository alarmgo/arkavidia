<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Masuk KoncoTernak</title>

	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<div class="container-fluid">
		<div class="shadow-lg mt-5" style="width:75vw; height:75vh; margin: auto;">
			<div class="row w-100 h-100">
				<div class="col mx-auto my-auto pl-5">
					<img class="img-fluid" style="object-fit: cover; object-position: 0 0; height: 80%;" src="assets/images/2.jpg">
				</div>
				<div class="col m-auto">
					<div class="text-center" style="font-size: 1.5rem;">
						Masuk <b>Konco<font color="#8B0C0C">Ternak</font></b>
					</div>
					<div class="mx-auto mt-5 text-left">
						Solusi penyebaran informasi dan perdagangan ternak untuk desa.
					</div>
					<div class="btn btn-input shadow text-left mt-3 w-100" style="height: 4rem;">
						<font size="2rem">Username</font> <br>
						<input type="email" name="username" placeholder="Masukkan Username" style="height: 1rem; width: 100%; border: 0; outline: 0; border-bottom: 1px solid gray">
					</div>
					<div class="btn btn-input shadow text-left mt-1 w-100" style="height: 4rem;">
						<font size="2rem">Password</font> <br>
						<input type="password" name="password" placeholder="Masukkan Password" style="height: 1rem; width: 100%; border: 0; outline: 0; border-bottom: 1px solid gray">
					</div>
					<div class="text-right">
						<a href="homepage" class="btn btn-outline-dark mt-3">Masuk</a>
						<div class="text-left mt-3" style="font-size:0.8rem;"><a href="forget">Lupa Password</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
