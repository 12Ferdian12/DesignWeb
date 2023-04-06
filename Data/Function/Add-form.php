<?php
header("Access-Control-Allow-Origin: *");
require_once '../API/Form.php';

function postRequestForm(){
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);
    if(!isset($data["Name"])){
        http_response_code(400);
        echo json_encode(["error" => "Nama  Dibutuhkan"]);
        exit;
    }
    if(strlen($data["Nama"]) < 3){
        http_response_code(400);
        echo json_encode(["error" => "Nama harus lebih dari 3 huruf"]);
        exit;
    }
    return $data;
}

$conn = connectToDb();
$data = createForm($conn, postRequestForm());
closeDb($conn);
http_response_code(200);
echo json_encode($data);
