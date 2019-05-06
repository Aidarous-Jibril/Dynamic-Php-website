<?php

	 define("TITLE", "Menu item | Ryan's Fine Piza"); 

?>

<?php include 'include/header.php';  //include header

//protect bad chars from the URI
function strip_bad_charachters($input){
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
		return $output;
}


if(isset($_GET['item'])){

		//use here the above func
		$menuItem = strip_bad_charachters($_GET['item']);

		$dish = $menuItems[$menuItem];
	}

?>

	<hr>

    <div class="container mb-5 pt-5"  style="margin-top:  100px;">
		<h2><?php echo $dish['title']; ?> <span class="float-right"><sup>kr</sup> <?php echo $dish['price']; ?></span></h2><br>
		<p><?php echo $dish['info']; ?></p><br>
		<p>Suggested Beverage:<br>
		<strong> <?php echo $dish['drink']; ?> </strong>: Price <sup>kr</sup><?php echo number_format($dish['price'] * 0.35); ?></p>

     
<a class="btn btn-primary" href="menu.php">Go Back</a>

	</div>		

	<?php include 'include/footer.php'; ?>  //include header
