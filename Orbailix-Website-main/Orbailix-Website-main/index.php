<?php include('includes/header.php');
include_once('db/connection.php');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$sql = "INSERT INTO login_active (ip) VALUE ('$ip')";
$mysql_result = mysqli_query($conn, $sql);
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['desp']);

    $to = "info@orbailix.com";
    $subject = "Mail From : " . $name;
    $subject_2 = "Thank You For Contacting Orbailix";
    $from = "contact@orbailix.com";
    $message_2 = "Thank You For Contacting Orbailix";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        mail($email, $subject_2, $message_2, $headers);
        echo "Done";
    } else {
        echo "failed";
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
            <img src="assets/img/logo.svg" alt="">
        </a>
        <a href="#_Orb-main" class="link ms-auto"> Home</a>
        <a href="#_Orb_about" class="link"> Why Orbailix</a>
        <a href="#_Our-team" class="link"> Our Team</a>
        <a href="#_Orb-ser" class="link"> Our Services</a>
        <a href="#_Orb-cntctUs" class="link"> Contact Us</a>
        <a href="./career.php" class="link me-auto"> Career</a>
    </nav>
</header>

<!--====================================
        Index section
    =======================================-->
<section class="__Orb-main p-0" id="_Orb-main">
    <ul class="_Orb-slider m-0 p-0">
        <li class="_Orb-active">
            <div class="row m-auto w-75">
                <div class="col-7">
                    <h1 class="_Orb-title __orange fade-down m-b-4"> Company Title </h1>
                    <p class="f-2 __orange text-white m-b-4">
                        Orbalaix Company Provide Web Development:
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, consectetur
                    </p>
                    <button type="submit" class="_Orb-btn Orb-bg-orange">SEND MESSAGE</button>
                </div>
            </div>
        </li>
        <li>
            <div class="row m-auto w-75">
                <div class="col-7">
                    <h1 class="_Orb-title __orange fade-down m-b-4"> Company Title </h1>
                    <p class="f-2 __orange text-white m-b-4">
                        Orbalaix Company Provide Designing:
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, consectetur
                    </p>
                    <button type="submit" class="_Orb-btn Orb-bg-orange">SEND MESSAGE</button>
                </div>
            </div>
        </li>
        <li>
            <div class="row m-auto w-75">
                <div class="col-7">
                    <h1 class="_Orb-title __orange fade-down m-b-4"> Company Title </h1>
                    <p class="f-2 __orange text-white m-b-4">
                        Orbalaix Company Security:
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, consectetur
                    </p>
                    <button type="submit" class="_Orb-btn Orb-bg-orange">SEND MESSAGE</button>
                </div>
            </div>
        </li>
        <li>
            <div class="row m-auto w-75">
                <div class="col-7">
                    <h1 class="_Orb-title __orange fade-down m-b-4"> Company Title </h1>
                    <p class="f-2 __orange text-white m-b-4">
                        Orbalaix Company Provide Electronic Products:
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, consectetur
                    </p>
                    <button type="submit" class="_Orb-btn Orb-bg-orange">SEND MESSAGE</button>
                </div>
            </div>
        </li>
    </ul>
    <div class="_slide-btns _slide-left fw-bold"> <i class="fas fa-angle-left"></i> </div>
    <div class="_slide-btns _slide-right fw-bold"> <i class="fas fa-angle-right"></i> </div>
    <div class="_slide-dots">
        <span></span><span></span><span></span><span></span>
    </div>
</section>

<!--====================================
        ABOUT COMAPNY
    =======================================-->
<section class="_About-Orb text-secondary" id="_Orb_about">

    <div class="row">
        <div class="text-center m-b-3">
            <h1 class="_Orb-title __orange d-inline-block"> ABOUT ORBAILIX </h1>
            <div class="col-10 mx-auto f-2 m-b-2 mb-lg-5 mt-2">
                <marquee class='text-secondary' direction="right" scrollamount="10" behavior="sliding">
                    <?php
                    $sql_2 = "SELECT scroll FROM scroll";
                    $mysql_query_2 = mysqli_query($conn, $sql_2);

                    $result = mysqli_fetch_assoc($mysql_query_2);
                    echo $result['scroll'];
                    ?>
                </marquee>
            </div>
        </div>
        <div class="mx-auto col-7 f-2">
            <p class="about-p">
                Team Orbailix is not just some one place job where you will have to experience work only
                but along with that it’s where you grow and learn, better and best than before.
                The world as going through a technological revolution requires a lot of scientific
                and modernism techniques, Orbailix leads it’s people towards the doors of advancement and
                also contemporariness.
            </p>
        </div>
        <div class="mx-auto col-7 f-2">
            <p class="about-p">
                Our way of implementation is always based upon having each other’s back as unity is where
                strength lies which means that we all are in together for each work. The approach which we
                keep towards each situation includes technicality and strategy.
            </p>
        </div>
        <div class="mx-auto col-7 f-2">
            <p class="about-p">
                Guaranteeing results for the clients is one of the prioritized task for us as striving
                towards perfection is one of the merits of Team Orbailix.
                Team Orbailix won’t just get your job done but it will provide you the basic elements
                along with it such as security, being the upmost priority of each individual.
            </p>
        </div>
    </div>
</section>

<!--====================================
        Team Section
    =======================================-->
<section class="_Orb-team" id="_Our-team">
    <div class="text-center m-b-4">
        <h1 class="_Orb-title __orange d-inline-block"> ORBAILIX TEAM </h1>
    </div>

    <!-- row 1 -->
    <div class="row justify-content-center m-b-3">

        <div class="col-3 text-secondary text-center">
            <div class="col-8 _Orb-dev">
                <img src="./assets/img/user.webp" alt="">
            </div>
            <br>
            <h4 class="_Orb-card-tit "> Mazhar Hussain </h4>
            <p class="card-Sub-tit p-0">CEO</p>
        </div>

        <div class="col-3 text-secondary text-center">
            <div class="col-8 _Orb-dev">
                <img src="./assets/img/user.webp" alt="">
            </div>
            <br>
            <h4 class="_Orb-card-tit "> Muhammmad Aqib </h4>
            <p class="card-Sub-tit p-0">CEO</p>
        </div>

        <div class="col-3 text-secondary text-center">
            <div class="col-8 _Orb-dev">
                <img src="./assets/img/user.webp" alt="">
            </div>
            <br>
            <h4 class="_Orb-card-tit "> Raees Azam </h4>
            <p class="card-Sub-tit p-0">CEO</p>
        </div>
    </div>

    <!-- row 2 -->

</section>

<!--====================================
        SERVICES
    =======================================-->
<section class="__Orb-services" id="_Orb-ser">
    <div class="text-center m-b-3 mx-0">
        <h1 class="_Orb-title __orange d-inline-block">OUR SERVICES</h1>
    </div>
    <br>
    <!-- services cards -->
    <div class="row  __orange justify-content-center m-0 px-3">
        <div class="col-3 _Orb_ser-card">
            <h3 class="_Orb-card-tit"> Website Development </h3>
            <ul class="list-group">
                <li class="list-group-item">Business Websites</li>
                <li class="list-group-item">Job Board</li>
                <li class="list-group-item">Business Directory</li>
                <li class="list-group-item">Question & Answer Websites</li>
                <li class="list-group-item">NonProfit & Religious Websites</li>
                <li class="list-group-item">Portfolio Websites</li>
                <li class="list-group-item">Magazine Websites</li>
                <li class="list-group-item">E-commerce Websites</li>
                <li class="list-group-item">Blogs</li>
                <li class="list-group-item">Landing Pages</li>
                <li class="list-group-item">Social Media Websites</li>
                <li class="list-group-item">Directory & Contact Pages</li>
            </ul>
        </div>
        <div class="col-3 _Orb_ser-card">
            <h3 class="_Orb-card-tit "> Security Services </h3>
            <ul class="list-group">
                <li class="list-group-item">Xss</li>
                <li class="list-group-item">Sql Injection</li>
                <li class="list-group-item">Unrestracted File Upload</li>
                <li class="list-group-item">Session Management</li>
                <li class="list-group-item">CSRF</li>
                <li class="list-group-item">Brute Force Attack</li>
                <li class="list-group-item">Command Injection</li>
                <li class="list-group-item">No Redirect </li>
                <li class="list-group-item">SQL Trancation</li>
                <li class="list-group-item">Open Ports Testing</li>
                <li class="list-group-item">PHP Injection</li>
                <li class="list-group-item">HTML Injection</li>
                <li class="list-group-item">IDOR</li>
            </ul>
        </div>
        <div class="col-3 _Orb_ser-card">
            <h3 class="_Orb-card-tit "> Eectronics & IoT </h3>
            <ul class="list-group">
                <li class="list-group-item">PCB Designing</li>
                <li class="list-group-item">Hardware Designing</li>
                <li class="list-group-item">Simple Circuit Designing</li>
                <li class="list-group-item">Arduino Projects</li>
                <li class="list-group-item">Pic Microcontroller Designing</li>
                <li class="list-group-item">8051 Microcontroller</li>
                <li class="list-group-item">ATmega358</li>
                <li class="list-group-item">Raspberry Pi</li>
                <li class="list-group-item">IoT Projects</li>
                <li class="list-group-item">Home Automation</li>
                <li class="list-group-item">Smart Mirror</li>
                <li class="list-group-item">Simple Touch Light Mirror</li>
            </ul>
        </div>
        <div class="col-3 _Orb_ser-card">
            <h3 class="_Orb-card-tit "> Grahic Designing </h3>
            <ul class="list-group">
                <li class="list-group-item">Logo Designing</li>
                <li class="list-group-item">Broucher Designing</li>
                <li class="list-group-item">Flyer Designing</li>
                <li class="list-group-item">Poter Designing</li>
                <li class="list-group-item">Business Cards Designing</li>
                <li class="list-group-item">Banner Designing</li>
                <li class="list-group-item">Social Media post Designing</li>
                <li class="list-group-item">Web Designing</li>
                <li class="list-group-item">Publication Graphic Designing</li>
                <li class="list-group-item">Any Print Media Designing</li>
                <li class="list-group-item">Video Animation</li>
                <li class="list-group-item">Video editing</li>
            </ul>
        </div>
    </div>
    <br><br><br>
</section>

<!--====================================
        CONTACT US
    =======================================-->
<section class="__Orb-contact-us" id="_Orb-cntctUs">
    <div class="row">
        <div class="text-center m-b-3">
            <h1 class="_Orb-title __orange d-inline-block"> CONTACT US </h1>
        </div>
        <div class="left-col col-8 col-lg-7">
            <div class="Contact-Message m-b-3">
                <h4 class="_Orb-card-tit">LEAVE US A MESSAGE</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, reprehenderit! Molestias
                ad neque reiciendis quia. Saepe quam temporibus doloremque ipsum neque. Nesciunt, nisi?
                Impedit beatae aperiam sapiente. Distinctio, blanditiis vitae.
            </div>
            <!-- form -->
            <form method="POST" action="<?echo $_SERVER['PHP_SELF'];?>" class="_Orb-form">
                <div class="m-b-3">
                    <label for="Name" class="form-label">*Name</label>
                    <input type="text" class="form-control" id="CntctUsName" placeholder="Your Name" name="name" aria-label="Name">
                </div>
                <div class="row m-b-3">
                    <div class="col-6">
                        <label for="email" class="form-label">*Email address</label>
                        <input type="email" class="form-control" id="CntctUsEmail" placeholder="name@example.com" aria-label="email" name="email" required>
                    </div>
                    <div class="col-6">
                        <label for="Phone number" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="CntctUsphone" placeholder="+X XXX XXX XXXX" name="phone" pattern="[+]{1}[0-9]{11,14}" required>
                    </div>
                </div>
                <div class="m-b-3">
                    <label for="Description" class="form-label">* Description</label>
                    <textarea class="form-control" name="desp" id="cntctDesc" rows="6" required></textarea>
                </div>
                <br>
                <input type="submit" name="submit" class="_Orb-btn Orb-bg-orange" value="SEND MESSAGE">
            </form>
        </div>
        <div class="right-col col-3 col-lg-5">
            <h4 class="_Orb-card-tit">Location : </h4>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.834690190347!2d71.53857681469776!3d33.99677962809941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d917cda7bdaaef%3A0xf76e3d96e06180e4!2sDenis%20plaza%20peshawar!5e0!3m2!1sen!2s!4v1613981061480!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>
            email : <a href="#">example@something.com</a> <br>
            phone : <a href="#">+92 000 000 0000</a>
        </div>
    </div>
</section>

<!--====================================
        CAREER SECTION
    =======================================-->


<!--====================================
        FOOTER
    =======================================-->
<section class="_Orb-footer text-center __orange pt-4 pb-0">
    <h4 class="_Orb-card-tit"> FOLLOW US : </h4>
    <div class="social-media mb-2">
        <a href="#" class="__orange f-2"> <span class="fab fa-facebook-f"> </span> </a>
        <a href="#" class="__orange f-2"> <span class="fab fa-twitter"> </span> </a>
        <a href="#" class="__orange f-2"> <span class="fab fa-linkedin-in"></span> </a>
        <a href="#" class="__orange f-2"> <span class="fab fa-instagram"> </span> </a>
        <a href="#" class="__orange f-2"> <span class="fas fa-user"> </span> </a>
    </div>
    <p class="_Orb-rights f-2 m-0 text-secondary fst-italic">
        © 2021 Orbailix All Rights are Reserved
    </p>
</section>

<?php include('includes/footer.php'); ?>