<?php 
include '../config.php';
$admin=new Admin();

    $uid = $_GET['uid'];

    $stmt = $admin ->cud("UPDATE `user` SET `status`='approved' WHERE `uid`='$uid'","updated");
    
    echo "<script> alert('approved successfully'); window.location='../admin/user.php'</script>";



?>