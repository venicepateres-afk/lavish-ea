+<?php 
include 'assets/includes/header.php';
include 'sfac-bac/includes/conn.php';
?>

<title>Home | Saint Francis of Assisi College Bacoor</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S6BLSMCF9Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-S6BLSMCF9Q');
</script>
</head>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-7VLEHZJ5Z6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-7VLEHZJ5Z6');
</script>

<!-- ======= Custom Design ======= -->
<style>
  /* ======= Global Fonts and Colors ======= */
  body {
    font-family: "Poppins", "Segoe UI", Arial, sans-serif;
    color: #222;
    background-color: #fff;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    color: #c81c1c; /* main red */
  }

  a {
    color: #c81c1c;
    text-decoration: none;
    transition: 0.3s;
  }
  a:hover {
    color: #ffcc00; /* yellow hover */
  }

  /* ======= Hero Section ======= */
  #hero {
    background: linear-gradient(180deg, #fff 0%, #c81c1c 90%);
    color: #fff;
    text-align: center;
    padding: 60px 0;
  }

  #hero h1 {
    color: #fff;
    font-size: 2.5rem;
  }

  #hero h2 {
    color: #ffcc00;
    font-weight: 500;
  }

  .btn-get-started {
    background-color: #ffcc00;
    color: #000;
    font-weight: 600;
    border-radius: 25px;
    padding: 10px 25px;
    transition: 0.3s;
  }

  .btn-get-started:hover {
    background-color: #000;
    color: #ffcc00;
  }

  /* ======= Announcement Ticker ======= */
  .ticker {
    background-color: #fff;
    border: 2px solid #c81c1c;
    border-radius: 8px;
  }

  .title {
    background: #c81c1c;
  }

  .title h5 {
    color: #fff;
    font-weight: bold;
  }

  .news {
    border: 1px solid #c81c1c;
  }

  .news-content p {
    color: #000;
    font-weight: 500;
  }

  .news-content a {
    color: #c81c1c;
    font-weight: 600;
  }

  .news-content a:hover {
    color: #ffcc00;
  }

  /* ======= Carousel ======= */
  .carousel-indicators button {
    background-color: #ffcc00;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(200, 28, 28, 0.8);
    border-radius: 50%;
  }

  /* ======= Cards ======= */
  .card {
    border: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
    border-radius: 12px;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card-body {
    background-color: #fff;
    text-align: center;
  }

  .card-title a {
    color: #c81c1c;
    font-size: 1.2rem;
  }

  .card-title a:hover {
    color: #ffcc00;
  }

  /* ======= Testimonials Section ======= */
  #testimonials {
    background-color: #fef3f3;
  }

  .section-title h2 {
    color: #c81c1c;
    font-weight: 700;
  }

  .testimonial-item {
    background-color: #fff;
    border-left: 5px solid #c81c1c;
    padding: 20px;
    border-radius: 12px;
  }

  .testimonial-item h3 {
    color: #c81c1c;
    font-size: 1.3rem;
  }

  .testimonial-item h4 {
    color: #555;
    font-size: 1rem;
  }

  /* ======= Footer ======= */
  footer {
    background-color: #000;
    color: #fff;
    padding: 30px 0;
  }

  footer a {
    color: #ffcc00;
  }

  footer a:hover {
    color: #fff;
  }
</style>


<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KG6WD3G"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="sSX03XeH"></script>

  <?php include('assets/includes/navbar.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-md-auto">
          <img src="assets/img/sfac_logo.png" style="width: 150px; height: 150px;">
        </div>
        <div class="col">
          <h1>Welcome to<br> Saint Francis of Assisi College - Bacoor</h1>
          <h2>#96 Bayanan, City of Bacoor, Cavite</h2>
          <a href="contact.php" class="btn-get-started">Contact Us!</a>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <img src="assets/img/Tagline.png" style="width: 40%; height: 40%;">
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="counts2" class="counts2 section-bg">
      <div class="container">
        <div class="row ticker">
          <div class="col-auto title align-items-stretch">
            <h5><b>Announcements</b></h5>
          </div>
          <div class="col news">
            <marquee class="news-content" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
              <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE prio = '1' ORDER BY date DESC");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
              ?>
              <p><a href="<?php echo $row['link']?>"><b><?php echo $row['title']?></b> (<?php echo $date->format('M d, Y');?>)</a></p>
              <?php } ?>
              <?php
                $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE NOT prio = '1' ORDER BY date DESC LIMIT 5");
                while ($row= mysqli_fetch_array($get_announcement)) {
                    $date = new DateTime($row['date']);
              ?>
              <p><a href="<?php echo $row['link']?>"><b><?php echo $row['title']?></b> (<?php echo $date->format('M d, Y');?>)</a></p>
              <?php } ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section id="counts" class="counts section-bg">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active"><img src="assets/img/hedbac1.jpg" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/insti1.png" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/peacCert.jpg" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/psenrollment.png" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/bed3guide.png" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/shenrollment.png" class="d-block img-fluid w-100"></div>
            <div class="carousel-item"><img src="assets/img/preSchool.jpg" class="d-block img-fluid w-100"></div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </section>

    <section id="events" class="">
      <div class="container justify-content-center">
        <div class="row justify-content-center">
          <div class="col" style="display:block;">
            <center><iframe class="yt-vid"
              src="https://www.youtube.com/embed/LXdz4GEJBoc?playlist=LXdz4GEJBoc&loop=1" frameborder="0" allowfullscreen>
            </iframe></center>
          </div>
        </div>
      </div>
    </section>

    <section id="events" class="events">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img"><img src="assets/img/basic_ed.jpg" alt="..."></div>
              <div class="card-body">
                <h5 class="card-title"><a href="department_bed.php">Basic Education Department</a></h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img"><img src="assets/img/higher_ed.jpg" alt="..."></div>
              <div class="card-body">
                <h5 class="card-title"><a href="department_hed.php">Higher Education Department</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>News Update</h2>
          <p>Follow Us on Facebook</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
              $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE prio = '1' ORDER BY date DESC");
              while ($row= mysqli_fetch_array($get_announcement)) {
                $date = new DateTime($row['date']);
            ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3><?php echo $row['title']?></h3>
                  <h4><?php echo $date->format('M d, Y');?></h4>
                  <?php echo $row['embed'];?>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php
              $get_announcement = mysqli_query($db,"SELECT * FROM tbl_announcements WHERE NOT prio = '1' ORDER BY date DESC LIMIT 5");
              while ($row= mysqli_fetch_array($get_announcement)) {
                $date = new DateTime($row['date']);
            ?>
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3><?php echo $row['title']?></h3>
                  <h4><?php echo $date->format('M d, Y');?></h4>
                  <?php echo $row['embed'];?>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
  </main>

  <?php include ('assets/includes/footer.php'); ?>


