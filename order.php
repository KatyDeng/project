

<!DOCTYPE html>
<html>
<head>
	<title>Wedding dress shop</title>
	<link rel="stylesheet" type="text/css" href="stylemain.css">
	<link rel="stylesheet" type="text/css" href="order.css">
<?php


?>

</head>
<body>
<header >
	<div class="color">
		<div id="topInfoBar" class="wrapcenter">
			<div id="shippingTopInfo">
			<p>Free Shipping in USA For Orders Over $100</p>
			</div>
			<div id="phoneNumberTop">(888) 344-2313</div>
		</div>	
	</div>
</header>
<div id="logoWrap" class="wrapcenter">
	  <div >
	  	<p id="logo">Bellissimo<spant id="byName"> by katy Deng</spant></p>	 
	  </div>
</div>	
<nav>
	<ul id="menu" >
		<li><a href="index.php">HOME</a></li>
		<li><a href="shop.php">PRODUCTS</a></li>
		<li><a href="order.php">YOUR ORDER</a></li>


	</ul>
</nav>
<?php
$qty0 = $_POST["amount0"];
$qty1 = $_POST["amount1"];
$qty2 = $_POST["amount2"];
$qty3 = $_POST["amount3"];
$qty4 = $_POST["amount4"];

$name0 = $_POST["productInfo"][0];
$name1 = $_POST["productInfo"][2];
$name2 = $_POST["productInfo"][4];
$name3 = $_POST["productInfo"][6];
$name4 = $_POST["productInfo"][8];

$price0 = $_POST["productInfo"][1];
$price1 = $_POST["productInfo"][3];
$price2 = $_POST["productInfo"][5];
$price3 = $_POST["productInfo"][7];
$price4 = $_POST["productInfo"][9];
?>


<h3>Thank you for ordering! Below is your ordering details: </h3>

<table>
	<tr>
		<th>Product Name</th>
		<th>Unit Cost</th>
		<th>Order Amount </th>
		<th>Total</th>
	</tr>
	<tr>
		<td><?php echo $name0 ?></td>
		<td><?php echo "$".$price0 ?></td>
		<td><?php echo  $qty0 ?></td>
		<td><?php $subtotal1=$qty0*$price0; echo  "$".$subtotal1 ; ?></td>
	</tr>

	<tr>
		<td><?php echo $name1?></td>
		<td><?php echo "$".$price1 ?></td>
		<td><?php echo  $qty1 ?></td>
		<td><?php $subtotal2=$qty1*$price1; echo  "$".$subtotal2 ; ?></td>
	</tr>
	<tr>
		<td><?php echo $name2?></td>
		<td><?php echo "$".$price2 ?></td>
		<td><?php echo  $qty2 ?></td>
		<td><?php 
		$subtotal3=$qty2*$price2 ;
		echo  "$".$subtotal3 ; ?></td>
	</tr>
	<tr>
		<td><?php echo $name3?></td>
		<td><?php echo "$".$price3 ?></td>
		<td><?php echo  $qty3 ?></td>
		<td><?php 
		$subtotal4=$qty3*$price3 ;
		echo  "$".$subtotal4 ; ?></td>
	</tr>	
	<tr>
		<td><?php echo $name4?></td>
		<td><?php echo "$".$price4 ?></td>
		<td> <?php echo  $qty4 ?></td>
		<td><?php 
		$subtotal5=$qty4*$price4 ;
		echo  "$".$subtotal5 ; ?></td>
	</tr>
	<tr >
		<td></td>
		<td></td>
		<td>Subtotal: </td>
		<td id="subtotal"><?php $subTotal =$subtotal1+$subtotal2+$subtotal3+$subtotal4+$subtotal5; echo  "$".$subTotal ?> </td>
	</tr>

	<dir></dir>
</table>

 <table id="customerInfo">
 	<tr>
 		<td >Customer First Name:</td>
 		<td><?php echo $_POST['f_name']?></td>
 	</tr>
 	<tr>
 		<td >Customer Last Name:</td>
 		<td><?php echo $_POST['l_name']?></td>
 	</tr>
 	<tr>
 		<td >Address:</td>
 		<td><?php echo $_POST['address']?></td>
 	</tr>
 	<tr>
 		<td >City:</td>
 		<td><?php echo $_POST['city']?></td>
 	</tr>
 	<tr>
 		<td >State:</td>
 		<td><?php echo $_POST['state']?></td>
 	</tr>
 	<tr>
 		<td >Zipcode:</td>
 		<td><?php echo $_POST['zip']?></td>
 	</tr>
 	<tr>
 		<td >Email:</td>
 		<td><?php echo $_POST['email']?></td>
 	</tr>


 </table>

<?php
$myfile = fopen("order.txt", "w") or die("Unable to open file!");
$name = $_POST['f_name'].$_POST['l_name']."\n";
fwrite($myfile, $name);
$address = $_POST['address'].$_POST['city'].$_POST['state'].$_POST['zip']."\n";
fwrite($myfile, $address);
$email =$_POST['email']."\n";
fwrite($myfile, $email);
$order= "orders: \n";
fwrite($myfile, $order);
$product = $name0.", Unit price: $".$price0." , Amount ordered:".$qty0 ." , total: $". $subtotal1.";\n";
fwrite($myfile, $product);
$product2 = $name1.", Unit price: $".$price1." , Amount ordered:".$qty1 ." , total: $". $subtotal2.";\n";
fwrite($myfile, $product2);
$product3 = $name2.", Unit price: $".$price2." , Amount ordered:".$qty2 ." , total: $". $subtotal3.";\n";
fwrite($myfile, $product3);
$product4 = $name3.", Unit price: $".$price3." , Amount ordered:".$qty3 ." , total: $". $subtotal4.";\n";
fwrite($myfile, $product4);
$product5 = $name4.", Unit price: $".$price4." , Amount ordered:".$qty4 ." , total: $". $subtotal5.";\n";
fwrite($myfile, $product5);
$subtotal = "customer sub total order is: $".$subTotal. ";\n";

fwrite($myfile,$subtotal );
fclose($myfile);
?>








<footer>
	    <p> Coded by Katy Deng </p>
</footer>

</body>
</html>