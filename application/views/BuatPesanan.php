<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buat Pesanan</title>
    <?php $this->load->view('_parts/resources.php') ?>
</head>
<body>
    <?php $this->load->view('_parts/navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
        <div class="col bg-dark" style="width: 500px"><button class="btn btn-dark	"></button></div>
        <div class="col">
            <h3 class="text-center">Tag PHP nama hewan</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Harga</label>
                </div>
                <div class="col">data harga dri databese</div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Jenis Kelamin</label>
                </div>
                <div class="col">data jk dri databese</div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Umur</label>
                </div>
                <div class="col">data umur dri databese</div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Jumlah</label>
                </div>
                <div class="col"><input type="number" min="1"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Lokasi Asal</label>
                </div>
                <div class="col">data lokasi dari databese</div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <label>Lokasi Tujuan</label>
                </div>
                <div class="col">data lokasi dari databese</div>
            </div>
            <hr>
            <div class="row centered">
                <div class="col"></div>
                <button>Buat Pesanan</button>
            </div>
            
        </div>
        <div class="col"></div>
        </div>
    </div>
</body>
</html>
