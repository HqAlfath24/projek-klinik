<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Medical Record</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h3><?= $patient['name_patient']; ?></h3>
        <?= $patient['mrecord_num']; ?>
        <?= $patient['birthday']; ?>
        <?= $patient['gender']; ?>
        <?= $patient['phone']; ?>
        <?= $patient['email']; ?>
        <?= $patient['address']; ?>
        <?= $patient['no_badge']; ?>
        <?= $patient['insurance']; ?>
        <?= $patient['insurance_num']; ?>

        <a href="#" class="btn btn-primary">Edit</a>
    </div>
</div>