<!-- Form Data Received -->

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

include('dbConnect.php');

$sql = "select * from admin"