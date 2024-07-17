<div class="card">
    <h5 class="card-header"><?= $title; ?></h5>
    <div class="card-body">
        <div class="mb-3">
            <label for="patient_id" class="form-label">Nama Pasien</label>
            <?= $mrecord['patient_slug']; ?>
        </div>
        <div class="mb-3">
            <label for="poly_id" class="form-label">Poli Tujuan</label>
            <?= $mrecord['poly_code']; ?>
        </div>
    </div>
    <hr>
</div>
<div class="card">
    <h5 class="card-header"><?= $subtitle; ?></h5>
    <div class="card-body">
        <?= $validation->listErrors(); ?>
        <form action="/mrecord/diagnosis/<?= $mrecord['id_mrecord']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" class="form-control" id="patient_slug" name="patient_slug" autofocus value="<?= $mrecord['patient_slug']; ?>">
            <input type="hidden" class="form-control" id="poly_code" name="poly_code" autofocus value="<?= $mrecord['poly_code']; ?>">
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