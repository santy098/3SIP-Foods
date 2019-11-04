<?php include("head.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: 100px auto;
  text-align: center;
}
.title {
  color: grey;
  font-size: 18px;
}
.user{
    height:200px;
    width:200px;
    
}
button{
  height:40px;
  width:150px;
  background-color:green;
  color:white;
  border:0px;
  text-decoration:none;
  border-radius:5px;
}
    </style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('img/background-main.jpg');background-attachment:fixed;">



<div class="card">
  <div class="row">
  <div class="col-lg-7">
  <ion-icon name="contact" class="user" ></ion-icon>
  <?php
  if(isset($_SESSION['user_info'])){
      echo"<h1>".$_SESSION['first_name']." ".$_SESSION['last_name']."</h1>";
      echo"<p class='title'>".$_SESSION['user_info']."</p>";
      echo"<p class='title'>".$_SESSION['addr']."</p>";
      echo"<h3>".$_SESSION['mob']."</h3><br></div><div class='col-lg-5'><br><br><br>";
      echo"<a href='shopping.php'><button>My orders</button></a><br><br>";
      echo"<a href='changepw.php'><button>Change Password</button></a><br><br>";
      echo"<a href='deact.php'><button>Deactivate</button></a><br>";
      echo"<br><br></div>";
  }
    ?>
  </div>
</div>
<?php include("footer.php"); ?>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>    
</body>
</html>