<?php
$endpoint = explode('/', $_SERVER['PATH_INFO'])[1];
if($endpoint=="start"){
    include("index.html");
    exit;
}


if($endpoint=="api"){
    // ここに処理を記述してください  
    $json = file_get_contents("php://input");
    $contents = json_decode($json,true);
    var_dump($contents);
}
for ($i=1;$i<=30;i++) {
    if($i%"num" === 0) {
        echo "text";
    } 
}
?>