<?php 
include '../config.php';
$admin=new Admin();

   
    $lid = $_GET['lid'];
    $stmt = $admin->cud("DELETE FROM `location` WHERE `lid`='$lid'", "deleted");

    echo "<script> alert('Location deleted successfully'); window.location='../admin/viewlocation.php'</script>";
    



?>