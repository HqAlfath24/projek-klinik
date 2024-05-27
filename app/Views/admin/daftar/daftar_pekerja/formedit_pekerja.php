<?php echo view('layout_admin/header'); ?>
<?= $this->section('content'); ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Daftar Pekerja</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick="location.href=('/daftar_pekerja')">
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
                    <label for="" class="col-sm-4 col-form-label">Id Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kodebarang" name="kodebarang">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_pegawai" class="col-sm-4 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="no_induk_pegawai" class="col-sm-4 col-form-label">No. Induk Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_induk_pegawai" name="no_induk_pegawai">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nomor_rekening" class="col-sm-4 col-form-label">No. Rekening</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nomor_rekening" name="nomor_rekening">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="npwp" name="npwp">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gaji" class="col-sm-4 col-form-label">Gaji</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="gaji" name="gaji">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="peran" class="col-sm-4 col-form-label">Peran</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="peran" name="peran">
                            <option value="Manager">Manager</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Staff">Staff</option>
                        </select>
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