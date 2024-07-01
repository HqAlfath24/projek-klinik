<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Daftar Pasien</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/patient')">
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
                <form action="/patient/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_patient" class="form-label">Nama</label>
                        <input type="text" class="form-control " id="name_patient" name="name_patient" autofocus value="<?= old('name_patient'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mrecord_num" class="form-label">No. Rekam Medis</label>
                        <input type="number" class="form-control" id="mrecord_num" name="mrecord_num" value="<?= old('mrecord_num'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= old('birthday'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <!-- <input type="checkbox" class="form-control" id="gender" name="gender"> -->
                        <input type="radio" name="gender" value="female" <?= old('gender') == 'female' ? 'checked' : ''; ?>>Perempuan
                        <input type="radio" name="gender" value="male" <?= old('gender') == 'male' ? 'checked' : ''; ?>>Laki-laki
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= old('phone'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <!-- <input type="text" class="form-control" id="email" name="email"> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= old('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= old('address'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="badge" class="form-label">Tanda Pengenal</label>
                        <input type="text" class="form-control" id="badge" name="badge" value="<?= old('badge'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="no_badge" class="form-label">No. Tanda Pengenal</label>
                        <input type="number" class="form-control" id="no_badge" name="no_badge" value="<?= old('no_badge'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="insurance" class="form-label">Asuransi</label>
                        <input type="text" class="form-control" id="insurance" name="insurance" value="<?= old('insurance'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="insurance_num" class="form-label">No. Asuransi</label>
                        <input type="number" class="form-control" id="insurance_num" name="insurance_num" value="<?= old('insurance_num'); ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <!-- /.card -->

        </div>
    </section>
    <!-- /.content -->
</div>