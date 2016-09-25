



 <?php
$servername = "localhost";
$username = "root";
$password = "hackgt";

$dbname = "flightdatabase";
$tablename = "flight";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn == NULl) {
	echo "null";
}
// echo $conn;
echo var_dump($conn);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT originairport, destinationairport FROM flight  WHERE flydate=\"1990-06-00\"";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row

} else {
	echo "0 results";
}



?> 











<!-- 
<?php
// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function() use($app){
	$app->response->setStatus(200);
	echo "Welcome to slim !";

});
$app->run();

?>
 -->