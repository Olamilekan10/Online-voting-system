<!-- Form Data Received -->
<?php
session_start(); // Start the session

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include('dbConnect.php');

// Prepare the SQL statement
$sql = "SELECT * FROM admin WHERE username=:username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();

    // Check if the entered password matches the database password
    if ($row['password'] == $password) {
        // Correct assignment operator (=) instead of (-)
        $_SESSION['aid'] = $row['aid'];
        $_SESSION['admin_id'] = $username;
        $_SESSION['aname'] = $row['aname'];

        // Redirect to the admin dashboard
        header("Location: admin-dashboard.php");
        exit;
    } else {
        // Wrong password
        $_SESSION['error'] = "Wrong password";
        header("Location: admin-login.php");
        exit;
    }
} else {
    // Username not found
    $_SESSION['error'] = "Wrong User ID";
    header("Location: admin-login.php");
    exit;
}
?>
