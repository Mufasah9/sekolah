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
            <form action="<?= base_url('siswa/save'); ?>" method="post">

                <?= csrf_field(); ?>
                <div class="card-body">


                    <div class="row mb-3">
                        <label for="nisn" class="col-sm-2 col-form-label">Nisn</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" name="nisn" id="nisn" placeholder="masukkan nisn" value="<?= old('nisn'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nisn'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="masukkan nama" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" style="width: 100%;" name="jurusan" id="jurusan">
                                <option selected disabled value="">--Pilih Jurusan--</option>
                                <?php foreach ($jurusan as $jrs) { ?>
                                    <option value="<?php echo $jrs["id_jurusan"] ?>"><?php echo $jrs["nama_jurusan"] ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jurusan'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" style="width: 100%;" name="tahun" id="tahun">
                                <option selected disabled value="">--Pilih Tahun--</option>
                                <?php foreach ($tahun as $thn) { ?>
                                    <option value="<?php echo $thn["id_tahun"] ?>"><?php echo $thn["tahun"] ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('tahun'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control select2" style="width: 100%;" name="jenis_kelamin" id="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                                <option selected="selected">--Pilih Jenis Kelamin--</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
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