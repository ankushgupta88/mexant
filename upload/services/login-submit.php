<?php session_start();?>
<?php include('../config.php');?>
<?php 
// username and password sent from form 

$myusername = $_GET['email'];
$mypassword = md5($_GET['password']); 

$sql_login = "SELECT id,email,password FROM mexant_table WHERE email='$myusername' AND password='$mypassword' AND user_type='admin'";
$login_result = mysqli_query($conn,$sql_login);

//check if user is login or not
if(mysqli_num_rows($login_result) >= 1) {
	$login_query = mysqli_fetch_assoc($login_result);
   $_SESSION['login_user_id'] = $login_query['id'];
   $_SESSION['login_user_email'] = $login_query['email'];
   echo "login succesfully";
   ?>
   <script>
		setTimeout(function () {
			window.location.href = "index.php";
		}, 3000);
	</script>
   <?php 
} else {
   echo "Your Login Name or Password is invalid";
}
 
 
?>
	
