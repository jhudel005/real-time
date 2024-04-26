<?php

include 'connection/conn.php';
$conn = connection();

$sql = "SELECT * FROM tbl_rt";
$result = $conn->query($sql) or die ($conn->error);
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);