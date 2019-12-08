<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width:70%;
      height: 100%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="left:15%;">
    <div class="carousel-item active">
      <img src="img/tg.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Tangos's Mediterranean Restaurant</h3>
    <p>3rd block, Koramangala</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/ab.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Arby's Cafe</h3>
    <p>15th main, Indiranagar</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/sw.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Subway</h3>
    <p>Nearest outlets</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/7-min.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Burgers</h3>
    <p>@Tangos's</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/2-min.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Pizzas</h3>
    <p>@Fabio Tribocchi</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/4-min.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h3>South Indian</h3>
    <p>@Chilis</p>
  </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
