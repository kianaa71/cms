<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lojin Page</title>
    <?php include('layout/_css.php'); ?>
    <link href="assets/junichiro.jpg" rel="icon">
</head>

<body>
<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Lojin</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="<?= base_url('auth/cek_login') ?>" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <div id="dissapear"> 
                            <?php echo $this->session->flashdata('alert', true); ?>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php include('layout/_js.php'); ?>
</body>

</html>