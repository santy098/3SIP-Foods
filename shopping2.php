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
		$user_info=$_SESSION['user_info'];
		$msg="Order placed successfully. Please make a payment of Rs ".$total." by cash on successful delivery";
		$connection = mysqli_connect("localhost","root","","foodies") or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
		
$sql1="INSERT INTO orders(email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9)VALUES('$user_info','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9');";
		if(mysqli_query($connection,$sql1))
		{  
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
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
   (function(){
      emailjs.init("user_zLYEHwclnOA5WxGO2J9DO");
   })();
</script>  

 
</head>
<body style="background:rgb(181, 181, 181);">
    
    
    <form action="shopping2.php" name="orderform" method="post">
    <div class="container">

        <section id="cart"> 
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/dosa.jpg" alt="dosa">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Masala Dosa</h1>

                    Crisp dosa served with hot delicious potato masala and the mouth watering South Indian Chutney. Slurp!

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">M</div>
                </div>

                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt" name = "qty1">0</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        44.99&#8377;
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/idli.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Idli</h1>

                    Fluffy white Idli or like the natives call it Mallige Idli. Served with bisi bisi sambar and South Indian green chutney.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt" name = "qty3">0</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        30.99&#8377;
                    </h2>
                </footer>
            </article>
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/paratha.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Paratha</h1>

                    North Indian butter paratha with aloo filling. Served with green chutney, pickle and chilli and thick curd.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt" name = "qty4">0</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        40.99&#8377;
                    </h2>
                </footer>
            </article>

            
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="img/chicken.jpg" alt="">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Chicken Biriyani</h1>

                    Hyderabad Nawabi style biriyani. Need I say more?

                    <div title="This item is non-vegetarian!" style="top: 0" class="color red"></div>
                    <div title="Half plate"  style="top: 43px" class="type small">S</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt" name = "qty2">0</span>
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
                    <span class="qt" name = "qty5">0</span>
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
                    <span class="qt" name = "qty6">0</span>
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
                        <img src="img/meals.jpg" alt="Belgian choco chip milkshake">

                        <h3>Remove Item</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>South Indian Meals</h1>

                    South Indian meal includes rice, chapathi, rasam, sambar, curd, palya, 3 different sides, papad and pickle.

                    <div title="This item is 100% vegetarian!" style="top: 0" class="color green"></div>
                    <div style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">
                    
                    <span class="qt-minus">-</span>
                    <span class="qt" name = "qty7">0</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        0&#8377;
                    </h2>

                    <h2 class="price">
                        57.99&#8377;
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
                    <span class="qt" name = "qty8">0</span>
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
                    <span class="qt" name = "qty9">0</span>
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
                <input type="submit" class="btn" value="Checkout" name ="submit">
            </div>

        </div>
    </footer>
    </form><br><br><br>
    <?php include("footer.php");?>
</body>
</html>