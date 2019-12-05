<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300|PT+Serif:700|Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href="css/style.css">
</head>
<body style="background-color:black;">

<div class="row">
    <div class="col-sm-7">
    


    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 0, 0);">
                <a class="navbar-brand" href="index.php"><img src="img/3sip_Ologo.png" style="height: 100px;width: 100px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    
                    <a class="nav-item nav-link" href="help.php">Help</a>

                        
                                        
                    <?php  

                      if(isset($_SESSION['user_info']))
                      {
                        echo '<li class="nav-item">
                        <a  class="nav-link" href="login.php"> '.$_SESSION['first_name']." ".$_SESSION['last_name'].'</a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link"  href="login.php?ac=logout">Logout</a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link"  href="shopping.php">My cart</a>
                        </li>';
                      }
                      else
                        echo '<A  class="nav-item nav-link" HREF="login.php">Login</A>';
                    ?>
                  </div>
                </div>
              </nav>




        <div class="jumbotron main-box" style="background-color: rgba(0,0,0,0.0);border:0px;font-family:'Fira Sans', sans-serif">
                        <div class="row">
                            <div class="col-sm-12" >
                                <h1 class="display-4"  style="font-family: 'Fira Sans', cursive;">Hungry? No more!</h1>
                                <p class="lead"  style="font-family: 'Fira Sans', sans-serif;">Your favourite food, delivered with love.</p><br><br>
                                <hr class="my-4">
                                <p style="font-family: 'Fira Sans', sans-serif;">Join Bengaluru's biggest food community and get hassle free delivery to your doorstep.</p>
                                <p class="lead">
                                    <?php if(isset($_SESSION['user_info']))
                                        echo "<a class='btn btn-success btn-lg' href='hotels.php' role='button' style='background-color: rgb(250, 91, 38);border:0px;font-family: 'Fira Sans', sans-serif;'>Order now!</a>
                                </p>";
                                else
                                echo "<a class='btn btn-success btn-lg' href='login.php' role='button' style='background-color: rgb(250, 91, 38);border:0px;font-family: 'Fira Sans', sans-serif;'>Order now!</a>
                                </p>";
                                ?>

                            </div>
                        
                        </div>
                            
        </div>
    </div>

    <div class="col-sm-5 index-pic" style="background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),url('img/test2.jpg');background-size:cover;">
                               
        </div>
    </div>
</div>
              <br><br>
              
              
              <section class="section-features" id="features" style="color:white">
                                                                
                                                                <div>
                                                                  <center>
                                                                    <h2>Get food fast &mdash; not fast food.</h2>
                                                                    <p>
                                                                        Hello, we’re 3SIP Foods, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                                                                    </p>
                                                                    </center>
                                                                </div>
                                                    
                                                            <div class="row">
                                                                <div class="col-sm-3 box" style="background-color:lightgray;color:black;">
                                                                <ion-icon class="fb" name="logo-facebook"></ion-icon>
                                                                <h3>Up to 365 days/year</h3>
                                                                    <p>
                                                                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                                                    
                                                                </div>
                                                    
                                                    
                                                                <div class="col-sm-3 box" style="background-color:white;color:black;">
                                                                <ion-icon class="fb" name="logo-facebook"></ion-icon>
                                                                <h3>Ready in 20 minutes</h3>
                                                                    <p>
                                                                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                                                    
                                                                </div>
                                                    
                                                                <div class="col-sm-3 box" style="background-color:lightgray;color:black;">
                                                                <ion-icon class="fb" name="logo-facebook"></ion-icon>
                                                                <h3>100% organic</h3>
                                                                    <p>
                                                                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                                                    
                                                                </div>
                                                    
                                                                  <div class="col-sm-3 box" style="background-color:white;color:black;">
                                                                  <ion-icon class="fb" name="logo-facebook"></ion-icon> 
                                                                      <h3>Order anything</h3>                    
                                                                    <p>
                                                                    We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
                                                    
                                                                </div>
                                                                
                                                             </div>
                                                                
                                                          </section>
              
              
              
              
              <br><br>


                 <?php include("carousel.php"); ?>

<?php include("footer.php"); ?>

                      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>