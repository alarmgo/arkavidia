<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/res/datatables/jquery.dataTables.min.css">
    <?php $this->load->view('_parts/resources.php') ?>
    <title>Artikel KoncoTernak</title>
    <?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
    <?php $this->load->view('_parts/navbar.php') ?>
    <div class="container-fluid">
        <div class="row mt-4 pt-5">
            <div class="col">
                <div class="position-fixed bg-white">
                    <div class="row">
                        <div class="col">
                            <div class="ml-2">
                                <b>FILTER BY:</b>
                            </div>
                            <div class="mt-5 ml-2">
                                <b>Hewan</b><br>
                            </div>

                            <form class=" ml-5">
                                <input type="checkbox" href="#" style="color: black;">Kambing (0)</input><br>
                                <input type="checkbox" href="#" style="color: black;">Sapi (20)</input><br>
                            </form>

                        </div>
                        <div class="col" style="position:absolute; left: 15vw;">
                            <hr class="" style="border-left: 1px solid black; height:100vh;">
                        </div>


                    </div>

                </div>

            </div>
            <div class="col-10">
                <div class="text-left ml-4">
                    <br>
                    <h2><b>
                            <center>ARTIKEL</center>
                        </b></h2><br>
                    <table class="display" id="example">
                        <thead>
                            <tr>
                                <th>
                                    <font>TIPS JITU MENCEGAH SAPI SAKIT</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Terkadang penyakit timbul tanpa ada tanda-tanda sehingga..</td>
                                <td>|</td>
                                <td><a href=""><b>Lanjutkan Membaca</b></a></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>
                                    <font>CARA TEPAT PENEMPATAN SAPI DI KANDANG</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kandang digunakan dalam pemeliharaan insentif yang..</td>
                                <td>|</td>
                                <td><b><a href="">Lanjutkan Membaca</a></b></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>
                                    <font>SAPI BETINA ANDA SAKIT? INI OBATNYA!</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saat sapi sedang sakit, biasanya akan ditandai dengan..</td>
                                <td>|</td>
                                <td><b><a href="">Lanjutkan Membaca</a></b></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>
                                    <font>PERKENALKAN, KAMBING BOERKA:PERSILANGAN BARU KAMBING KACANG</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>peternak kecil lebih menyukai memelihara kambing lokal untuk.. </td>
                                <td>|</td>
                                <td><b><a href="">Lanjutkan Membaca</a></b></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>
                                    <font>MENINGKATKAN BOBOT SAPI DENGAN BIAYA YANG LEBIH HEMAT</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Setiap peternak memiliki caranya tersendiri untuk..</td>
                                <td>|</td>
                                <td><b><a href="">Lanjutkan Membaca</a></b></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>
                                    <font>LAKUKAN HAL INI JIKA INGIN MENGHASILKAN SUSU KAMBING BERKUALITAS</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Animo masyarakat yang begitu besar membuat permintaan susu kambing cukup..</td>
                                <td>|</td>
                                <td><b><a href="are">Lanjutkan Membaca</a></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>