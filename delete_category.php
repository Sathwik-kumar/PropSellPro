<?php 
include '../config.php';
$admin=new Admin();

   
    $cid = $_GET['cid'];
    $stmt = $admin->cud("DELETE FROM `category` WHERE `cid`='$cid'", "deleted");

    echo "<script> alert('Category deleted successfully'); window.location='../admin/viewcategory.php'</script>";
    



?>