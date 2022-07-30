<?php 
include('../config.php');

if(isset($_POST['submit'])){
$service_name = $_POST['service'];
$service_desc = $_POST['desc'];
$filename = $_FILES["choosefile"]["name"];
$tempname = $_FILES["choosefile"]["tmp_name"]; 

$target_Path = "../../upload/services/";
$target_Path = $target_Path.basename( $_FILES["choosefile"]["name"]);

move_uploaded_file($tempname,$target_Path);
}
$query1 = "INSERT INTO service(service_name,service_desc,service_image)VALUES('$service_name','$service_desc','$filename')";

$query_result=mysqli_query($conn,$query1);

if($query_result){
    echo"insert";
} else

{
    echo "not";
}
header('location:../service/add-service.php');
?>