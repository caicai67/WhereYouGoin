



 <?php
$servername = "localhost";
$username = "root";
$password = "hackgt";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
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