<?php include('../config.php');

if(isset($_POST['submit'])){
$cat_name = $_REQUEST['category_name'];
$cat_desc = $_REQUEST['cat_desc'];
$cat_status = $_REQUEST['status'];
}
$category_insert = "INSERT INTO service_category(cat_name,cat_desc,status)VALUES('$cat_name','$cat_desc','$cat_status')";
$category_query = mysqli_query($conn,$category_insert);

if($category_query){
    echo "Category data inserted successfully";
    header('location:../service/add-category.php');
    }else{
    echo "oops something went wrong";
}

?>