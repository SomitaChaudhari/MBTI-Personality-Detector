<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="./src/counselling.css">

  <title>Counselling</title>
</head>

<body>
  <nav>
    <div class="logo">
        <h4>Counselling Page</h4>
    </div>
    <ul class="nav-links">
        <li><a href="./test.php"> Test Page</a></li>
        <li><a href="./exploreindex.php">Explore Index</a></li>
        <li><a href="#"> Counselling</a></li>
        <li><a href="logout.php"> Logout</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
  <section id="sect1">
    <div class="heading">
      <h1 class="ml12">Need Counselling?</h1>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <p>Dont worry we've got you covered! <br>
        Here are some of our best counsellors.
      </p>
      <a id="btn-click" href="#sect3">Have a look</a>
    </div>
    <div class="img_image">
      <img src="./src/counsellingnew.png" alt="CounsellingImage">
    </div>
  </section>
  <section class="sect2" id="sect2">
    <h2 class="howdoes">How does this work?</h2>
    <p class="howdoespara">We partner with counsellors to help you reach them.</p>
    <div class="choose">
      <ul>
        <li>Choose a counsellor.</li>
        <li>Fill the form to book a seesion.</li>
        <li>The counsellor will email you further information et voilà!</li>
      </ul>
    </div>
    <div class="img2">
      <img src="./src/counsellingnew1.svg" alt="">
    </div>
    <div class="img3">
      <img src="./src/counsellingnew3.svg" alt="">
    </div>
  </section>

  <section class="sect3" id="sect3">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor1.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor1 <br> Specialization: Analysts <br>Experience: 5yrs</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor2.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor2 <br> Specialization: Diplomats <br>Experience: 3yrs</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor 3.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor3 <br> Specialization: Sentinels <br>Experience: 4yrs</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor4.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor4 <br> Specialization: Explorers <br>Experience: 3yrs</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor6.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor5 <br> Specialization: Analysts <br>Experience: 1yr</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top imgcoun1" width="20em" src="./src/counsellor5.jpg" alt="">
          <div class="card-body">
            <p class="card-text">Name: Counsellor6 <br> Specialization: Sentinels <br>Experience: 4yrs</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"
                  onclick="location='sendMail.php'">Select</button>
              </div>
              <small class="text-muted">Verified</small>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>
<script src="./javascript/counselling.js"></script>

</html>