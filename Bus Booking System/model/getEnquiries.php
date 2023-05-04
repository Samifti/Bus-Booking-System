<?php 
include 'dbConnect.php';

$sql = 
    "SELECT * FROM enquiry";

$result = mysqli_query($conn,$sql);
 
 
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}
     
$results = ["sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data ];
     
echo json_encode($results);
?>