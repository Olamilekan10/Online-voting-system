<!-- Form Data Received -->
<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include('dbConnect.php');

$sql = "select * from admin where username=:username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username",$username);
$stmt->execute();

if($stmt->rowCount() > 0) {
    $row = $stmt->fetch();
    if($row['password']==$password) {
        $_SESSION['aid']- $row['aid'];
        $_SESSION['admin_id']- $username;
        $_SESSION['aname']- $row['aname'];
        header("location: admin-dashboard.php"); 
    } else {
        $_SESSION['error']="Wrong password";
        header("location: admin-login.php");
    }
}else {
        $_SESSION['error']="Wrong User ID";
        header("location: admin-login.php");
}

?>