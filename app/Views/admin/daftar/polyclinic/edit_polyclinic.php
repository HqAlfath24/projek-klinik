<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Poli</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/daftar_obat')">
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
                <form action="/polyclinic/update/<?= $polyclinic['id_poly']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_poly" class="form-label">Nama</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name_poly')) ? 'is-invalid' : ''; ?>" id="name_poly" name="name_poly" autofocus value="<?= $polyclinic['name_poly']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="poly_code" class="form-label">Kode poli</label>
                        <input type="text" class="form-control" id="poly_code" name="poly_code" value="<?= $polyclinic['poly_code']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

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