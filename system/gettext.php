<?php
$success = false;
$msg = "";
$content = "";
$ishtml = false;
if (!empty($_GET["html"])){
    $ishtml=$_GET["html"]=="yes";
}
if (!empty($_GET["pnm"])) {
    $filename = $_GET["pnm"];
    $filename = str_replace("/","\\",$filename);
    $filename = str_replace(".","\\",$filename);
    if($ishtml) $filename="..\\pages\\" . $filename . ".html";
    else $filename="..\\pages\\" . $filename . ".pg";
    //echo $filename;
    try {
        if (is_readable($filename)){
            $myfile = fopen($filename, "r");
            $content = fread($myfile, filesize($filename));
            fclose($myfile);
            $success = true;
        }else{
            $success = false;
            $msg = "404: 无法找到该页.";
        }
        
    } catch (Exception $e) {
        $success = false;
        $msg = "Runtime Error: " . $e;
    }
} else {
    $success = false;
    $msg = "Error: Unknown command.";
}
$arr = array('stat' => $success, 'msg' => $msg, 'content' => $content);
if(!$success){
    http_response_code('220');
}
echo json_encode($arr);
