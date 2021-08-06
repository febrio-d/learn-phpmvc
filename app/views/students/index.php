<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Add New Student
            </button>
            <h4 class="mt-3">Students List</h4>
            <ul class="list-group">
                <?php foreach ($data['students'] as $stud) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $stud['name']; ?>
                        <a href="<?= BASEURL; ?>/students/details/<?= $stud['id']; ?>" class="badge bg-primary">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/students/add" method="POST">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="inputCid" class="form-label">CID</label>
                        <input type="number" class="form-control" id="inputCid" name="inputCid">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="inputEmail">
                    </div>
                    <div>
                        <label for="inputMajor" class="form-label">Major</label>
                        <select class="form-select" id="inputMajor" name="inputMajor">
                            <option value="Computer Science">Computer Science</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Design">Design</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Physics">Physics</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>