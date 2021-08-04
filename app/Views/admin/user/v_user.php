<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title;  ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title;  ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <!-- /.content-header -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="<?= base_url('user/add_user') ?>" class="btn btn-success btn-x2"><i class="fa fa-plus"></i></a>
                <?php
                if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success');  ?>
                    </div>
                <?php
                }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $key => $data) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['username']; ?></td>
                                <td><?= $data['password']; ?></td>
                                <td><?= $data['level']; ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit/' . $data['id_user']); ?>" class="btn btn-warning btn-x4"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('user/delete/' . $data['id_user']); ?>" onclick="return confirm('apakah anda akan menghapus data ini')" class="btn btn-danger btn-x4"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>



</div>
<!-- /.content-wrapper -->