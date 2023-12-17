<?= $this->extend('layout/auth'); ?>
<?= $this->section('auth'); ?>




<section class="container">
    <div class="image-section">
        <div class="image_wrapper">
            <img src="<?= base_url('/image/cloath.jpg') ?>" alt="">
        </div>

        <div class="content-container">
            <h1 class="section-heading">Selamat Datang Di <span>Shojo</span></h1>
            <p class="section-paragraph">Belanja mudah dengan sekali sentuhan</p>
        </div>
    </div>

    <div class="form-section">
        <div class="form-wrapper">
            <div class="logo-container">
                <a href="#" class="logo-container">
                    <img src="<?= base_url('/image/register.png') ?>" alt="logo">
                </a>
            </div>

            <h2>Welcome!!!</h2>
            <p>Enter you credentials to create your account.</p>
            <div class="input-container">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="password">
                </div>
            </div>

            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" value="remember-me" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>

                <a href="#">Forgot password?</a>
            </div>


            <button class="signup-btn">
                <a href="<?php echo site_url('auth/create_user') ?>">sign up</a>
            </button>

            <div class="or-divider">or</div>

            <button class="google-signin">
                <object data="<?= base_url('/image/google.svg') ?>" type=""></object>
                <span>Sign in with Google</span>
            </button>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>