<?php

	 define("TITLE", "Team | Ryan's Fine Piza"); 
	
	 //include 'include/header.php';
?>

<?php include 'include/header.php';?>



 	<div class="container mb-5 pt-5"  style="margin-top:  100px;">

      <div class="starter-template-ryan team">
        <h1 class="text text-center ">Our Team at Ryan's pizzeria</h1>
	        <p>We're small, but mighty. Franklin's Fine Dining has been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing: The best food you've ever had. Ever. Oh, and you can call us Frankie's. You're family here.</p>
      </div>

      <hr class="style-seven"><br>
		<div class="row mt-5">

      			<?php
      				foreach ($teamMembers as $member) {
      			?>
   	
 	     		<div class='col md-4'>

	 	     			<img class="img-thumbnail" src="img/<?php echo $member['img']; ?>.jpg" alt="<?php echo $member['name']; ?>" >
	 	     			<h5 class="pt-3"> <?php echo $member['position']; ?> </h5>
      					<p><?php echo $member['bio']; ?> </p> 
      		  	
					      		
					 	     		<?php /*alternative, Use for looping above html code Or this php code 
					      					echo "  <img src='img/$member[img].jpg' alt='$member[name]' /> " ;	
					      					echo "<h2> $member[name] </h2> ";
					      					echo "<h5> $member[position] </h5>";
					      					echo "<p> $member[bio] </p>  ";
					      				*/	?>


				</div>  

					<?php	} ?>	
			</div>	



    </div><!-- /.container -->



<?php
		include ('include/footer.php');
?>