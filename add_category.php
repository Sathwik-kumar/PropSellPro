<?php 
include '../config.php';
$admin=new Admin();

   if(isset($_POST['add'])){
    $cat_name = $_POST['cat_name'];
    $stmt = $admin->cud("INSERT INTO `category`(`cname`, `status`) VALUES ('$cat_name','active')", "inserted");

    echo "<script> alert('Category added successfully'); window.location='../admin/viewcategory.php'</script>";

   }
    



?>