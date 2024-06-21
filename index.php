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
    <link rel="stylesheet" href="./newstyles/newcss.css">
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
        <!-- Login box -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="auth-box border-top border-light p-4">
                            <div class="text-center">
                                <!-- Logo -->
                                <img src="icon-logos/safe-park-favicon-new.png" alt="Logo" width="150em" height="150em">
                                <h5 class="mt-3 text-primary">Login</h5>
                            </div>
                            <!-- Login Form -->
                            <form class="mt-4" action="./includes/store-login.php" method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-info" name="login">Login</button>
                            </form>
                            <!-- Lost Password Button -->
                            <div class="text-center mt-3">
                                <button class="btn btn-link mr-2"><a href="./password-reset.php">Lost password?</a></button>
                                <button class="btn btn-link"><a href="./user-register.php">Register</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Placeholder for image -->
                        <div class="register-img" style="margin-top:13em;">
                            <img src="./icon-logos/cars (1).png" alt="" height="300em">
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

        // Function to show the error popup//
        function showErrorPopup(message) {
            alert(message);
        }

        // Check for the error parameter in the URL//
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const error = urlParams.get('error');
            if (error) {
                showErrorPopup(decodeURIComponent(error));
            }
        }
 
       
    </script>

</html>
