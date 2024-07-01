<?php echo view('layout_admin/header'); ?>
<?= $this->section('content'); ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DAFTAR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Daftar</a></li>
                        <li class="breadcrumb-item active">Daftar Pasien</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pasien</h3>

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
                <a type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data
                </a>

                <a href="/patient/create" class="btn btn-primary btn-sm mb-3">
                    + Tambah Pasien
                </a>

                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('message'); ?>
                    </div>
                <?php endif; ?>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Daftar Pasien</h1>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- kalau error -->
                            <div class="alert alert-danger error" role="alert" style="display: none">
                            </div>
                            <!-- kalau sukses -->
                            <div class="alert alert-primary sukses" role="alert" style="display: none">
                            </div>
                            <!-- From Input Data -->
                            <input type="hidden" id="id_pasien">
                            <div class="modal-body mx-3">
                                <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-12 col-form-label">Id pasien</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_pasien">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-12 col-form-label">Nama</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="name" name="name" autofocus>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-12 col-form-label">No. Rekam Medis</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_rekam_medis">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="birthday" class="col-sm-12 col-form-label">Birthday</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="birthday" name="birthday">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="gender" class="col-sm-12 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="">--- Pilih!!! ---</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="phone" class="col-sm-12 col-form-label">Phone</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-12 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="address" class="col-sm-12 col-form-label">Alamat</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="bedge" class="col-sm-12 col-form-label">Tanda Pengenal</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="bedge" name="bedge">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_bedge" class="col-sm-12 col-form-label">Nomor Tanda Pengenal</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="no_bedge" name="no_bedge">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="insurance" class="col-sm-12 col-form-label">Asuransi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="insurance" name="insurance">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="no_insurance" class="col-sm-12 col-form-label">Nomor Asuransi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="no_insurance" name="no_insurance">
                                    </div>
                                </div>




                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:5%;">NO</th>
                            <th>Nama Pasien</th>
                            <th>Nomor Rekam Medis</th>
                            <th>Birthday</th>
                            <th>Jenis Kelamin</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tanda Pengenal</th>
                            <th>Asuransi</th>
                            <th>No. Asuransi</th>
                            <th>Dibuat</th>
                            <th>Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($patient as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['name_patient']; ?></td>
                                <td><?= $p['mrecord_num']; ?></td>
                                <td><?= $p['birthday']; ?></td>
                                <td><?= $p['gender']; ?></td>
                                <td><?= $p['phone']; ?></td>
                                <td><?= $p['email']; ?></td>
                                <td><?= $p['address']; ?></td>
                                <td><?= $p['no_badge']; ?></td>
                                <td><?= $p['insurance']; ?></td>
                                <td><?= $p['insurance_num']; ?></td>
                                <td><?= $p['created_at']; ?></td>
                                <td><?= $p['updated_at']; ?></td>


                                <td>
                                    <!-- edit button -->
                                    <!-- <button type="button" class="btn btn-warning btn-sm" onclick="location.href=('/edit_pasien')">
                                        <i class="fa fa-edit" title="Edit"></i>
                                    </button> -->
                                    <a href="/patient/edit/<?= $p['slug']; ?>" class="btn btn-warning btn-sm " title="edit">
                                        <i class="fa fa-edit" title="Edit"></i>
                                    </a>
                                    &nbsp;

                                    <!-- detai button -->
                                    <a href="/patient/detail/<?= $p['slug']; ?>" class="btn btn-info btn-sm " title="detail">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>

                                    <!-- delete button -->
                                    &nbsp;
                                    <!-- <button type="button" class="btn btn-danger btn-sm " title="Hapus" onclick="location.href=('/patient/delete/')">
                                        <i class="fa fa-trash-alt"></i>
                                    </button> -->
                                    <form action="/patient/delete/<?= $p['id_patient'] ?>" method="post" style="display:inline;">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm " title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>

<script>
    function hapus() {
        pesan = confirm('yakin data barang ini dihapus ?');
        if (pesan) {
            return true;
        } else {
            return false;
        }
    }
</script>

<?php echo view('layout_admin/footer'); ?>