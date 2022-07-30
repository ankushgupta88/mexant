<?php include('../config.php');

if(isset($_POST['submit'])){
$slider_name = $_REQUEST['slider_name'];
$slider_desc = $_REQUEST['slider_desc'];
$filename = $_FILES['choosefile']['name'];
$tempname = $_FILES['choosefile']['tmp_name'];

$target_Path = "../../upload/slider/";
$target_name = $target_Path.basename($_FILES["choosefile"]["name"]);
move_uploaded_file($tempname,$target_name);

}
$category_insert = "INSERT INTO slider(slider_name,slider_desc,slider_img)VALUES('$slider_name','$slider_desc','$filename')";
$category_query = mysqli_query($conn,$category_insert);

if($category_query){
    echo "Category data inserted successfully";
    header('location:../slider/add-slider.php');
    }else{
    echo "oops something went wrong";
}

?>