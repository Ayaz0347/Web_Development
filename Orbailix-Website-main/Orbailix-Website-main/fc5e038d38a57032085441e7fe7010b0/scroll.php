<?php
include('includes/header.php');
include_once('../db/connection.php');

if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
} else {
    $alert = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
        $date_now = date('	m/d/y h:i A');
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $sql = "UPDATE scroll SET scroll = '$title' , ip = '$ip', date = '$date_now' WHERE id = 1";
        $sql_query = mysqli_query($conn, $sql);

        if ($sql_query) {
            $alert =  '<div class="alert alert-success" role="alert">Inserted Added SuccessFully</div>';
        } else {
            $alert =  '<div class="alert alert-danger" role="alert">Something Went Wrong</div>';
        }
    }

?>



    <section class="mt-5">
        <div class="row mt-5">
            <!-- right side of form -->
            <div class="col-7 mx-auto">
                <?php echo $alert ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <h4>Add Marquee</h4>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
                    </div>
                    <center>
                        <input type="submit" name="submit" class="_Orb-btn Orb-bg-orange mt-3" value="Submit">
                    </center>
                </form>
            </div>
        </div> <!-- end of row -->
    </section>


<?php }
include('includes/footer.php'); ?>