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




function makeQuery($conn, $qry){
    $result = $conn->query($qry);
    if($conn->errno) die($conn->error);
    $a=[];
    while($row = $result->fetch_object()){
        $a[]=$row;
    }
    return $a;
}


function cartListTemplate($r, $o){
    return $r.<<<HTML
    <div class="display-flex">
        <div class="flex-none images-thumbs">
            <img src="/images/store/$o->thumbnail">
</div>
<div class="flex-stretch">
    <strong>$o->title</strong>
    <div>Delete</div>
</div>
<div class="flex-none">
    &dollar;
</div>
</div>
HTML;
}




?>
