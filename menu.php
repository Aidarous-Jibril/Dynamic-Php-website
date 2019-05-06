<?php
define('TITLE', "Menu | Ryan's Fine Piza");  //define page name
?>

<?php include 'include/header.php';?>




	 
    <div class="container mb-5 pt-5"  style="margin-top:  100px;">

	      <div class="starter-template-ryan menu">
	        <h1 class="text text-center">Our Delicious Menu</h1>
		        <p>Like our team, our menu is very small — but dang, does it ever pack a punch!. psum som ser ut som en normal  <br>mening. Lorem Ipsum genererad på denna sidan är därför alltid fri från repetitioner, humorinslag, märkliga ordformationer osv.
		        </p>
	      </div>
	      <hr class="style-seven">



	      <ul>
	      	<h1 class="text-center p-3">Our Dishes</h1>
	      		<?php foreach ($menuItems as $dish => $item) { ?>    

	      		<h5 class="text text-center"><a href="dish.php?item=<?php echo $dish; ?> ">  <?php echo $item['title']; ?> </a><sup>kr</sup><?php echo $item['price']; ?> </h5>

	      	<?php } ?>

	      </ul>

    </div><!-- /.container -->




<?php
	include 'include/footer.php';
?>