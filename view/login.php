 <?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "../koneksi.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = mysqli_query($con, "select * from tbl_user where username = '$user' AND password='$pass'");
    $row = mysqli_num_rows($sql);

    if($row > 0){
        $login = mysqli_fetch_array($sql);
        if($login['status']=="admin"){
            session_start();
            $_SESSION['nama_admin'] = $login['username'];
            $_SESSION['pass_admin'] = $login['password'];

            echo "<script language='JavaScript'>
            confirm('login sebagai admin berhasil!');
            document.location= 'index.php';
            </script>";
        }
    }
    else{
        echo "<script language='JavaScript'>
        confirm('username dan password salah');
        document.location= 'login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Star Admin2</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendors/ti-icons/css/themify-icons.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendors/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../assets/vendors/typicons/typicons.css" />
    <link
      rel="stylesheet"
      href="../assets/vendors/simple-line-icons/css/simple-line-icons.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendors/css/vendor.bundle.base.css"
    />
    <link
      rel="stylesheet"
      href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"
    />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="../assets/images/logo 1.svg" alt="logo" />
                </div>
                <h4>Login Admin</h4>
                <h6 class="fw-light">Login Dashboard.</h6>
                <form method="POST" class="pt-3">
                  <div class="form-group">
                    <input
                      type="text"
                      name="username"
                      class="form-control form-control-lg"
                      id="exampleInputEmail1"
                      placeholder="Username"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      name="password"
                      class="form-control form-control-lg"
                      id="exampleInputPassword1"
                      placeholder="Password"
                    />
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn" name="submit" class="btn btn-primary" value="login">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
