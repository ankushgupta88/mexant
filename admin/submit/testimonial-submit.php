<?php 
include('../config.php');

if(isset($_POST['submit'])){
$test_name = $_POST['testimonial'];
$test_position = $_POST['Position'];
$test_desc = $_POST['desc'];
$test_image = $_FILES["choosefile"]["name"];
$tempname = $_FILES["choosefile"]["tmp_name"]; 
$target_Path1 = "../../upload/testimonial/";
$target_Path2 = $target_Path1.basename( $_FILES["choosefile"]["name"]);

move_uploaded_file($tempname,$target_Path2);
}
$test_sql = "INSERT INTO testimonial(test_name, test_position, test_desc,test_image) VALUES ('$test_name','$test_position','$test_desc','$test_image')";

$test_query = mysqli_query($conn,$test_sql);

if($test_query){
    echo"inserted";
}else{
    echo"not";
}
header('location:../testimonial/add-testimonial.php');
?>
