<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin/extras/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin/extras/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin/css/style.css" rel="stylesheet">
</head>
<?php
require_once 'autoloader.php';
use Admin\Lib\Session;
use Admin\Lib\User;

$session = new Session();

if ($session->isSignedIn()) {
    header("Location: index.php");
}

?>

<body>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="/admin/index.php" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Shop</h3>
                        </a>
                        <h3>Login</h3>
                    </div>
                    <?php



                    if (isset($_POST['login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $user = new User();
                        $user = $user->verifyUser($email, $password);

                        if ($user){
                            $session->login($user);
                            header("Location: index.php");
                        } else {
                            $session->message("Your email or password is incorrent");
                        }
                    }

                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" name="email"
                                   type="email" placeholder="Enter email address"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input class="form-control py-4" id="inputPassword" name="password"
                                   type="password" placeholder="Enter password"/>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <div></div>
                            <button type="submit" name="login" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="extras/chart/chart.min.js"></script>
<script src="extras/easing/easing.min.js"></script>
<script src="extras/waypoints/waypoints.min.js"></script>
<script src="extras/owlcarousel/owl.carousel.min.js"></script>
<script src="extras/tempusdominus/js/moment.min.js"></script>
<script src="extras/tempusdominus/js/moment-timezone.min.js"></script>
<script src="extras/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>