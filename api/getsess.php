<?php
include_once "../base.php";
$today=date("Y-m-d");
$movie=$Movie->find(['name'=>$_POST['name']]);
$ondate = date("Y-m-d", strtotime("$today -2 days"));
for($i=1;$i<=5;$i++){
        echo "<option value='$sess[$i]'>$sess[$i]</option>";
}