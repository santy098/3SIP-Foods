<?php include("head.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
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
    margin-left:50px;
}
    </style>
</head>
<body>



<div class="card">
<ion-icon name="contact" class="user" ></ion-icon>
<?php
if(isset($_SESSION['user_info'])){
    echo"<h1>".$_SESSION['first_name']." ".$_SESSION['last_name']."</h1>";
    echo"<p class='title'>".$_SESSION['user_info']."</p>";
    echo"<p class='title'>".$_SESSION['addr']."</p>";
    
    echo"<h3>".$_SESSION['mob']."</h3>";
}
  ?>
</div>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>    
</body>
</html>