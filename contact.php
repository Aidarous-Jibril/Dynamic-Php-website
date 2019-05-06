<?php

	 define("TITLE", "Contact | Ryan's Fine Piza"); 
?>

<?php include 'include/header.php';?>



<!-- Contact Section -->
  <section class="starter-template-ryan contact" id="contact">
    <div class="container mb-5 pt-5"  style="margin-top:  100px;"">
      <h2 class="text-center">Get in touch with Us</h2>

<?php
    //check for header injection
    	function has_header_injection($string){
    		return preg_match("/[\r\n]/", $string);
    	}

    	//form validation
    	if(isset($_POST['submit'])){
    		$name = trim($_POST['name']);
    		$email = trim($_POST['email']);
    		$msg = $_POST['message'];

    		//check for if there is header injection
    		if(has_header_injection($name) || has_header_injection('$email')){
    			die();
    		}

    		//check for not empty
    		if(!$name || !$email || !$msg){
    			echo "<p>All fields are required</p><a class='btn btn-danger' href='contact.php'>Go back and Try again</a>";
    			exit();
    		}
    	}
?>



      <hr class="style-seven">

      <div class="row">
        <div class="col-lg-8 mx-auto border border-danger">
   
              <form method="post" action="contact.php" class="p-4" >
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Email Address</label>
                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" >Send</button>
                </div>
              </form>

        </div>
      </div>
    </div>

  </section> <!--/section End-->



<?php
		include ('include/footer.php');
?>