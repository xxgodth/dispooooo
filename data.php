<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost","prototype","prototype","prototype")
$sqlQuery = "SELECT jenis_perkara FROM putpen";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>