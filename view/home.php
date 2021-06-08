<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">

<title>Document</title>
</head>
<body id="page-top">
//ini yang edit cacayang

<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top" id="mainNav">
  <div class="container">
    <div class ="logo"><a href ="#"><img src ="logo.jpg" width="28px"></a></div>
    <a class="navbar-brand active text-light" href="#page-top"><b style= "font-family: font-family: 'Limelight', cursive;" >ARDAH</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link active text-light js-scroll-tringger" href="#home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active text-light dropdown-toggle" href="#produk" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">SKIN CARE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">HAIR CARE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">MAKE UP</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light js-scroll-tringger" href="#articles">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light js-scroll-tringger" href="#skin analyzer">SKIN ANALYZER</a>
        </li>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      
        <form class="form-inline my-2 my-lg-0" style="margin-left: 15px">
                <a class="btn btn-outline-light my-2 my-sm-0" type="submit"href="../index.php">Logout</a>
        </form>
          
        <div class="medsos">
        <div class="container">
        </div>
    </div>
      </ul>
    </div>
  </div>
</nav>

<br></br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="home1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="home2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="home3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <div class="card text-center">
  <div class="card-body">
    <h5 class="card-title"><b style = "font-family: 'ZCOOL KuaiLe', cursive;">---WHAT'S NEW---</b></h5>
  </div>

  <div class="row mx-auto">
  <div class="card" style="width: 18rem;">
  <img src="lipstik.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Colorfit Ultralight Matte Lipstick</h5>
    <p class="card-text"><b>RP. 43.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="moisturizer.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah C-Defenes Mousse Moisturizer</h5>
    <p class="card-text"><b>RP. 85.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="bodyseries.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Nature Daily Aloevera</h5>
    <p class="card-text"><b>RP. 31.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="founddation.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Colorfit Matte Foundation</h5>
    <p class="card-text"><b>RP. 70.500</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="serum.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Lightening Serum Ampoule</h5>
    <p class="card-text"><b>RP. 145.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="moisturizer2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hydra Rose Moisture Rich Night Gel</h5>
    <p class="card-text"><b>RP. 113.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="powder.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Colorfit Mattifying Powder</h5>
    <p class="card-text"><b>RP. 94.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="lip.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Colorfit Velvet Matte Lip Mouse</h5>
    <p class="card-text"><b>RP. 73.000</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="moisturizer3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Acnederm Acne Spot Treatment Gel</h5>
    <p class="card-text"><b>RP. 21.600</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="lipcream.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wardah Colorfit Last All Day Lip Paint</h5>
    <p class="card-text"><b>RP. 21.600</b></p>
    <a href="#" class="btn btn-primary">PESAN</a>
  </div>
  </div>

  <div class="row mx-auto">
  <div class="card-group">
  <div class="card">
    <img src="isi1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    </div>
    <div class="card-footer">
      <small class="text-muted"><b>Last updated 3 mins ago</b></small>
    </div>
  </div>

  <div class="card">
    <img src="isi2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    </div>
    <div class="card-footer">
      <small class="text-muted"><b>Last updated 3 mins ago</b></small>
    </div>
  </div>


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="footer.jpg" style="width: 100px" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
