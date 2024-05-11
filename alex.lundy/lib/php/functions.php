<?php

function print_p($v){
    echo "<pre>",print_r($v), "</pre>";
}


function file_get_json($filename){
    $file = file_get_contents($filename);
     return json_decode($file);
}

include_once "auth.php";
function makeConn(){
    $conn = new mysqli(...MYSQLIAuth());
    if($conn->connect_errno) die($conn->connect_error);
    $conn->set_charset('utf8');
    return $conn;
}
function makePDOConn(){
    try{
        $conn = new PDO(...PDOAuth());
    } catch(PDOException $e){
        die($e->getMessage());
    }
    return $conn;
}



function makeQuery($conn, $qry, $types = null, $params = null){
    // Prepare the SQL statement
    $stmt = $conn->prepare($qry);

    // Check if the statement preparation was successful
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters if provided
    if (!empty($params) && !empty($types)) {
        $stmt->bind_param($types, ...$params);
    }

    // Execute the prepared statement
    $stmt->execute();

    // Check for errors during execution
    if ($stmt->errno) {
        die("Error executing statement: " . $stmt->error);
    }

    // Get the result set
    $result = $stmt->get_result();

    // Fetch the data into an array of objects
    $data = [];
    while ($row = $result->fetch_object()) {
        $data[] = $row;
    }

    // Close the statement
    $stmt->close();

    return $data;
}

?>