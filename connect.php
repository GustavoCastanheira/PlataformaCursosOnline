<?php
/*https://www.gigasystems.com.br/artigo/31/como-colocar-senha-no-wampserver*/
$host = "localhost";
$userName = "root";
$password = "GustavoTeste";
$dbName = "site_front";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if((isset($_POST['name'])&& $_POST['email'] !='') && (isset($_POST['coment']) !=''))
{
 require_once("index.html");

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$comment = $conn->real_escape_string($_POST['coment']);
$data = date('Y-m-d H:i:s');
$sql="INSERT INTO formulario (nome, email,comentario,data) VALUES ('".$name."','".$email."', '".$comment."', '".$data."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}

?>