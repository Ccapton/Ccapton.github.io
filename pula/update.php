<?php

$version=$_GET["version"];
$package=$_GET["package"];
$channel=$_GET["channel"];

if($package=="com.pula.freehire"){
  if(((int)$version)<1.1){
      header('Content-type:text/json');     //这句是重点，它告诉接收数据的对象此页面输出的是json数据；
      $arr = array('hasUpdate'=>true,'isSilent'=>true,'isAutoInstall'=>true,"isIgnorable"=>false,"versionCode"=>1,"versionName"=>"1.1"
      ,"url"=>"http://192.198.8.103/download.php?psw=123","md5"=>"899ef14ca9597dc10177f093987b095b","size"=>1995973);
      $json = json_encode($arr);
      echo $json;
   }
}else{
echo "erro package";
}


?>
