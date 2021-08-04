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
    <!-- /.content-header -->

    <div class="container-fluid">
        <!-- Main content -->

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
            </div>

            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success');  ?>
                </div>
            <?php
            }
            ?>
            <form action="" method="post">

                <?= csrf_field(); ?>
                <div class="card-body">


                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;" name="jurusan" id="jurusan">
                                <option selected disabled value="">--Pilih Jurusan--</option>
                                <?php
                                foreach ($jurusan as $jrs) {
                                    echo '<option id="id_jurusan" value="' . $jrs["id_jurusan"] . '">' . $jrs["nama_jurusan"] . ' </option>';
                                }
                                ?>
                            </select>

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;" name="tahun" id="tahun">
                                <option selected disabled value="">--Pilih Jurusan--</option>
                                <?php
                                foreach ($tahun as $thn) {
                                    echo '<option id="id_tahun" value="' . $thn["id_tahun"] . '">' . $thn["tahun"] . ' </option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;" name="nama" id="nama">
                                <option selected value="">--Pilih Nama Siswa--</option>
                            </select>

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat" value="<?= old('alamat'); ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>


        </div>

    </div> <!-- conten -->



</div>
<!-- /.content-wrapper -->