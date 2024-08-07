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
                        <li class="breadcrumb-item active">Daftar Obat</li>
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
                <h3 class="card-title">Daftar Obat</h3>

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

                <a href="/medicine/create" class="btn btn-primary btn-sm mb-3">
                    + Tambah Obat
                </a>

                <a href="/medicine/printStock" target="_blank" class="btn btn-secondary btn-sm mb-3">
                    Cetak Daftar Obat
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Daftar Obat</h1>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- kalau error -->
                            <div class="alert alert-danger error" role="alert" style="display: none">
                            </div>
                            <!-- kalau sukses -->
                            <div class="alert alert-primary sukses" role="alert" style="display: none">
                            </div>
                            <!-- From Input Data -->
                            <input type="hidden" id="id_obat">
                            <div class="modal-body">
                                <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-3 col-form-label">Nama Obat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Stok</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Kadaluarsa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Harga Satuan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Komposisi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail">
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
                            <th>Id Obat</th>
                            <th>Nama Obat</th>
                            <th>No. Reg</th>
                            <th>Produsen</th>
                            <th>Distributor</th>
                            <th>Stok</th>
                            <th>Kadaluarsa</th>
                            <th>Harga Satuan</th>
                            <th>Komposisi</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th style="width:15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($medicine as $mdc) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $mdc['slug']; ?></td>
                                <td><?= $mdc['name_medicine']; ?></td>
                                <td><?= $mdc['reg_num']; ?></td>
                                <td><?= $mdc['produsen']; ?></td>
                                <td><?= $mdc['distributor']; ?></td>
                                <td><?= $mdc['stok']; ?></td>
                                <td><?= $mdc['expired']; ?></td>
                                <td><?= $mdc['unit_price']; ?></td>
                                <td><?= $mdc['composition']; ?></td>
                                <td><?= $mdc['created_at']; ?></td>
                                <td><?= $mdc['updated_at']; ?></td>

                                <td>
                                    <!-- edit button -->
                                    <a href="/medicine/edit/<?= $mdc['slug']; ?>" class="btn btn-warning btn-sm " title="edit">
                                        <i class="fa fa-edit" title="Edit"></i>
                                    </a>
                                    &nbsp;

                                    <!-- detai button -->
                                    <a href="/medicine/detail/<?= $mdc['slug']; ?>" class="btn btn-info btn-sm " title="detail">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    &nbsp;

                                    <!-- delete button -->
                                    <form action="/medicine/delete/<?= $mdc['id_medicine'] ?>" method="post" style="display:inline;">
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