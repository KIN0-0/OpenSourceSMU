<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypie";

// DB 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결
if ($conn->connect_error) {
  die("연결 실패: " . $conn->connect_error);
}

// 데이터 확인
$sql = "SELECT name, quantity FROM pizza ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

echo json_encode($data);

$conn->close();
?>
