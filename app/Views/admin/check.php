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

            <!-- hidden input -->
            <input type="hidden" class="form-control" id="patient_slug" name="patient_slug" autofocus value="<?= $mrecord['patient_slug']; ?>">
            <input type="hidden" class="form-control" id="poly_code" name="poly_code" autofocus value="<?= $mrecord['poly_code']; ?>">

            <!-- check & diagnosis -->
            <div class="mb-3">
                <label for="complaint" class="form-label">Keluhan</label>
                <input type="text" class="form-control " id="complaint" name="complaint" autofocus value="<?= old('complaint'); ?>">
            </div>
            <div class="mb-3">
                <label for="diagnosis" class="form-label">Diagnosa</label>
                <!-- <input type="text" class="form-control" id="diagnosis" name="diagnosis"> -->
                <input type="text" class="form-control" id="diagnosis" name="diagnosis" value="<?= old('diagnosis'); ?>">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Catatan</label>
                <!-- <input type="text" class="form-control" id="notes" name="notes"> -->
                <input type="text" class="form-control" id="notes" name="notes" value="<?= old('notes'); ?>">
            </div>

            <!-- prescription -->
            <h5>Resep</h5>
            <div>
                <button type="button" class="btn btn-secondary mb-3" onclick="addMedicine()">Tambah Obat</button>
                <div id="medicinesContainer">
                    <!-- Medicine inputs will be appended here dynamically -->
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- script add medicine -->
<script>
    // Fungsi untuk menambah input obat baru ke dalam form
    function addMedicine() {
        // Mendapatkan container tempat input obat akan ditambahkan
        var container = document.getElementById('medicinesContainer');
        // Mendapatkan jumlah elemen anak dalam container untuk menentukan index baru
        var index = container.childElementCount;

        // Membuat div baru untuk input obat
        var medicineDiv = document.createElement('div');
        medicineDiv.className = 'medicine-item mb-3';
        medicineDiv.innerHTML = `
                <label for="medicine_id_${index}" class="form-label">Nama Obat</label>
                <select name="medicines[${index}][medicine_id]" id="medicine_id_${index}" class="form-control mb-2">
                    <?php foreach ($medicines as $medicine) : ?>
                        <option value="<?= $medicine['id_medicine'] ?>">
                            <?= $medicine['name_medicine'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="dosage_${index}" class="form-label">Dosis</label>
                <input type="text" class="form-control mb-2" id="dosage_${index}" name="medicines[${index}][dosage]" value="">
                <label for="instructions_${index}" class="form-label">Instruksi</label>
                <textarea class="form-control mb-2" id="instructions_${index}" name="medicines[${index}][instructions]"></textarea>
                <button type="button" class="btn btn-danger" onclick="removeMedicine(this)">Hapus Obat</button>
                <hr>
            `;

        // Menambahkan div baru ke dalam container
        container.appendChild(medicineDiv);
    }

    // Fungsi untuk menghapus input obat dari form
    function removeMedicine(button) {
        // Mendapatkan container tempat input obat berada
        var container = document.getElementById('medicinesContainer');
        // Menghapus elemen parent dari tombol hapus (div yang mengandung input obat)
        container.removeChild(button.parentNode);
    }
</script>