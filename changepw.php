<html>
<head>
<title>Change password</title>
<link rel="stylesheet" href="css/main.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('img/background-main.jpg');">
<?php include("head.php"); ?>

        <div class="card" style="left:30%;background-color: rgba(0, 0, 0, 0.8);width: 38rem; margin-top:50px">
                            <form class="form col-lg-12" style="color: white;" id="login-form" class="login-form" name="form1" method="post" action="changepw.php">
                            
                                <p style="font-size: 28px;" class="card-title">Change Password</p>
                                
                                <div class="form-group row">
                                <label class="control-label col-sm-4" for="pwd">Current password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="opw" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="control-label col-sm-4" for="pwd">New password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="npw" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                                </div>
                                
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" name="changepw" style="width: 150px;background-color: rgb(250, 91, 38);border: 0px;" class="btn btn-success" value="Change Password"/>
                                </div>
                                </div>
                               
                            </form>

                    </div>




</body>
</html>
<?php
$connect = mysqli_connect("localhost","root","","foodies");

if (isset($_POST['changepw'])){
$email=$_SESSION['user_info'];
$opw=$_POST['opw'];
$npw=$_POST['npw'];
$query = mysqli_query($connect,"select * from php_users_login where email='$email'");
$numrows = mysqli_num_rows($query);
if($numrows!=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbemail = $row['email'];
$dbpassword = $row['password'];
}
if($dbemail==$email&&$opw==$dbpassword)
{
		$sql2 ="UPDATE 	php_users_login SET password= '$npw' WHERE email= '$dbemail';";
		$sql3 ="UPDATE 	user SET pw = '$npw' WHERE email= '$dbemail';";
		if(mysqli_query($connect,$sql2) && mysqli_query($connect,$sql3))
		{  
            echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
            echo "<script type='text/javascript'>window.location.assign('login.php?ac=logout')</script>";
            
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Error');</script>"; 
		}  
}
else
echo "<script type='text/javascript'>alert('Incorrect password');</script>";
}
else
echo "<script type='text/javascript'>alert('User does not exist');</script>";
}
?>