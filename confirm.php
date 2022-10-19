<?php
// session_start();
// include('config/dblink.php');
// $collect = new DB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/PHP-Test/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- title -->
    <title>verify email Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div style="background-color:#3498DB ; Height:50vh; width: 100vw;">
        <div class="row pt-5">
            <div class="py-5 px-4 px-md-0 d-flex justify-content-center align-items-center">

                <div class="pt-5 pt-md-o col-12 col-md-6">
                    <div class="card card-body px-4 py-4" style="border-radius: 0px;box-shadow: 0 0.15rem 1.75rem #21283226;">
                        <div class="text-center">
                            <h3>Welcome Daniel</h3>
                            <img src="assets/shake.jpg">
                        </div>
                        <div class="text-center">
                            We are excited to have you get started. A five digit code has been sent to your email. Please enter the code to verify your email address .
                            <div class="row d-flex justify-content-center form-group pt-2">
                                <div class="col-1">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-1">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-1">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-1">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-1">
                                    <input type="text" class="form-control">
                                </div>

                            </div>
                            <div class="pt-3">
                                <a class="btn btn-primary">submit</a>
                            </div>
                        </div>
                        <div class=" d-flex  flex-column justify-content-center align-items-center">

                            <div class="my-3">
                                If you did not receive the email
                            </div>
                            <form class="d-inline" method="" action="">

                                <button type="submit" class="btn btn-outline-primary px-4 ">Resend code</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom JavaScript -->
    <script src="js/main.js"></script>
</body>

</html>