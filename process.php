<!-- Form Data Received -->

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include('dbConnect.php');

$sql = "select * from admin where username=:username";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":username",username);
$stmt->execute();

if($stmt->rowCount() > 0) {
    
}