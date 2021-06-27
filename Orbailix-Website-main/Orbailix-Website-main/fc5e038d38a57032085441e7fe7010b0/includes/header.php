<!DOCTYPE html>
<html lang="en">

<head>
  <title>Orbailix </title>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Author" content="Mazhar Hussain">
  <meta name="description" content="Orbailix is a software house and Cyber Security Research Center with the aim to provide secure products to the client.
    Our Services:
    1. Website Development
    2. Security services
    3. Electronics and IoT development
    4. Graphic Designing
    5. SEO" />
  <meta name="keywords" content="Website Development, Cyber Security services, Electronics and IoT development, Graphic Designing, SEO, javascript" />
  <!-- ico icon -->
  <link rel="icon" href="../assets/img/logo.ico">
  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="../assets/css/index.css" rel="stylesheet">

</head>

<body>


  <header class="p-relative">
    <!-- <button class="navbar-toggler text-white d-lg-none" type="button">
          <span><i class="fas fa-bars"></i></span>
        </button> -->
    <nav class="__nav __fixedPos">
      <a href="#" class="nav_brand">
        <img src="../assets/img/logo.svg" alt="">
      </a>
      <?php
      session_start();
      if (isset($_SESSION['email'])) {
        echo '
          <a href="dashboard.php" class="link ms-auto"> Dashboard</a>  
          <a href="scroll.php" class="link"> Add Marquee</a>  
          <a href="add.php" class="link me-auto"> Add Job</a> 
          ?>';
      } ?>
    </nav>