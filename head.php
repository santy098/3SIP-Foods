<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
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
                        echo '<a  class="nav-item nav-link" style="margin-left:1000px" href="user.php"> '.$_SESSION['first_name']." ".$_SESSION['last_name'].'</a>';
                        echo '<a  class="nav-item nav-link"  href="login.php?ac=logout">Logout</a>';
                      }
                      else
                        echo '<A  class="nav-item nav-link" HREF="login.php">Login</A>';
                    ?>

                    
                  </div>
                </div>
              </nav>
</body>
</html>