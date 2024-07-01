<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Daftar Pasien</h1>
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
                <form action="/employee/update/<?= $employee['id_emp']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_emp" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name_emp')) ? 'is-invalid' : ''; ?>" id="name_emp" name="name_emp" autofocus value="<?= $employee['name_emp']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $employee['birthday']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <!-- <input type="checkbox" class="form-control" id="gender" name="gender"> -->
                        <input type="radio" name="gender" <?php if (isset($employee['gender']) && $employee['gender'] == "female") echo "checked"; ?> value="female">Perempuan
                        <input type="radio" name="gender" <?php if (isset($employee['gender']) && $employee['gender'] == "male") echo "checked"; ?> value="male">Laki-laki
                    </div>
                    <div class="mb-3">
                        <label for="emp_num" class="form-label">No. Pegawai</label>
                        <input type="number" class="form-control" id="emp_num" name="emp_num" value="<?= $employee['emp_num']; ?>" readonly>
                    </div>
                    <div class=" mb-3">
                        <label for="email" class="form-label">Email</label>
                        <!-- <input type="text" class="form-control" id="email" name="email"> -->
                        <input type="email" class="form-control" id="email" name="email" value="<?= $employee['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= $employee['phone']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $employee['address']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="account_num" class="form-label">No. Rekening</label>
                        <input type="number" class="form-control" id="account_num" name="account_num" value="<?= $employee['account_num']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="taxpayer_num" class="form-label">NPWP</label>
                        <input type="number" class="form-control" id="taxpayer_num" name="taxpayer_num" value="<?= $employee['taxpayer_num']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Gaji</label>
                        <input type="number" class="form-control" id="salary" name="salary" value="<?= $employee['salary']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Role</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="role" name="role">
                            <option>Pilih salah satu</option>
                            <option value="admin" <?php if (isset($employee['role']) && $employee['role'] == "admin") echo "selected"; ?>>Admin</option>
                            <option value="superadmin" <?php if (isset($employee['role']) && $employee['role'] == "superadmin") echo "selected"; ?>>Super Admin</option>
                            <option value="perawat" <?php if (isset($employee['role']) && $employee['role'] == "perawat") echo "selected"; ?>>Perawat</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>

            </div>
            <!-- /.card -->

        </div>
    </section>
    <!-- /.content -->
</div>