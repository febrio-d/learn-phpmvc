<div class="container-fluid mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['stud']['name']; ?></h5>
            <h6 class="card-subtitle text-muted">CID : <?= $data['stud']['cid']; ?></h6>
            <p class="card-text"><?= $data['stud']['email']; ?></p>
            <p class="card-text">Major : <?= $data['stud']['major']; ?></p>
            <a href="<?= BASEURL; ?>/students" class="card-link">Back</a>
        </div>
    </div>
</div>