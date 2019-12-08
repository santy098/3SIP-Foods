<?php 
include("head.php");
if (isset($_POST['submit'])){
	if(!empty($_SESSION['user_info'])) {
		$qty1=$_POST['qty1'];
		$qty2=$_POST['qty2'];
		$qty3=$_POST['qty3'];
		$qty4=$_POST['qty4'];
		$qty5=$_POST['qty5'];
		$qty6=$_POST['qty6'];
		$qty7=$_POST['qty7'];
		$qty8=$_POST['qty8'];
        $qty9=$_POST['qty9'];
        $total = $_POST['total'];
        if($total == 0){
            echo '<script type="text/javascript"> alert("No items selected")</script>';
        }
        else{
        $hotel = $_POST['hotel'];
		$user_info=$_SESSION['user_info'];
		$msg="Order placed successfully. Please make a payment of Rs ".$total." by cash on successful delivery";
		$connection = mysqli_connect("localhost","root","","foodies") or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
        $sql1="INSERT INTO orders(email,hotel,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9,AmountPayable)VALUES('$user_info','$hotel','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9','$total');";
		if(mysqli_query($connection,$sql1))
		{  
            echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
            include('send_mail.php');
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
        } 
        
        }
    }
	else
		echo "<script type='text/javascript'>alert('Please login');</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/shop.js"></script>
  <link rel="stylesheet" href="css/shop.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.3.2/dist/email.min.js"></script>
 
  <script type="text/javascript">
    function confirmation(){
    var r = confirm("Do you want to place order?");
    if(r==true){
        return true;
    }
    else
    return false;
}  
</script>
 
</head>
<body style="background:rgb(181, 181, 181);">
    
    <div class="page-header">
    <center><h1>Tango's Mediteranean Restaurant</h1></center>
    </div>
    <form action="shopping1.php" name="orderform" method="post" onsubmit="return confirmation()">
    <div class="container">

        <section id="cart"> 
        <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/pizza.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Pizza - Farmhouse</h1>

                    Thin crust pizza with capsicum, tomato, corn, onions and jalapeno. Customizable toppings and crust.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty1">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        325.99&#8377;
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/samb.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Spaghetti and Meatballs </h1>

                    Most fighters are nervous before they go out there. Nervousness makes the body tight. I don't like that. I want to fight with a normal feeling. That's why I move the fingers, shoulders, everything. I try to move like spaghetti.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty2">

                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        230.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/pt.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Pompello</h1>

                    Freshly cooked salted salmon breast with Italian thar-ka-ri.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty3">

                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        199.99&#8377;
                    </h2>
                </footer>
            </article>

            
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/tir.jpg" alt="">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Tiramisu</h1>

                    Italian style chocolate flavoured desert with soft filling inside three layered cake.
                    <div title="This item is non-vegetarian!" style="top: 0" class="color red"></div>
                    <div title="Half plate"  style="top: 43px" class="type small">S</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty4">

                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        200.99&#8377;
                    </h2>
                </footer>
            </article>
            
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/pasta.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Pasta - Penne</h1>

                    Pasta with Red sauce, olives, capsicum and jalapeno for a mouthful of tanginess.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty5">

                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        120.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/ls.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Lasagna</h1>

                    Cheesy lasagna with tomato sauce and mozzarella cheese base.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty6">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        325.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/mic.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Manicotti Italian Casserole</h1>

                    Manicotti style potato casserole with extra cheese and red penne pasta.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty7">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        257.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/shake.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Chocolate Milkshake</h1>

                    Freshly prepared thick chocolate milkshake. The perfect dessert! 

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty8">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        50.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/coke.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Coke</h1>

                    6oo ml bottle.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt">0</span>
                    <input type="hidden" value = "0" class="post" name="qty9">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        37.99&#8377;
                    </h2>
                </footer>
            </article>

        </section>

    </div>


    <footer id="site-footer" style="">
        <div class="container clearfix">

            <div class="left">
                <h2 class="subtotal">Subtotal: <span>0</span>&#8377;</h2>
                <h3 class="tax">Taxes (5%): <span>0</span>&#8377;</h3>
                <h3 class="shipping">Shipping: <span>5.00</span>&#8377;</h3>
            </div>

            <div class="right">
                <h1 class="total">Total: <span name="total"></span>&#8377;</h1>
                <input type="hidden" value = "0" class="total-post" name="total">
                <input type="hidden" value = "Tangos"  name="hotel">
                <input type="submit" class="btn" value="Checkout" name ="submit">
            </div>

        </div>
    </footer>
    </form><br><br><br>
    <?php include("footer.php");?>
</body>
</html>