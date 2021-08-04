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
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= base_url('user/update/' . $user['id_user']); ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>" id="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" value="<?= $user['password']; ?>" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control select2" style="width: 100%;" aria-label="Default select example" name="level" value="<?= $user['level']; ?>" id="level">
                            <option selected>--Pilih Level--</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>

                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.content-wrapper -->