<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalForm">
                Add Student Data
            </button>
            <h3>Student List</h3>
            <?php foreach ($data['students'] as $student) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $student['name']; ?>
                        <a href="<?= BASEURL; ?>/student/delete/<?= $student['id']; ?>" class="badge bg-danger float-end me-1" onclick="return confirm('are you sure?');">delete</a>
                        <a href="<?= BASEURL; ?>/student/detail/<?= $student['id']; ?>" class="badge bg-primary float-end me-1">detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/student/add" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>