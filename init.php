<?php

header('Access-Control-Allow-Origin: *');


require_once (__DIR__ . "/config/app.php");
require_once (__DIR__ . "/curl.php");



$getData = callAPI('GET', url, false);

$getData = json_decode($getData,true);

var_dump($getData);

$result = [];
if(is_array($getData))
{
    $result['status'] = "success";
    $result['data'] = $getData;
}
else {
    $getData['status'] = "error";
    $getData['data'] = [];
    $getData['msg'] = "data is wrong!";
}
echo json_encode($result,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);


