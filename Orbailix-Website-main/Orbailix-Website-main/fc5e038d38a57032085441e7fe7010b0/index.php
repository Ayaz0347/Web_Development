<?php include('includes/header.php');
include_once('../db/connection.php');

$alert = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $salt = "!@#$%^&^%$#^%$#";
    $pass = md5($password . $salt);

    $sql = "SELECT * FROM admin WHERE email='$email' and password='$pass'";
    $sql_query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($sql_query) == 1) {
        $field = mysqli_fetch_assoc($sql_query);
        $_SESSION['email'] = $field['email'];
        header("Location: dashboard.php");
    } else {
        $alert =  '<div class="alert alert-danger" role="alert">Invalid Email or Password</div>';
    }
}

?>

<!--======================================
        NAVBAR
    =======================================-->
<header class="p-relative">
    <!-- <button class="navbar-toggler text-white d-lg-none" type="button">
          <span><i class="fas fa-bars"></i></span>
        </button> -->
    <nav class="__nav __fixedPos">
        <a href="#" class="nav_brand">
            <img src="../assets/img/logo.svg" alt="">
        </a>
    </nav>
</header>


<section class="mt-5">
    <br>
    <br><br>
    <div class="row">
        <center>
            <h1>Login</h1>
        </center>
        <div class="col-7 mx-auto">


            <?php echo $alert ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <h4>Email</h4>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-2">
                    <h4>Password</h4>
                    <input type="password" class="form-control" name="password">
                </div>
                <center>
                    <input type="submit" name="submit" class="_Orb-btn Orb-bg-orange mt-3" value="Login">
                </center>
            </form>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>