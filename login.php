<?php include('header.php');?>
<style>
.header-area {
    background: #212529;
    position: inherit !important;
}
#login input {
    width: 100%;
    height: 50px;
    background-color: #f7f7f7;
    color: #212741;
    border-radius: 5px;
    border: none;
    padding: 0px 15px;
    font-size: 14px;
    outline: none;
    margin-bottom: 10px;
    margin-top: 10px;
}
form#login {
    width: 400px;
}
.login-page-new {
    text-align: center;
    font-size: 34px;
    font-weight: 600;
    margin: 50px 0 0;
}

</style>
<div class="login-page-new">LOGIN</div>
<div class="col-lg-10 offset-lg-1">
   <form id="login" class="net" action="submit/login-submit.php" method="POST">
       <div class="col-lg-12">
					<fieldset>
					  <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" required>
					</fieldset>
				  </div>
				  <div class="col-lg-12">
					<fieldset>
					  <input type="text" name="pwd" id="pwd" placeholder="Enter Your Password" required>
					</fieldset>
				  </div>
          <button type="submit" name="submit">Submit</button>
				 <p class="mb-1">
					<a href="forgot-password.html">I forgot my password</a>
					 </p>
					 <p class="mb-0">
					<a href="register.php"class="text-center">Register</a>
		        </p>
            
	</form>
				  
				  </div>
<?php include('footer.php');?>