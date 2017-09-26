<?php
$psw=$_GET["psw"];
if($psw==123){
$filename = 'drive.apk'; //文件路径
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".basename($filename));
readfile($filename);
}else{
    echo "参数错误";
}
?>
