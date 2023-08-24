<?php
header("Access-Control-Allow-Origin: *"); // Add CORS header to allow requests from any origin
$data = array(
    'insuranceStatus' => 'Insurance Active',
    'expirationDate' => '2023-08-31'
);
echo json_encode($data);
?>
