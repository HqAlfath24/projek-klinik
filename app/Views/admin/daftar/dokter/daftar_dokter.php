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
                        <li class="breadcrumb-item active">Daftar Dokter</li>
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
                <h3 class="card-title">Daftar Dokter</h3>

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
                <a href="/doctor/create" class="btn btn-primary btn-sm mb-3">
                    + Tambah Dokter
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Daftar Dokter</h1>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- kalau error -->
                            <div class="alert alert-danger error" role="alert" style="display: none">
                            </div>
                            <!-- kalau sukses -->
                            <div class="alert alert-primary sukses" role="alert" style="display: none">
                            </div>
                            <!-- From Input Data -->
                            <input type="hidden" id="id_dokter">
                            <div class="modal-body">
                                <!-- <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-3 col-form-label">Id dokter</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_dokter">
                                    </div>
                                </div> -->
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Nama Dokter</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_dokter">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_kelamin">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Spesialisasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="spesialisasi">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Nomor Surat Ijin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomor_surat_ijin">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">No. Rekening</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_rekening">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">NPWP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="npwp">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Gaji</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gaji">
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
                            <th>Id Dokter</th>
                            <th>Nama Dokter</th>
                            <!-- <th>No. Reg</th> -->
                            <!-- <th>Produsen</th> -->
                            <!-- <th>Distributor</th> -->
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th>Spesialisasi</th>
                            <th>Nomor Surat Ijin</th>
                            <th>No. Rekening</th>
                            <th>NPWP</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php $i = 1; ?>
                        <?php foreach ($dokter as $d) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $d['slug']; ?></td>
                                <td><?= $d['name_doctor']; ?></td>
                                <td><?= $d['gender']; ?></td>
                                <td><?= $d['email']; ?></td>
                                <td><?= $d['phone']; ?></td>
                                <td><?= $d['address']; ?></td>
                                <td><?= $d['speciality']; ?></td>
                                <td><?= $d['license']; ?></td>
                                <td><?= $d['account_num']; ?></td>
                                <td><?= $d['taxpayer_num']; ?></td>
                                <td><?= $d['salary']; ?></td>
                                <td><?= $d['created_at']; ?></td>
                                <td><?= $d['updated_at']; ?></td>

                                <td>
                                    <!-- edit button -->
                                    <a href="/doctor/edit/<?= $d['slug']; ?>" class="btn btn-warning btn-sm " title="edit">
                                        <i class="fa fa-edit" title="Edit"></i>
                                    </a>
                                    &nbsp;

                                    <!-- detai button -->
                                    <a href="/doctor/detail/<?= $d['slug']; ?>" class="btn btn-info btn-sm " title="detail">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    &nbsp;

                                    <!-- delete button -->
                                    <form action="/doctor/delete/<?= $d['id_doctor'] ?>" method="post" style="display:inline;">
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