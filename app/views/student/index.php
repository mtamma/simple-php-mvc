<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Student List</h3>
            <?php foreach($data['students'] as $student) : ?>
                <ul>
                    <li><?= $student['name']; ?></li>
                    <li><?= $student['email']; ?></li>
                    <li><?= $student['address']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>