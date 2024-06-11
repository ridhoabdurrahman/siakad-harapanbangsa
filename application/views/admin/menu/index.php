<!-- Content -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('status') ?>"></div>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Menu Management /</span> Menu
    </h4>
    <div class="card">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3">
            <h4 class="card-header py-0 ps-1">&nbsp;</h4>
            <div class="text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    <i class="bx bx-plus me-sm-1"></i> Add New Record
                </button>
            </div>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="datatables-ajax table table-bordered" id="menuTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Menu</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- / Content -->

<!-- Modal -->
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="<?= site_url('menu/store') ?>">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Add New Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="menuName" class="form-label">Menu Name</label>
                        <input type="text" id="menuName" class="form-control" name="name" placeholder="Enter Menu Name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>