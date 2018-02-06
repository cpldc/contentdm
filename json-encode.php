<?php
include 'variables.php';
$json = json_encode ( $hdg );
file_put_contents('json.json', $json);
?>