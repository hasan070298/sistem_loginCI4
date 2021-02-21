<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>

            <?php $errors = session()->getFlashData('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul> <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php } ?>
            <?php
            if (session()->getFlashData('pesan')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashData('pesan');
                echo '</div>';
            }
            ?>
            <?php echo form_open('Auth/cek_login'); ?>
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Password">
                        </div>
                    </div>

                </div>
                <!-- <a class="btn btn-primary btn-block" type="submit">Register</a> -->
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="text-center">
                </div>
                <?php form_close(); ?>
                <a class="d-block small mt-3" href="register">Register</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>