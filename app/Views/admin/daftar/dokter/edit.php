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
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/doctor')">
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
                <form action="/doctor/update/<?= $doctor['id_doctor']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_doctor" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name_doctor')) ? 'is-invalid' : ''; ?>" id="name_doctor" name="name_doctor" autofocus value="<?= $doctor['name_doctor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <!-- <input type="checkbox" class="form-control" id="gender" name="gender"> -->
                        <input type="radio" name="gender" <?php if (isset($doctor['gender']) && $doctor['gender'] == "female") echo "checked"; ?> value="female">Perempuan
                        <input type="radio" name="gender" <?php if (isset($doctor['gender']) && $doctor['gender'] == "male") echo "checked"; ?> value="male">Laki-laki
                    </div>
                    <div class=" mb-3">
                        <label for="email" class="form-label">Email</label>
                        <!-- <input type="text" class="form-control" id="email" name="email"> -->
                        <input type="email" class="form-control" id="email" name="email" value="<?= $doctor['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= $doctor['phone']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $doctor['address']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="speciality" class="form-label">Spesialisasi</label>
                        <input type="text" class="form-control" id="speciality" name="speciality" value="<?= $doctor['speciality']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="license" class="form-label">No. Lisensi</label>
                        <input type="number" class="form-control" id="license" name="license" value="<?= $doctor['license']; ?>" readonly>
                        <div class="mb-3">
                            <label for="account_num" class="form-label">No. Rekening</label>
                            <input type="number" class="form-control" id="account_num" name="account_num" value="<?= $doctor['account_num']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="taxpayer_num" class="form-label">NPWP</label>
                            <input type="number" class="form-control" id="taxpayer_num" name="taxpayer_num" value="<?= $doctor['taxpayer_num']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Gaji</label>
                            <input type="number" class="form-control" id="salary" name="salary" value="<?= $doctor['salary']; ?>" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                </form>

            </div>
            <!-- /.card -->

        </div>
    </section>
    <!-- /.content -->
</div>