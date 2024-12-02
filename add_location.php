<?php 
include '../config.php';
$admin=new Admin();

   if(isset($_POST['add'])){
    $l_name = $_POST['lname'];
    $stmt = $admin->cud("INSERT INTO `location` (`lname`, `status`) VALUES ('$l_name','active')", "inserted");

    echo "<script> alert('Location added successfully'); window.location='../admin/viewlocation.php'</script>";

   }
    



?>