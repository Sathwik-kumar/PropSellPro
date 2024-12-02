<?php 
include '../config.php';
$admin=new Admin();

    $uid = $_GET['uid'];

    $stmt = $admin ->cud("UPDATE `user` SET `status`='rejected' WHERE `uid`='$uid'","updated");
    
    echo "<script> alert('rejected successfully'); window.location='../admin/user.php'</script>";



?>