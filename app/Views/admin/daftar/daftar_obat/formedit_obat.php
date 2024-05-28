<?php echo view('layout_admin/header'); ?>
<?= $this->section('content'); ?>



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

                <div class="row mb-3">
                    <label for="" class="col-sm-4 col-form-label">Id Obat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kodebarang" name="kodebarang">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_obat" class="col-sm-4 col-form-label">Nama Obat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stok" class="col-sm-4 col-form-label">Stok</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="stok" name="stok">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kadaluarsa" class="col-sm-4 col-form-label">Kadaluarsa</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="kadaluarsa" name="kadaluarsa">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga_satuan" class="col-sm-4 col-form-label">Harga Satuan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="komposisi" class="col-sm-4 col-form-label">Komposisi</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="komposisi" name="komposisi"></textarea>
                    </div>
                </div>








                <div class="row mb-3">
                    <label for="" class="col-sm-4 col-form-label">Harga</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-4 col-form-label">Stok</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="stok" name="stok">
                    </div>
                </div>



                <div class="row mb-3">
                    <label for="" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="submit" value="Simpan" class="btn btn-success">
                    </div>
                </div>

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