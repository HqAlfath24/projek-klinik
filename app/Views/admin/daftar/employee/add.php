<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Daftar Pegawai</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/employee')">
                    <i class="fa fa-backward"></i> Kembali
                </button>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <?= $validation->listErrors(); ?>
                <form action="/employee/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_emp" class="form-label">Nama</label>
                        <input type="text" class="form-control " id="name_emp" name="name_emp" autofocus value="<?= old('name_emp'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= old('birthday'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <!-- <input type="checkbox" class="form-control" id="gender" name="gender"> -->
                        <input type="radio" name="gender" value="female">Perempuan
                        <input type="radio" name="gender" value="male">Laki-laki
                    </div>
                    <div class="mb-3">
                        <label for="emp_num" class="form-label">No. Pegawai</label>
                        <input type="number" class="form-control" id="emp_num" name="emp_num" value="<?= old('emp_num'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <!-- <input type="text" class="form-control" id="email" name="email"> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= old('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= old('phone'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= old('address'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="account_num" class="form-label">No. Rekening</label>
                        <input type="number" class="form-control" id="account_num" name="account_num" value="<?= old('account_num'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="taxpayer_num" class="form-label">NPWP</label>
                        <input type="number" class="form-control" id="taxpayer_num" name="taxpayer_num" value="<?= old('taxpayer_num'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Gaji</label>
                        <input type="number" class="form-control" id="salary" name="salary" value="<?= old('salary'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Role</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="role" name="role">
                            <option selected>Pilih salah satu</option>
                            <option value="admin">Admin</option>
                            <option value="superadmin">Super Admin</option>
                            <option value="perawat">Perawat</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <!-- /.card -->

        </div>
    </section>
    <!-- /.content -->
</div>