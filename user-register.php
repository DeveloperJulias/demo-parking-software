<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./icon-logos/safe-park-favicon-new.png">
    <title>Safe Park</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <style>
        /* Prevent page from being scrollable */
        .auth-wrapper {
            height: 100vh;
            overflow: hidden;
        }

        /* Override for mobile */
        @media (max-width: 767.98px) {
            .auth-wrapper {
                height: auto;
                overflow: visible;
            }

            .auth-box {
                padding: 20px;
            }

            .register-img {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- Register box -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="auth-box border-top border-light p-4" style="border-radius: 10px;">
                            <div class="text-center">
                                <!-- Logo -->
                                <img src="icon-logos/safe-park-favicon-new.png" alt="Logo" width="150em" height="150em">
                                <h5 class="mt-3 text-primary">Register</h5>
                            </div>
                            <!-- Register Form -->
                            <form class="mt-4" action="./includes/store-registration.php" method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Create Password" name="createpassword" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-info" name="register">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Placeholder for image -->
                        <div class="register-img" style="margin-top: 24em;">
                            <img src="./icon-logos/cars (1).png" alt="" height="300em" width="">
                        </div>
                        <span class="text-primary">
                            &copy;<?= date('Y') ?> Safe Park. Designed and Developed by <a href="https://www.nugsoft.com" class="text-warning">&#128187;Nugsoft Technologies</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Required js -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Preloader script -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>

</html>
