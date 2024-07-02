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
                <!-- <h3 class="card-title">Daftar Poli</h3> -->
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Poli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Treatment</a>
                    </li>
                </ul>

                <!-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div> -->
            </div>

            <div class="card-body">
                <!-- <a href="/polyclinic/create" class="btn btn-primary btn-sm mb-3">
                    + Tambah Poli
                </a> -->



                <div class="mb-5">
                    <h3>Tambah Poli</h3>
                    <?= $validation->listErrors(); ?>
                    <form class="row g-3" action="/polyclinic/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="col-md-6 mb-3">
                            <label for="name_poly" class="form-label">Nama Poli</label>
                            <input type="text" class="form-control " id="name_poly" name="name_poly" autofocus value="<?= old('name_poly'); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="poly_code" class="form-label">Kode Poli</label>
                            <!-- <input type="text" class="form-control" id="poly_code" name="poly_code"> -->
                            <input type="text" class="form-control" id="poly_code" name="poly_code" value="<?= old('poly_code'); ?>">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <hr>
                </div>

                <div class="">
                    <h3>Daftar Poli</h3>
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
                                    <td><?= $pc['id_poly']; ?></td>
                                    <td><?= $pc['name_poly']; ?></td>
                                    <td><?= $pc['poly_code']; ?></td>



                                    <td>
                                        <!-- edit button -->
                                        <a href="/polyclinic/edit/<?= $pc['slug']; ?>" class="btn btn-warning btn-sm " title="edit">
                                            <i class="fa fa-edit" title="Edit"></i>
                                        </a>
                                        &nbsp;

                                        <!-- detai button -->
                                        <a href="/polyclinic/detail/<?= $pc['slug']; ?>" class="btn btn-info btn-sm " title="detail">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        &nbsp;

                                        <!-- delete button -->
                                        <form action="/polyclinic/delete/<?= $pc['id_poly'] ?>" method="post" style="display:inline;">
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
                </div>
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