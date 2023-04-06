<?php
    require_once '../Database.php';

    function createForm($conn, $data){
        $Name = mysqli_real_escape_string($conn,$data["Name"]);
        $Age = mysqli_real_escape_string($conn,$data["Age"]);
        $sql = "INSERT INTO forum (Name, Age) VALUES ('$Name,$Age')";
        if(!mysqli_query($conn, $sql)){
            http_response_code(500);
            echo json_encode(["error" => "Failed to create the Identity: ".mysqli_error($conn)]);
            exit;
        }
        $data["SubmitID"] = mysqli_insert_id($conn);
        return $data;
    }
?>