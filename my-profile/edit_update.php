<?php 
 include('../header.php');
 session_start();
    if(!isset($_SESSION['customer_session'])){
         header('location:../login.php');
    }
    $login_result_show = $_SESSION['customer_session'];
    $change = implode(" ",$login_result_show);
    if(isset($_REQUEST['submit'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $filename = $_FILES['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $target_path ="../upload/register/";
    $target_result = $target_path.basename($_FILES['fileToUpload']['name']);
    move_uploaded_file($tmp_name,$target_result);

   
    $upadte_data = mysqli_query($conn,"UPDATE `mexant_table` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone',`gender`='$gender',`image`='$filename' WHERE id='$change'");
    header('location:profile.php');
   }
?>