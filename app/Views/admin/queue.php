<?php echo view('layout_admin/header'); ?>
<?= $this->section('content'); ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ANTRIAN & JANJI TEMU</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Daftar</a></li>
                        <li class="breadcrumb-item active">Antrian & Janji Temu</li>
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
                        <a class="nav-link active" aria-current="true" href="#">Antrian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Janji Temu</a>
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
                    <h3>Tambah Antrian</h3>
                    <?= $validation->listErrors(); ?>
                    <form class="row g-3" action="/queue/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="col-md-6 mb-3">
                            <label for="patient_slug" class="form-label">Nama Pasien</label>
                            <!-- <input type="text" class="form-control " id="patient_slug" name="patient_slug"> -->
                            <select class="form-select form-select-sm" aria-label="Small select example" id="patient_slug" name="patient_slug">
                                <option value="???" selected>Pilih Pasien</option>
                                <?php foreach ($patient as $p) : ?>
                                    <option value="<?= $p['slug']; ?>"><?= $p['name_patient']; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="poly_code" class="form-label">Poli</label>
                            <!-- <input type="text" class="form-control" id="poly_code" name="poly_code"> -->
                            <!--  -->
                            <select class="form-select form-select-sm" aria-label="Small select example" id="poly_code" name="poly_code">
                                <option value="???" selected>Pilih Poli</option>
                                <?php foreach ($polyclinic as $pc) : ?>
                                    <option value="<?= $pc['poly_code']; ?>"><?= $pc['name_poly']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <hr>
                </div>

                <div class="">
                    <h3>Daftar Antrian</h3>
                    <table class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width:5%;">NO</th>
                                <th>Nama Pasien</th>
                                <th>Poli</th>
                                <th>Antrian</th>
                                <th>status</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php $i = 1; ?>
                            <?php foreach ($mrecord as $mr) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $mr['patient_slug']; ?></td>
                                    <td><?= $mr['poly_code']; ?></td>
                                    <td><?= $mr['num_queue']; ?></td>
                                    <td><?= $mr['status']; ?></td>
                                    <td>
                                        <!-- check button -->
                                        <button class="btn btn-primary btn-sm" onclick="printQueue(<?= $mr['id_mrecord']; ?>)">
                                            <i class="fa-solid fa-print" title="print"></i>
                                        </button>

                                        <button type="submit" class="btn btn-warning btn-sm " title="Hapus" onclick="confirmCheck('/queue/check/<?= $mr['id_mrecord']; ?>');">
                                            <i class="fa-solid fa-file-waveform" title="check"></i>
                                        </button>

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


<!-- <script>
    function hapus() {
        pesan = confirm('yakin data barang ini dihapus ?');
        if (pesan) {
            return true;
        } else {
            return false;
        }
    }
</script> -->

<!-- cek konfirmasi periksa -->
<script>
    function confirmCheck(url) {
        if (confirm('Apakah Anda yakin ingin memeriksa antrian pasien ini?')) {
            window.location.href = url;
        }
    }
</script>

<!-- cetak no antrian -->
<script>
    function printQueue(id) {
        var url = "/mrecord/printQueue/" + id;
        window.open(url, '_blank');
    }
</script>

<?php echo view('layout_admin/footer'); ?>