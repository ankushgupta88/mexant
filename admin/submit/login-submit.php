<?php session_start();
include('../config.php');
    $myusername = $_GET['email'];
    $mypassword = md5($_GET['password']); 
	
	$admin_login = "SELECT id,email,password,user_type FROM mexant_table WHERE email='$myusername' AND password='$mypassword' AND user_type='admin'";
	$admin_result= mysqli_query($conn,$admin_login);
	$login_query = mysqli_fetch_assoc($admin_result);
   

    //check if user is login or not
    if(mysqli_num_rows($admin_result) >= 1) {
       $_SESSION['login_user_id'] = $login_query['id'];
       $_SESSION['login_user_email'] = $login_query['email'];
       
	   ?>
	  <script>
   window.location.href = "index.php";
</script>
   
  <?php 
    }     else {
        echo "Your Login Name or Password is invalid";
    }
	

?>