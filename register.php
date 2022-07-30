<?php include('header.php');?>
<?php  
        if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$filename = $_FILES['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
		$target_path ="./upload/register/";
    $target_result = $target_path.basename($_FILES['fileToUpload']['name']);
    move_uploaded_file($tmp_name,$target_result);
		//check email
		$email_check = "SELECT * FROM mexant_table WHERE email ='$email'";
        $email_check_query = mysqli_query($conn, $email_check);

        
          if (mysqli_num_rows($email_check_query) >= 1) {
          echo "Sorry... email already taken";
    }
          else
    {   
		  $query1 = mysqli_query($conn,"INSERT INTO `mexant_table`(`first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `image`) VALUES ('$first_name','$last_name','$email','".md5($pwd)."','$phone','$gender','$filename')");
		 // echo 'Saved DATA!';
    }
	}
 ?>

<style>form#register {
    margin: 80px auto 80px;
    width: 700px;
}
.header-area.header-sticky {
    min-height: 80px;
    background: #212741;
}
.background-header {
    position: inherit !important;
}
.header-area {
    position: inherit !important;
}</style>

<div class="col-lg-10 offset-lg-1">
          <form id="register" class="net" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="first_name" id="first_name" placeholder="Enter Your firstname" autocomplete="on" >
                </fieldset>
              </div>
			  <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="last_name" id="last_name" placeholder="Enter Your lastname" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="password" name="pwd" id="pwd" placeholder="Enter Your password" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="phone" id="phone" placeholder="Enter Your phone" autocomplete="on" >
                </fieldset>
              </div>
			<div class="col-lg-6">
                <fieldset>  
              Gender:
	<input type="radio" name="gender" id="gender" value="female">Female
	<input type="radio" name="gender" id="gender" value="male">Male
	<input type="radio" name="gender" id="gender" value="other">Other
	</fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>  
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
			  
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="button-register">submit</button>
                </fieldset>
              </div>
			   <div class="responce-loader-1 text-center mb-3" style="display:none; width: 100px;
    height: 100px;">
					<img src="<?php echo WEBSITE_URL; ?>assets/images/loading-buffering.gif" class="img-responce-loader"> 
				</div>
				<div class="order_submit_responce1 text-center"></div>
            </div>
          </form>
        </div>
		 <?php include('footer.php');?>