<?php
header("Content-Type: application/json");
if (isset($_GET["count"])){
    echo json_encode(["count" => 'hello']);
}
?>