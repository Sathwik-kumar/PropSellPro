<?php 
include '../config.php';
$admin=new Admin();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $admin ->ret("SELECT * FROM `user` WHERE `email`= '$email' and `password`='$password'");
    $num = $stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['uid'];
        $_SESSION['uid']=$id;

        echo "<script> alert('login successfull'); window.location='../user/index.php'</script>";
    }
    echo "<script> alert('wrong email or password!!!'); window.location='../user/login.html'</script>";

}

?>