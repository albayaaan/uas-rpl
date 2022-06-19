<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - MS Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <?php
    include "connect.php";
    session_start();
    if (isset($_SESSION["admin"])) {
        header("Location: app_admin.php?page=dashboard");
    }
    ?>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-3">
                        <div class="col-lg-5">
                            <!-- alert -->
                            <?php
                            if (isset($_SESSION["message"])) {
                            ?>
                                <div class="container-fluid alert alert-danger mt-2" role="alert">
                                    <?= $_SESSION["message"]; ?>
                                </div>
                            <?php
                            }
                            unset($_SESSION["message"]);
                            ?>
                            <!-- end alert -->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login | Admin</h3>
                                </div>
                                <div class="card-body">
                                    <form action="login_admin.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" required />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" minlength="8" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="row justify-content-center mt-3">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="align-items-center justify-content-center small text-center">
                        <div class="text-muted">Copyright &copy; MS Admin 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>