<?php
$json = file_get_contents('http://localhost/json/json-1.php');

$data = json_decode($json,true);

$list = $data['stocks'][1];
//$list = $data['stocks'][0]['sto_name'];

//var_dump($data);
//echo "<pre>";

print_r($list);

?>
