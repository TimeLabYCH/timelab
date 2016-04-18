<?php 
require_once '../include.php';
header("content-type:text/html;charset=utf-8");
$_SESSION['userName']='test5';

$memo=$_POST;
$files=$_FILES;
$files['myfile']['date']=$memo['date'];
var_dump($_POST);
// $files=buildInfo();
var_dump($files);
$path="../data/userimag/test5";
$info=uploadFile($files,$path);
var_dump($info);
//$_FILES

// $path="../data/userimag/{$_SESSION['userName']}";   //若不存在则创建个人目录
// if(!file_exists($path)){
//     mkdir($path,0777,true);
// }


// echo $info;
