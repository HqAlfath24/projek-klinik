<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Daftar Obat</h1>
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
                <form action="/drug/update/<?= $drug['id_drug']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name_drug" class="form-label">Nama</label>
                        <input type="text" class="form-control <?= ($validation->hasError('name_drug')) ? 'is-invalid' : ''; ?>" id="name_drug" name="name_drug" autofocus value="<?= $drug['name_drug']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="reg_num" class="form-label">No. Regristrasi </label>
                        <input type="number" class="form-control" id="reg_num" name="reg_num" value="<?= $drug['reg_num']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="produsen" class="form-label">Produsen</label>
                        <!-- <input type="text" class="form-control" id="produsen" name="produsen"> -->
                        <input type="text" class="form-control" id="produsen" name="produsen" value="<?= $drug['produsen']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="distributor" class="form-label">Distributor</label>
                        <input type="text" class="form-control" id="distributor" name="distributor" value="<?= $drug['distributor']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= $drug['stok']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="expired" class="form-label">Exp</label>
                        <input type="date" class="form-control" id="expired" name="expired" value="<?= $drug['expired']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="unit_price" class="form-label">Harga Satuan</label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" value="<?= $drug['unit_price']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="composition" class="form-label">Komposisi</label>
                        <input type="text" class="form-control" id="composition" name="composition" value="<?= $drug['composition']; ?>">
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