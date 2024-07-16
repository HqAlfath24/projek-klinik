<div class="card">
    <h5 class="card-header">Data Pasien</h5>
    <div class="card-body">
        <div class="mb-3">
            <label for="patient_id" class="form-label">Nama Pasien</label>

        </div>
        <div class="mb-3">
            <label for="poly_id" class="form-label">Poli Tujuan</label>

        </div>
    </div>
    <hr>
</div>
<div class="card">
    <h5 class="card-header">Periksa</h5>
    <div class="card-body">
        <?= $validation->listErrors(); ?>
        <form action="/mrecord/diagnosis" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="patient_id" class="form-label">Nama Pasien</label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" autofocus value="aan" readonly>
            </div>
            <div class="mb-3">
                <label for="complaint" class="form-label">Keluhan</label>
                <input type="text" class="form-control " id="complaint" name="complaint" autofocus value="<?= old('complaint'); ?>">
            </div>
            <div class="mb-3">
                <label for="diagnosis" class="form-label">Diagnosa</label>
                <!-- <input type="text" class="form-control" id="diagnosis" name="diagnosis"> -->
                <input type="text" class="form-control" id="diagnosis" name="diagnosis" value="<?= old('diagnosis'); ?>">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>