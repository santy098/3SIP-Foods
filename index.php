
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href="css/style.css">
</head>
<body style="background-color:black;">

<div class="row">
    <div class="col-lg-7">
    <?php include("head.php") ?>
        <div class="jumbotron main-box" style="background-color: rgba(0,0,0);border-radius:0px;">
                        <div class="row">
                            <div class="col-lg-12" style="font-family: 'Righteous', cursive;">
                                <h1 class="display-4">Hungry? No more!</h1>
                                <p class="lead">Your favourite food, delivered with love.</p><br><br>
                                <hr class="my-4">
                                <p>Join Bengauru's biggest food community and get hassle free delivery to your doorstep.</p>
                                <p class="lead">
                                    <?php if(isset($_SESSION['user_info']))
                                        echo "<a class='btn btn-success btn-lg' href='shopping.php' role='button' style='background-color: rgb(250, 91, 38);border:0px;'>Order now!</a>
                                </p>";
                                else
                                echo "<a class='btn btn-success btn-lg' href='login.php' role='button' style='background-color: rgb(250, 91, 38);border:0px;'>Order now!</a>
                                </p>";
                                ?>

                            </div>
                        
                        </div>
                            
        </div>
    </div>

    <div class="col-lg-5 index-pic" style="background-image:url('img/background-main2.jpg');background-size:cover;">
                               
        </div>
    </div>
</div>
              


                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="img/1-min.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/2-min.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="img/3-min.jpg" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
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

<?php include("footer.php"); ?>

                      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>