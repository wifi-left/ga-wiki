<?php
    # Author: Gamom Yang
    # Made in China


// function Geturl($url){
//     $headerArray = array("Content-type:application/json;","Accept:application/json");
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
//     $output = curl_exec($ch);
//     curl_close($ch);
//     $output = json_decode($output,true);
//     return $output;
// }
function getResult($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST,false);
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30000);
	//设置等待时间
	curl_setopt($ch, CURLOPT_TIMEOUT, 30000);
	//设置cURL允许执行的最长秒数
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

function posturl($url,$data){
    $data  = json_encode($data);    
    $headerArray =array("Content-type:application/json;charset='utf-8'","Accept:application/json");
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl,CURLOPT_HTTPHEADER,$headerArray);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return json_decode($output，true);
}
// $Output=array();
// $List = json_decode();
// $VersionList=$List['versions'];
// $ilength=count($VersionList);
 
// for($i=0;$i<$ilength;$i++)
// {
//     echo $VersionList[$x];
// }
echo getResult("https://launchermeta.mojang.com/mc/game/version_manifest.json");
?>