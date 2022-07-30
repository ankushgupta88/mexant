<?php 
include('../header.php');
//Check if session is exit or not


$ids = $_REQUEST['idh'];
$service = $_REQUEST['service'];
$desc = $_REQUEST['desc'];

if(!empty($_FILES['choosefile']['name'])) //new image uploaded
{
   //process your image and data
   $filename1 = $_FILES["choosefile"]["name"];
   $tempname1 = $_FILES["choosefile"]["tmp_name"]; 
   $target_Path = "../../upload/services/";
$target_Path = $target_Path.basename( $_FILES["choosefile"]["name"]);       
    move_uploaded_file($tempname1,$target_Path); 
   $update_query1 = "UPDATE service SET service_name = '$service', service_desc='$desc', service_image='$filename1' WHERE id ='$ids'";
  //save to DB with new image name
}
else // no image uploaded
{
   // save data, but no change the image column in MYSQL, so it will stay the same value
   $update_query1 = "UPDATE service SET service_name = '$service' , service_desc ='$desc' WHERE  id = '$ids'";
  //save to DB but no change image column
}
 $update_result1 = mysqli_query($conn,$update_query1);
  if($update_result1){
    echo"Result updated"; ?>
  <script>
      window.location.href = '<?php echo SITE_URL."service/edit-service.php?idt=".$ids; ?>';
   </script>
  <?php }else{
    echo"oops result not updated";

   
  }?>			
