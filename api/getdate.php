<?php
include_once "../base.php";
$today=date("Y-m-d");
$movie=$Movie->find(['name'=>$_POST['name']]);
$ondate = date("Y-m-d", strtotime("$today -2 days"));
for($i=1;$i<=3;$i++){
    if($movie['ondate']<=$ondate){
        echo "<option value='$ondate'>$ondate</option>";
    }
    $ondate=date("Y-m-d",strtotime("$ondate +1 day"));
}