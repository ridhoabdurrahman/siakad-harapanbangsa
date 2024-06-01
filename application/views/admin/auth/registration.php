<!-- Content -->
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
            <div class="w-100 d-flex justify-content-center">
                <img src="<?= base_url() ?>assets/img/illustrations/sign-up.svg" class="img-fluid" alt="Login image" width="1000">
            </div>
        </div>
        <!-- /Left Text -->
        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-4">
                    <a href="index-2.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/img/icons/logo-main.svg" alt="Primary Logo" width="65">
                        </span>
                        <span class="app-brand-text demo text-body fw-bold">Harapan bangsa</span>
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Adventure starts here 🚀</h4>
                <p class="mb-4">Make your app management easy and fun!</p>

                <form id="formAuthentication" class="mb-3" action="<?= site_url('auth/signup') ?>" method="POST">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your fullname" value="<?= set_value('fullname') ?>" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="confirm-password">Repeat Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                            <label class="form-check-label" for="terms-conditions">
                                I agree to
                                <a href="javascript:void(0);">privacy policy & terms</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary d-grid w-100 mt-2">
                        Sign up
                    </button>
                </form>

                <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="<?= site_url('auth/signin') ?>">
                        <span>Sign in instead</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>
<!-- / Content -->