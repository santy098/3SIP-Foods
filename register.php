<?php
session_start();
$conn = mysqli_connect("localhost","root","","foodies");
if(!$conn)
{  
  die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $location=$_POST['location'];
  $mob=$_POST['mob'];
  $addr=$_POST['addr'];
  $email=$_POST['email'];
  $pw=$_POST['pw'];
  $cpw=$_POST['cpw'];
  $sql = "INSERT INTO user VALUES ('$fname', '$lname', '$location', '$mob', '$addr', '$email', '$pw');";
    if(mysqli_query($conn, $sql))
    {  
      $message = "You have been successfully registered";
      $sql1 = "INSERT INTO php_users_login(`email`, `password`) VALUES ('$email', '$pw');";
      if(mysqli_query($conn, $sql1))
        {  
          $message1 = "Added in login table";
        
        }
      else
        {  
          $message1 = "Could not insert record";
        }	 
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {  
      echo "<script type='text/javascript'>alert('User already Exists!');</script>";
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

    <link rel = "stylesheet" href="css/style.css">

            <script>
    
    function validate()
{
	var fname=document.getElementById("fname");
	var lname=document.getElementById("lname");
	var mob=document.getElementById("mob");
	var location=document.getElementById("location");
	var EmailId=document.getElementById("email");
	var addr=document.getElementById("addr");
	var pw=document.getElementById("pw");
	var cpw=document.getElementById("cpw");
	var alphaExp = /^[a-zA-Z ]+$/;
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
 	if(pw.value.length< 8 || cpw.value.length< 8)
	{
		alert("Please enter a password of atleast 8 characters");
		pw.focus();
		return false;
	}
	else if (pw.value.length != cpw.value.length) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	else if (pw.value != cpw.value) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        alert("Enter valid email-ID");
		EmailId.focus();
        return false;
   	}
	if(fname.value==null || fname.value=="")
	{
		fname.focus();
		alert("Enter valid first name");
		return false;
	}
	if(fname.value.match(alphaExp)){}
	else{
		alert("First name can have only letters");
		fname.focus();
		return false;
	}
	if(lname.value==null || lname.value=="")
	{
		lname.focus();
		alert("Enter valid last name");
		return false;
	}
	if(lname.value.match(alphaExp)){}
	else{
		alert("Last name can have only letters");
		lname.focus();
		return false;
	}
	if(mob.value==null || mob.value==" ")
	{
		alert("Please Enter Mobile Number");
		mob.focus();
		return false;
	}
	if (isNaN(mob.value))
	{
		alert(" Your Mobile Number must be Integers");
		mob.focus();
		return false;
	}
	if((mob.value.length!= 10))
	{
		alert("Enter the valid Mobile Number(Like : 9669666999)");
		mob.focus();
		return false;
	}
	if(location.selectedIndex==0)
	{
		alert("Please select location");
		location.focus();
		return false;		
	}
	if(addr.value==" " || addr.value=="")
	{
		alert("Please Enter Your Address");
		addr.focus();
		return false;
	}
	if (confirm("Do you want to submit your details?") == true) {} 
	else 
	{
       return false;
    }
	return true;
}

    </script>
</head>
<body class="body2" style=" background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('img/background-main.jpg');">
       
<center><br><img src="img/3sip_Ologo.png" style="height:200px;width:200px;display:block"></center>
              <div class="row">
                  <div class="col-lg-2"></div>
                <div class="card col-lg-8" style="margin-top: 20px;background-color: rgba(0, 0, 0,0.7);width: 58rem;color: white;;">

                    <div class="card-title" style="font-size:x-large;">Create a 3SIP account</div>
                        <form  name="register" method="post" action="register.php" onsubmit="return validate()">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Location</label>
                                  <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress2">Address</label>
                                  <input type="text" class="form-control" id="addr" name="addr" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="inputCity">E-mail</label>
                                      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputCity">Mobile</label>
                                      <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile number">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="inputState">Password</label>
                                      <input type="password" class="form-control" id="pw" name="pw" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="inputZip">Confirm Password</label>
                                      <input type="password" class="form-control" id="cpw" name="cpw" placeholder="Confirm Password">
                                    </div>
                                  </div>
                                
                               
                                <button type="submit" name="submit" class="btn btn-primary" style="background-color: rgb(250, 91, 38);border: 0px;width: 100px;">Create</button>
                                <br><br>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        Already have a 3SIP account? <a href="login.php" style="text-decoration: none;color:darkcyan">Log In</a>
                                        </div>
                                    </div>
                              </form>


                </div>

              </div>
              <br><br><br><br>
              <?php include("footer.php"); ?>

</body>
</html>