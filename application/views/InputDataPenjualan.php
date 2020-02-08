<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input data penjual</title>
    <?php $this->load->view('_parts/resources.php') ?>
</head>
<body>
    <?php $this->load->view('_parts/navbar.php') ?>
    <div class="container-fluid row">
        <div class=col></div>
        <div class=col>
        <h2 class="mb-2 text-center">Input Data</h2>
        <hr>
        <div class="row">
            <div class="col">
                <label for="">Nama Hewan</label>
            </div>
            <div class="col">
                <input type="text">
            </div>  
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <label for="">Harga Penjualan</label>
            </div>
            <div class="col">
                <input type="text">
            </div>  
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <label for="">Jenis Kelamin</label>
            </div>
            <div class="col">
                <input type="radio" class="mr-1" checked="true">Jantan

                <input type="radio" class="mr-1" >Betina
            </div>  
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <label for="">Stok</label>
            </div>
            <div class="col">
                <input type="number">
            </div>  
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <label for="">Lokasi</label>
            </div>
            <div class="col">
                <input type="text">
            </div>  
        </div>
        <hr>
        <div class="row mb-2 text-center">
            <div class="col text-center">
                <input type="image" title="Masukkan Gambar" > 
            </div>  
        </div>
        <button>Submit</button>
        </div>
        <div class=col></div>
    
    </div>
</body>
</html>