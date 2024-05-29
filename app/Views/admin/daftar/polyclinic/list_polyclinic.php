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
                        <li class="breadcrumb-item active">Daftar Poli</li>
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
                <h3 class="card-title">Daftar Poli</h3>

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
                <a type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data

                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Daftar Poli</h1>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- kalau error -->
                            <div class="alert alert-danger error" role="alert" style="display: none">
                            </div>
                            <!-- kalau sukses -->
                            <div class="alert alert-primary sukses" role="alert" style="display: none">
                            </div>
                            <!-- From Input Data -->
                            <input type="hidden" id="id_poli">
                            <div class="modal-body">
                                <!-- <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-3 col-form-label">Id Poli</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_poli">
                                    </div>
                                </div> -->
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Nama Poli</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_poli">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Kode Poli</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kode_poli">
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
                            <th>Id Poli</th>
                            <th>Nama Poli</th>
                            <th>Kode Poli</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php $i = 1; ?>
                        <?php foreach ($polyclinic as $pc) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $pc['slug']; ?></td>
                                <td><?= $pc['name_poly']; ?></td>
                                <td><?= $pc['poly_code']; ?></td>



                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" onclick="location.href=('/edit_poli')">
                                        <i class="fa fa-edit" title="Edit"></i>
                                    </button>
                                    &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm " title="Hapus">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>

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