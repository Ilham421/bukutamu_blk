
<!-- lINK css dan javascript -->
<head>
  <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootrstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/navbar.css">
</head>

<header>
  <!-- Cek Jaringan -->
  <section id="statusjaringan"></section>

  <!-- Navbar -->
  <div class="topnav animate_animated animate__bounceOut" id="myTopnav">
      <div class="kiri">
        <a href="index.php"><img src="image/logokemnaker.png" alt=""></a>
      </div>
      <div class="kemnaker">
        
        <center>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
        </svg>
          BUKU TAMU
        </center>
      </div>
      <div class="kanan">
        <a  href="process/logout.php">LogOut</a>
      </div>
    </div>

  <!-- Corousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/slide img 1.jpg" alt="Los Angeles" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="image/slide img 2.jpg" alt="Chicago" style="width:100%; height: 550px;">
      </div>
      <div class="item">
        <img src="image/slide img 3.jpg" alt="New york" style="width:100%; height: 550px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<script src="js/cekjaringan.js"></script>
