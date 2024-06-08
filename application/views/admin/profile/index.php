<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">User /</span> Profile
    </h4>
    <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class=" d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="<?= base_url('assets/img/avatars/') . $user['image'] ?>" height="110" width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h4 class="mb-2"><?= $user['fullname'] ?></h4>
                                <span class="badge bg-label-secondary">Author</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom my-4">Details</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-medium me-2">Username :</span>
                                <span><?= $user['username'] ?></span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-medium me-2">Email :</span>
                                <span><?= $user['email'] ?></span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-medium me-2">Status :</span>
                                <?= $user['is_active'] == 1 ? "<span class=\"badge bg-label-success\">Active</span>" : "<span class=\"badge bg-label-danger\">Not Active</span>" ?>
                            </li>
                            <li class="mb-3">
                                <span class="fw-medium me-2">Role :</span>
                                <span>Author</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-medium me-1">Date Created :</span>
                                <span><?= date('d F Y', $user['created_at']) ?></span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-medium me-1">Last Update :</span>
                                <span><?= date('d F Y', $user['updated_at']) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
        </div>
        <!--/ User Sidebar -->
    </div>
    <!-- /Row -->
</div>
<!-- / Content -->