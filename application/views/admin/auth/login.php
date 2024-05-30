<!-- Content -->
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
            <div class="w-100 d-flex justify-content-center">
                <img src="<?= base_url() ?>assets/img/illustrations/college-project-bro.svg" class="img-fluid" alt="Login image" width="1000">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-5">
                    <a href="index-2.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/img/icons/logo-main.svg" alt="Primary Logo" width="65">
                        </span>
                        <span class="app-brand-text demo text-body fw-bold">Harapan bangsa</span>
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Welcome to Siakad Harapan Bangsa!👋</h4>
                <p class="mb-4">Please sign-in to your account and start the adventure</p>

                <form id="formAuthentication" class="mb-3" action="" method="GET">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email or Username</label>
                        <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a href="auth-forgot-password-cover.html">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
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