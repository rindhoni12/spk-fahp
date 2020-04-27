<!DOCTYPE html>
<html dir="ltr">

<head>
    <?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
    <div class="main-wrapper">
        <?php $this->load->view("admin/_partials/v_preloader.php") ?>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?php echo base_url('assets/images/big/auth-bg.jpg') ?>) no-repeat center center;">

            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url('assets/images/big/3.jpg') ?>);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/images/big/icon.png') ?>" alt="wrapkit">
                        </div>

                        <h2 class="mt-3 text-center">Silahkan Login</h2>
                        <p class="text-center">Masukkan username dan password untuk mengakses panel admin.</p>
                        
                        <form class="mt-4" method="POST" action="<?php echo base_url('login') ?>">
                            <?php if(isset($error)) { echo $error; }; ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="username">Username</label>
                                        <input class="form-control" name="username" id="username" type="text" placeholder="Masukkan username Anda" autofocus><?php echo form_error('username'); ?>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="password">Password</label>
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Masukkan password Anda"><?php echo form_error('password'); ?>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Login</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Belum memiliki akun? <a href="#" class="text-danger">Register</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/v_js.php") ?>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>