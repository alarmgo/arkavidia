<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/res/datatables/jquery.dataTables.min.css">
    <?php $this->load->view('_parts/resources.php') ?>

    <title>Admin Konco Ternak</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

        <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>">KoncoTernak</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i> Admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div class="container-fluid">
        <div class="row mt-5" style="height: 100vh;">
            <div class="col bg-dark px-0">
                <button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">User</button>
                <button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">Transaksi</button>
                <button class="btn btn-dark text-center font-weight-light" style="width: 100%; height: 6vh; font-size: 1em;" href="#">About</button>
            </div>
            <div class="col-10 bg-light mt-2">
                <table class="display" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Username</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $u) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->username ?></td>
                                <td>
                                    <?php if ($u->id_level == 1) {
                                        echo "Pengguna";
                                    } else {
                                        echo "Programmer";
                                    } ?>
                                </td>
                                <td>
                                    <?php echo anchor('admin/edit/' . $u->id_user, 'Edit'); ?>
                                    <?php echo anchor('admin/hapus/' . $u->id_user, 'Hapus'); ?>
                                </td>
                            <?php } ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="assets/res/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>