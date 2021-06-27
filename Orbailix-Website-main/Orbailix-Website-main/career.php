<?php include('includes/header.php');
include_once('db/connection.php');

$sql = "SELECT * FROM jobs";
$mysql_query = mysqli_query($conn, $sql);




?>
    <header class="p-relative">
        <!-- <button class="navbar-toggler text-white d-lg-none" type="button">
          <span><i class="fas fa-bars"></i></span>
        </button> -->
        <nav class="__nav __fixedPos">
          <a href="./index.php" class="nav_brand">
            <img src="assets/img/logo.svg" alt="">
          </a>
        </nav>
    </header>
    <!-- career secition -->
    <section class='career pt-0' id='career'>
        <!-- content box -->
        <div class="career-box">
            <div class="col-sm-8 __orange">
                <h1 class="_Orb-title d-inline-block __orange m-b-4">Career</h1>
                <p class="f-2">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quae at illum necessitatibus asperiores facere, et earum laudantium, eveniet enim dolore voluptate, temporibus ab! Quia deleniti omnis quam voluptatum repellat!
                </p>
            </div>
        </div>

        <!-- careers opening box -->
        <div class="row current-careers">
            <!-- marque -->
            <div class="col-10 mx-auto f-2 m-b-2 mb-lg-5">
                <marquee class='text-secondary' direction="right" scrollamount="10" behavior="sliding">
                <?php
                $sql_2 = "SELECT scroll FROM scroll";
                $mysql_query_2 = mysqli_query($conn, $sql_2);
                
                $result = mysqli_fetch_assoc($mysql_query_2);
                echo $result['scroll']; 
                ?>
                </marquee>
            </div>

            <!-- career row -->
            <?php 
            while($row = mysqli_fetch_assoc($mysql_query)){

            ?>
            <div class="row f-2 __orange b-bottom">
                <div class="col-8">
                    <h4 class='_Orb-card-tit'><?php echo $row['title']; ?></h4>
                    <p>
                    <?php echo $row['desp']; ?>
                    </p>
                    <p>
                    <span style="color: white;">Date :</span> <?php echo $row['date']; ?>
                    </p>
                </div>
                <div class="col-4 me-auto text-end">
                    <button class="_Orb-btn Orb-bg-orange fw-normal" data-bs-toggle="modal" data-bs-target="#carrerModal"> Apply </button>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- modal box -->
        <div class="modal fade" id="carrerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam mollitia id suscipit aspernatur 
                        veniam, doloremque quo a consectetur autem magnam. Possimus tenetur blanditiis, magni 
                        necessitatibus ipsa quas sapiente laboriosam porro.
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('includes/footer.php'); ?>
