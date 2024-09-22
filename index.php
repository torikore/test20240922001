<?php

$servername = "localhost";
$username = "root";
$password = "sdf1sdf2";
$dbname = "test20240922001";

// 接続を作成
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続をチェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQLクエリを作成
$sql = "select * from test001";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // データを出力
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Created_at:" . $row["created_at"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

