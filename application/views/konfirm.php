<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form Konfirmasi</title>

	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<?php $this->load->view('_parts/navbar.php') ?>
	<div class="container-fluid px-0" style="height:100vh;">
		<div class="col-8 shadow-sm" style="border:1px solid #999999;  height: 85vh; width: 30vw; position: relative; top: 12%; left: 35%;">
			<div class="row">
				<div class="col text-center mt-3">
                    [INV/013020/001032]<br>
                    <hr>
                    <center><b>Konfirmasi Pembayaran</b></center>
				</div>
			</div>
			<div class="col text-center mt-3">
				<div class="row">
					<div class="col text-left">
						Nama Pemilik Rekening
					</div>
					<div class="col text-right">
						<b>Alan</b>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col text-left">
						No Rekening
					</div>
					<div class="col text-right">
						<b>12345678</b>
					</div>
				</div>
			
				<hr/>
				<div class="row">
					<div class="col text-left">
						Jumlah Transfer
					</div>
					<div class="col text-right">
						<b>Rp28.0000.000</b>
					</div>
				</div>
                <hr/>
                <div class="row">
					<div class="col text-left">
                    Upload Bukti Transfer <br> (Opsional)
					</div>
					<div class="col text-right">
						<b><font style="color: red">Tambah File</font></b>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col text-left">
						<a href="berhasil" class="btn btn-outline-dark text-center w-100 mt-4">Submit</a>
					</div>
				</div>
			</div>
</body>

</html>
