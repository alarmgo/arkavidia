<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pembayaran Terkonfirmasi</title>

	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<?php $this->load->view('_parts/navbar.php') ?>
	<div class="container-fluid px-0" style="height:100vh;">
		<div class="col-8 shadow-sm" style="border:1px solid #999999;  height: 35vh; width: 60vw; position: relative; top: 25%; left: 20%;">
			<div class="row">
				<div class="col text-center mt-3">
					[INV/013020/001032]<br>
					<h5>Sapi Limousine</h5>
				</div>
			</div>
			<hr align="left" style="height: 1px; background: gray; width:100%; " />
			<div class="row">
				<div class="col text-center">
					<h2>Pembayaran telah berhasil dikonfirmasi!</h2><br>
					Selanjutnya, traksaksi akan diteruskan ke penjual.
				</div>
			</div>

		</div>
</body>

</html>
