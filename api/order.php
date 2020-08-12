<?php
include_once "../base.php";
$seat=[];
$_POST['no']=date("Ymd").sprintf("%04d",$Ord->q("SELECT MAX(id) FROM ord")[0][0]+1);
// print_r($_POST['seat']);
$_POST['seat']=serialize($_POST['seat']);
// echo $_POST['seat'];
$Ord->save($_POST);
echo $_POST['no'];