<?php 
    session_start();
        include('../config.php');
        $email = $_REQUEST['email'];
        $pwd = md5($_REQUEST['pwd']);

        $login_sql = "SELECT * FROM mexant_table WHERE email='$email' AND password='$pwd' AND user_type='customer'";
        $login_result = mysqli_query($conn,$login_sql);
        $login_result_show = mysqli_fetch_assoc($login_result);

        //check if user is login or not
        if(mysqli_num_rows($login_result)>=1) {
                $_SESSION['customer_session'] = $login_result_show; 
                header('location:../welcome.php');


            } else {
                echo "Your Login Name or Password is invalid";
       }

?>