<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>

    <?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
    <?php $this->load->view('_parts/navbar.php') ?>
    <div class="container-fluid px-0" style="height:100vh;">
        <br><br><br>
        <div class="alert alert-light ml-5 w-25" role="alert">
            Tambah Produk
        </div>
        <div class="col-8 shadow-sm" style="border:1px solid #999999;  height: 37vh; width: 130vw; position: relative; top: 2%; left: 17%;">
            <div class="row">
                <div class="col text-left mt-3">
                    Upload Produk
                    <hr>
                </div>
            </div>
            <div class="col text-center mt-3">
                <div class="row">
                    <div class="col">
                        Utama
                        <a href="#">
                            <img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
                        </a>
                    </div>
                    <div class="col">
                        Depan
                        <a href="#">
                            <img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
                        </a>
                    </div>
                    <div class="col">
                        Samping
                        <a href="#">
                            <img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
                        </a>
                    </div>
                    <div class="col">
                        Atas
                        <a href="#">
                            <img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-3">
                        <h5>+ Pilih Gambar Produk</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        atau tarik gambar disini
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 shadow-sm mt-3" style="border:1px solid #999999;  height: 37vh; width: 130vw; position: relative; top: 2%; left: 17%;">
            <div class="row">
                <div class="col text-left mt-3">
                    Informasi Produk
                    <hr>
                </div>
            </div>
            <div class="col text-center mt-3">
                <div class="row">
                    <div class="col-3 text-left">
                        Nama Produk
                    </div>
                    <div class="col-9">
                        <input type="text" name="namaproduk" placeholder="Masukkan Nama Produk" style="height: 1rem; width: 100%; border: 0; outline: 0; border-bottom: 1px solid gray">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3 text-left">
                        Stok Produk
                    </div>
                    <div class="col-9">
                        <input type="number" name="stokproduk" placeholder="Masukkan Stok Produk" style="height: 1rem; width: 100%; border: 0; outline: 0; border-bottom: 1px solid gray">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3 text-left">
                        Harga Produk
                    </div>
                    <div class="col-9">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Masukkan Harga Produk" aria-label="Masukkan Harga Produk">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 shadow-sm mt-3 mb-5" style="border:1px solid #999999;  height: 50vh; width: 130vw; position: relative; top: 2%; left: 17%;">
            <div class="row">
                <div class="col text-left mt-3">
                    Deskripsi Produk
                    <hr>
                </div>
            </div>
            <div class="col text-center mt-1">
                <div class="row">
                    <div class="col-3 text-left">
                        Kondisi Produk
                    </div>
                    <div class="col-9 text-left">
                        <label class="radio-inline ml-3"><input type="radio" name="optradio">Sehat</label>
                        <label class="radio-inline ml-3"><input type="radio" name="optradio">Sakit</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 text-left">
                        Deskripsi Produk
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label for="comment"></label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4"> </div>
            <div class="col-4">
                <a href="berhasiltmbh" class="btn btn-outline-dark text-center w-100 mb-3">Simpan & Tambah Baru</a>
            </div>
            <div class="col-4"> </div>
        </div>
    </div>
</body>

</html>