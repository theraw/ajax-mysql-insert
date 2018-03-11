<?php
$servername = "127.0.0.1";
$user = "raw";
$pass = "goforit";
$dbname = "tester";

$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("DB FAIL : " . $conn->connect_error);
} 

	$username = $_POST['name'];
	$password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        header('Content-type: application/json');
        $result = array ('result'=>1);
        echo json_encode($result);
    } else {
        header('Content-type: application/json');
        $result = array ('result'=>0);
        echo json_encode($result);
    }

$conn->close();
?>


