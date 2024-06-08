<!-- Content -->
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
            <div class="w-100 d-flex justify-content-center">
                <img src="<?= base_url() ?>assets/img/illustrations/sign-in.svg" class="img-fluid" alt="Login image" width="1000">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-3">
                    <a href="index-2.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/img/icons/logo-main.svg" alt="Primary Logo" width="65">
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Welcome to Siakad Harapan Bangsa!👋</h4>
                <p class="mb-4">Please sign-in to your account and start the adventure</p>

                <?= $this->session->flashdata('register_success') ?>
                <?= $this->session->flashdata('logged_out') ?>

                <?php if ($this->session->flashdata('not_found')) { ?>
                    <div class="alert alert-danger d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-danger border-label-danger p-3 me-2"><i class="fa-solid fa-xmark fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                            <h6 class="alert-heading d-flex align-items-center mb-1">Oops</h6>
                            <span><?= $this->session->flashdata('not_found') ?></span>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($this->session->flashdata('not_active')) { ?>
                    <div class="alert alert-danger d-flex alert-dismissible" role="alert">
                        <span class="badge badge-center rounded-pill bg-danger border-label-danger p-3 me-2"><i class="fa-solid fa-user-lock fs-6"></i></span>
                        <div class="d-flex flex-column ps-1">
                            <h6 class="alert-heading d-flex align-items-center mb-1">Oops</h6>
                            <span><?= $this->session->flashdata('not_active') ?></span>
                        </div>
                    </div>
                <?php } ?>

                <form id="formAuthentication" class="mb-3" action="<?= site_url('auth/signin') ?>" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email or Username</label>
                        <input type="text" class="form-control <?= $this->session->flashdata('wrong_password') ? 'is-invalid' : "" ?>" id="email" name="email_username" placeholder="Enter your email or username" autofocus value="<?= $this->session->flashdata('email_username') ? $this->session->flashdata('email_username') : '' ?>">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a href="auth-forgot-password-cover.html">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control <?= $this->session->flashdata('wrong_password') ? 'is-invalid' : "" ?>" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                        <?php if ($this->session->flashdata('wrong_password')) { ?>
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                <div data-field="password"><?= $this->session->flashdata('wrong_password')  ?></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">
                        Sign in
                    </button>
                </form>

                <p class="text-center">
                    <span>New on our platform?</span>
                    <a href="<?= site_url('auth/signup') ?>">
                        <span>Create an account</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Login -->
    </div>
</div>
<!-- / Content -->