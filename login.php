<?php

session_start();

error_reporting(0);

$SETTINGS["mysql_database"] = 'foodies';
$SETTINGS["USERS"] = 'php_users_login'; // this is the default table name that we used


/* Connect to MySQL */
$connection = mysqli_connect("localhost","root","","foodies") or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');

if(isset($_POST['']))
{
  
	 if(isset($_SESSION['user_info']) && is_array($_SESSION['user_info']))	{
	 $_SESSION['check']='1';
	 }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel ="stylesheet" href="css/style.css">

    

</head>

<body class="body2" style=" background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('img/background-main.jpg');">


<?php
    if(isset($_GET['ac']) && $_GET['ac'] == 'logout'){
        session_unset();
        session_destroy();
        $red = 'index.php';
        echo"<script>window.location.href='$red'</script>";
    }
    
	$error = '';
	if(isset($_POST['is_login'])){
    
    $em = mysqli_real_escape_string($connection, $_POST['email']);
    $ps = mysqli_real_escape_string($connection, $_POST['password']);
    
    
    $sql_result = mysqli_query($connection, "SELECT * FROM user where email = '$em' and pw = '$ps'") or die ('request "Could not execute SQL query" '.$sql);
    
    
    
		if(mysqli_num_rows($sql_result)>0){
      $user = mysqli_fetch_assoc($sql_result);
      $_SESSION['user_info'] = $user['email'];
      $_SESSION['first_name'] = $user['fname'];
      $_SESSION['last_name'] = $user['lname'];
      $_SESSION['addr'] = $user['addr'];
      $_SESSION['mob'] = $user['mob'];
      mysqli_free_result($sql_result);
		}
		else{
      $error = 'Wrong email or password.';
      echo"$error";
    }
    mysqli_close($connection);
	}
	
?>
<?php if(isset($_SESSION['user_info']))	{
$_SESSION['userName'] = 'Root';		$_COOKIE['varname'] = 9;
        $ref = 'user.php';
       echo"<script>window.location.href='$ref'</script>";
        } else { ?>

<center><br><img src="img/3sip_Ologo.png" style="height:200px;width:200px;display:block"></center>
              <div class="row">
                  <div class="col-lg-12"></div>
                  
                        <div class="card" style="left:30%;background-color: rgba(0, 0, 0, 0.8);width: 38rem;">
                            <form class="form col-lg-12" style="color: white;" id="login-form" class="login-form" name="form1" method="post" action="login.php">
                            <input type="hidden" name="is_login" value="1">
                                <p style="font-size: 28px;" class="card-title">Log in</p>
                                <div class="form-group row" style="margin-top:30px;" >
                                <label class="control-label col-lg-2" for="email">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-sm-2" for="pwd">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" style="width: 100px;background-color: rgb(250, 91, 38);border: 0px;" class="btn btn-success">Log In</button>
                                </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        New to 3SIP? <a href="register.php" style="text-decoration: none;color:darkcyan">Create an account</a>
                                        </div>
                                    </div>
                            </form>

                    </div>
   
              </div>
  <?php } ?>
              <br><br><br><br><br>
              <?php include("footer.php"); ?>
</body>
</html>