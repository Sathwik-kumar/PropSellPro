<?php 
include '../config.php';
$admin=new Admin();

   if(isset($_POST['add'])){
    $name = $_POST['pname'];
    $cat = $_POST['category'];
    $des = $_POST['discription'];
    $img = $_POST['proimage'];
    $rules = $_POST['noofrules'];
    $sense = $_POST['sense'];
    $loc = $_POST['location'];
    $adr = $_POST['address'];
    $price = $_POST['price'];

    

    $img_path = 'uploads/'.basename($_FILES['proimage']['name']);
    move_uploaded_file($_FILES['proimage']['tmp_name'],$img_path);

    $stmt = $admin->cud("", "inserted");

    echo "<script> alert('Property added successfully'); window.location='../admin/viewproperty.php'</script>";

   }
    



?>