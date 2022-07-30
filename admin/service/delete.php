<?php

include('../config.php');



// delete data query

    $delete_get = $_REQUEST['id'];
    $query="DELETE FROM service WHERE id= '$delete_get'";


    if (mysqli_query($conn,$query)) {
        echo "Service Deleted successfully.";?>
        <script>
        setTimeout(function () {
        window.location.href= 'all-service.php'; // the redirect goes here
   
      } ,3000); // 3 seconds</script>
        <?php } 
        else {
        echo "oops something wrong!";
        }
        mysqli_close($conn);
  ?>






