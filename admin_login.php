<?php 
include '../config.php';
$admin=new Admin();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $admin ->ret("SELECT * FROM `admin` WHERE `email`= '$email' and `password`='$password'");
    $num = $stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['aid'];
        $_SESSION['aid']=$id;

        echo "<script> alert('login successfull'); window.location='../admin/index.php'</script>";
    }
    echo "<script> alert('wrong email or password!!!'); window.location='../admin/login.html'</script>";

}

?>