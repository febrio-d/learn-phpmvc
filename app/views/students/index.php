<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-4">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary addButton" data-bs-toggle="modal" data-bs-target="#formModal">
                Add New Student
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <form action="<?= BASEURL; ?>/students/search" method="POST">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search Students" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h4 class="mt-3">Students List</h4>
            <ul class="list-group">
                <?php foreach ($data['students'] as $stud) : ?>
                    <li class="list-group-item">
                        <?= $stud['name']; ?>
                        <a href="<?= BASEURL; ?>/students/delete/<?= $stud['id']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('Are you sure?')">Delete</a>
                        <a href="<?= BASEURL; ?>/students/edit/<?= $stud['id']; ?>" class="badge bg-info text-dark ms-2 float-end editModal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $stud['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/students/details/<?= $stud['id']; ?>" class="badge bg-primary float-end">Details</a>
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
                <h5 class="modal-title" id="formModalLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/students/add" method="POST">
                    <input type="hidden" name="inputId" id="inputId">
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
                            <option value="Economics">Economics</option>
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