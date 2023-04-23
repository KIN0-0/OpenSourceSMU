<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypie";
$name = $_POST['name'];
$quantity = $_POST['quantity'];

// DB
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결
if ($conn->connect_error) {
  die("연결 실패: " . $conn->connect_error);
}

// 데이터 입력
$sql = "INSERT INTO pizza (name, quantity) VALUES ('$name', '$quantity')";

if ($conn->query($sql) === TRUE) {
  echo "데이터 입력 성공";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
