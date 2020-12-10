<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Amalia Safira">
    <meta name="generator" content="Jekyll v4.0.1">
    <link rel="icon" href="">
    <title>EXPO VIRTUAL HOMEPAGE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="asset_user/assets/dist/css/bootstrap.css" rel="stylesheet">
    <link href="asset_user/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link href="asset_user/edible.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="asset_user/cover.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176798522-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-176798522-1');
    </script>
  </head>
  <body class="" style="background-color: white;color: black;text-shadow: none;">
    
    <div class="d-flex w-100 h-100 mx-auto flex-column">
  <!-- cs -->
  <header class="mb-2 pt-3 pb-2" id="myHeader">
      <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href=""><img src="pamer_black.png" class="img-responsive mr-3" alt="Image" style="height: 50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: black;border-width: 3px">
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="p-2 text-muted nav-link" href=""><h6>Home</h6></a>
            </li>
            <li class="nav-item">
              <a class="p-2 text-muted nav-link" href=""><h6>Berita</h6></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="" method="POST" role="form" enctype="multipart/form-data">
            <input class="form-control mr-sm-2 mr-1" type="search" placeholder="Search" aria-label="Search" style="width: 400px;border-color: #5f6769" name="search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </nav>
  </header>

  <!-- arrow down -->
  <div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 imgshape" src="caro1.jpg ?>" alt="First slide" >
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 imgshape" src="caro2.jpg ?>" alt="First slide" >
        </div>
      </div>
    </div>
    <div class="sticky_count text-right">
      <div class="color-pad text-right">
        <h1 class="display-4">The New Exhibition</h1>
      </div>
      <h1 class="display-4 text-white text-right">Come Join In!</h1>
      <a href="login.php"><button type="button" class="btn btn-default join-button">Join Now</button></a>
    </div>
  </div>

  <div id="expo" class="bg-about-start pt-5 pb-5">
    <div class="container text-white">
      <div class="row">
        <div class="col-12 col-md-6 align-self-center">
          <h1 class="display-3">Expo Virtual</h1>
          <h1 class="display-4" style="color: yellow">The New Innovation</h1>
          <p class="text-justify pb-5">Expo Virtual dari <b>pamerpamer.com</b> merupakan sarana pameran secara digital sebagai pengganti pameran konvensional. Mudah diakses, efektif, dan tentunya fleksibel</p>
        </div>
        <div class="col-12 col-md-6">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/wCgqtrwules" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-sponsor">
    <div class="container pt-5 pb-5">
      <h2 class="display-4 mb-5 mt-5 text-center text-white">Klien Kami</h2>
      <div class="row justify-content-md-center">
        <?php for ($i=0; $i < 5; $i++) {?>
        <div class="col-6 col-md-2 mb-3" ><img src="https://www.pngkey.com/png/full/407-4073466_open-property-logo-property.png" class="img-responsive mb-1 mr-1" alt="Image" style="width: 70%"></div>
        <?php } ?>
      </div>
    </div>
  </div>
<div class="bg-newsletter text-white pt-5 pb-5">
  <div class="container">
    <blockquote class="blockquote text-center mb-5">
      <p class="mb-0">Subscribe for Daily News by Email</p>
    </blockquote>
    <div class="input-group mb-3" style="height: 50px;">
      <input type="text" class="form-control" placeholder="Insert Your Active Email" aria-label="Recipient's username" aria-describedby="basic-addon2" style="height: 100%">
      <div class="input-group-append">
        <button class="btn btn-danger" type="button" style="height: 100%">Send Email</button>
      </div>
    </div>
  </div>
</div>
  <main role="main" >
    <div class="container mt-5">
    <div class="mb-4">
      <h4>Berita Terkini</h4>
      <hr>
      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href=""><img src="https://cdn0-production-images-kly.akamaized.net/SrugQn8pi5VXfi0cb1hwl8GXvfc=/1231x710/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1861372/original/060879000_1517648615-20180203-BTN-Gelar-Indonesia-Property-Expo-2018-ANGGA-1.jpg" class="img-responsive thumb imgberita mb-2"></a>
          <div class="card-body">
            <h5 class="card-title">Expo Property 2021</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href=""><img src="https://cdn0-production-images-kly.akamaized.net/SrugQn8pi5VXfi0cb1hwl8GXvfc=/1231x710/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1861372/original/060879000_1517648615-20180203-BTN-Gelar-Indonesia-Property-Expo-2018-ANGGA-1.jpg" class="img-responsive thumb imgberita mb-2"></a>
          <div class="card-body">
            <h5 class="card-title">Expo Property 2021</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href=""><img src="https://cdn0-production-images-kly.akamaized.net/SrugQn8pi5VXfi0cb1hwl8GXvfc=/1231x710/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1861372/original/060879000_1517648615-20180203-BTN-Gelar-Indonesia-Property-Expo-2018-ANGGA-1.jpg" class="img-responsive thumb imgberita mb-2"></a>
          <div class="card-body">
            <h5 class="card-title">Expo Property 2021</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href=""><img src="https://cdn0-production-images-kly.akamaized.net/SrugQn8pi5VXfi0cb1hwl8GXvfc=/1231x710/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1861372/original/060879000_1517648615-20180203-BTN-Gelar-Indonesia-Property-Expo-2018-ANGGA-1.jpg" class="img-responsive thumb imgberita mb-2"></a>
          <div class="card-body">
            <h5 class="card-title">Expo Property 2021</h5>
          </div>
        </div>

      </div>
    </div>
</div>
  </main>

<footer class="mastfoot mt-auto bg-footer">
    <div class="container">
      <div class="row">
      <div class="col-8 col-md-4 pr-4">
          <a  href=""><img src="pamer_white.png" class="img-responsive mr-3 mb-5" alt="Image" style="width: 100%"></a>
        <p class="mt-8">Sarana pameran secara digital sebagai pengganti pameran konvensional. Mudah diakses, efektif, dan tentunya fleksibel</p>
      </div>
      <div class="col-4 col-md-2">
        <h5 class="text-light">Content</h5>
        <nav class="nav flex-column">
          <a class="nav-link" href="" style="color: white">Home</a>
          <a class="nav-link" href="" style="color: white">Berita</a>
          <a class="nav-link" href="" style="color: white">Jadwal Tayang</a>
          <a class="nav-link" href="" style="color: white">Akun Anda</a>
        </nav>
      </div>
      <div class="col-12 col-sm-6 mt-2">
        <div class="row">
        <!-- <?php foreach ($sponsor as $key) {?>
        <div class="col-4 col-sm-4">
          <?php if ($key->nama == 'Jawapos') {?>
            <h6 class="text-light mb-3">Hosted By</h6>
          <?php }elseif($key->nama == 'Bank BRI'){ ?>
            <h6 class="text-light mb-3">Official Bank Partner</h6>
          <?php }else{ ?>
            <h6 class="text-light mb-3">Supported By</h6>
          <?php } ?>
          
          <img src="img/sponsor/<?=$key->gambar ?>" class="img-responsive mb-2 mr-1" alt="Image" style="width: 100%">
        </div>
        <?php } ?> -->
      </div>
      </div>
      <div class="col-12 col-md-12 text-center mt-5">
        © 2020 Pamer Pamer<br>
      </div>
    </div>
    </div>
  </footer>
</div>
</body>

<!-- jQuery -->
<script src="asset_user/assets/dist/js/jquery-3.5.1.js"></script>
<script src="asset_user/assets/dist/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="asset_user/assets/dist/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
