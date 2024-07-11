<div class="card">
    <h5 class="card-header">Data Pasien</h5>
    <div class="card-body">
        <div class="mb-3">
            <label for="patient_id" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id" autofocus value="<?= $visit['patient_id']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="poly_id" class="form-label">Poli Tujuan</label>
            <input type="text" class="form-control" id="poly_id" name="poly_id" value="<?= $visit['poly_id']; ?>" readonly>
        </div>
    </div>
    <hr>
</div>
<div class="card">
    <h5 class="card-header">Periksa</h5>
    <div class="card-body">
        <?= $validation->listErrors(); ?>
        <form action="/polyclinic/save" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name_poly" class="form-label">Nama Poli</label>
                <input type="text" class="form-control " id="name_poly" name="name_poly" autofocus value="<?= old('name_poly'); ?>">
            </div>
            <div class="mb-3">
                <label for="poly_code" class="form-label">Kode Poli</label>
                <!-- <input type="text" class="form-control" id="poly_code" name="poly_code"> -->
                <input type="text" class="form-control" id="poly_code" name="poly_code" value="<?= old('poly_code'); ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>