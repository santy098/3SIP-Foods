<?php

/*use PHPMailer\PHPMailer\PHPMailer;*/

$email=$_SESSION['user_info'];
$uname=$_SESSION['first_name']." ".$_SESSION['last_name'];

/*To send mails*/

require 'phpmailer\PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '3sip.pvt.ltd@gmail.com';                 // SMTP username
$mail->Password = 'threesip';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('3sip.pvt.ltd@gmail.com', '3SIP-Foods');
$mail->addAddress($email); 
$mail->addReplyTo('3sip.pvt.ltd@gmail.com', '3SIP-Foods');


//$mail->addAttachment('/var/tmp/file.tar.gz');          Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Order Placed!';
$mail->Body    = "Hey $uname !!<br>Your order from 3SIP Foods is on its way! <b>ETA: 45mins</b><br>
                  Happy Hogging!<br><br>
                  Thank you for opting <br><br>3SIP Foods</em>.";
                 


if(!$mail->send()) {
    echo '<script language="javascript">';
    echo 'alert("Failed to send mail!")';
    
    echo '</script>';
    echo "<script> window.location.assign('hotels.php');</script>";
 }
// else {
//     $query="INSERT INTO bookings (uid,bid,uname) VALUES ($uid,$bid,'$uname')";
//     $sql=mysqli_query($conn,$query);
   
//     if($sql==TRUE){
//         echo '<script language="javascript">';
//             echo 'alert("Booked ride successfully")';
//             echo '</script>';
//             echo "<script> window.location.assign('book_ride.php'); </script>";
    
            
//     }
//     else{
      
//         echo '<script language="javascript">';
//             echo 'alert("failed to book your ride, please try again!!")';
            
//             echo '</script>';
//             echo "<script> window.location.assign('book_ride.php');</script>";
            
//     }
// }    

?>