<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Student List</h3>
            <?php foreach($data['students'] as $student) : ?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $student['name']; ?>
                        <a href="<?= BASEURL; ?>/student/detail/<?= $student['id']; ?>" class="badge bg-primary">detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>