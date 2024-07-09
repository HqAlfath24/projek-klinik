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

                <div class="card" id="chart">
                    <!-- <canvas id="chLine"></canvas> -->
                </div>



                <div class="mb-5">
                    <h3>Tambah Antrian</h3>
                    <?= $validation->listErrors(); ?>
                    <form class="row g-3" action="/queue/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="col-md-6 mb-3">
                            <label for="patient_id" class="form-label">Nama Pasien</label>
                            <!-- <input type="text" class="form-control " id="patient_id" name="patient_id"> -->
                            <select id="patient" name="patient_id" class="form-control" style="width: 100%;">
                                <!-- Option will be loaded dynamically -->
                            </select>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="poly_id" class="form-label">Poli</label>
                            <!-- <input type="text" class="form-control" id="poly_id" name="poly_id"> -->
                            <!--  -->
                            <select class="form-select form-select-sm" aria-label="Small select example" id="poly_id" name="poly_id">
                                <option selected>Pilih salah satu</option>
                                <?php foreach ($polyclinic as $pc) : ?>
                                    <option value="<?= $pc['id_poly']; ?>"><?= $pc['name_poly']; ?></option>
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
                                <th>Antrian</th>
                                <th>Nama Paisen</th>
                                <th>Poli</th>
                                <th>status</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php $i = 1; ?>
                            <?php foreach ($visit as $v) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $v['id_visit']; ?></td>
                                    <td><?= $v['patient_id']; ?></td>
                                    <td><?= $v['poly_id']; ?></td>
                                    <td><?= $v['created_at']; ?></td>
                                    <td>
                                        <!-- edit button -->
                                        <a href="/mrecord/check" class="btn btn-warning btn-sm " title="check">
                                            <i class="fa-solid fa-file-waveform" title="check"></i>
                                        </a>
                                        &nbsp;
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


<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var query = $(this).val();
            if (query.length > 0) {
                $.ajax({
                    url: '/search',
                    method: 'POST',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').empty();
                        data.forEach(function(item) {
                            $('#result').append('<li>' + item.column_name + '</li>'); // Ganti 'column_name' dengan kolom yang sesuai
                        });
                    }
                });
            } else {
                $('#result').empty();
            }
        });
    });
</script>

<script>
    $(function() {
        $("#patient-name").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "<?= base_url('search') ?>",
                    dataType: "json",
                    data: {
                        q: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            minLength: 2
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#patient').select2({
            placeholder: 'Select a patient',
            ajax: {
                url: '<?= base_url('admin/queue/search_patient') ?>',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name_patient,
                                id: item.id_patient
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('#poly').select2({
            placeholder: 'Select a polyclinic',
            ajax: {
                url: '<?= base_url('admin/queue/search_polyclinic') ?>',
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name_poly,
                                id: item.id_poly
                            }
                        })
                    };
                },
                cache: true
            }
        });
    });
</script>
<?php echo view('layout_admin/footer'); ?>