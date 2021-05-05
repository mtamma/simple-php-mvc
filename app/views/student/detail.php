<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['student']['name']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['student']['email']; ?></h6>
            <p class="card-text"><?= $data['student']['address']; ?></p>
            <a href="<?= BASEURL; ?>/student" class="card-link">Back</a>
        </div>
    </div>
</div>