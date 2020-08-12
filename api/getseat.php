<?php
include_once "../base.php";
$seat=[];
$movies = $Ord->find(['name' => $_POST['name'], 'date' => $_POST['date'], 'session' => $_POST['session']]);
if (!empty($movies)) {
        foreach ($movies as $m) {
                $seat = array_merge($seat,unserialize($m['seat']));
        }
}
for ($i = 1; $i <= 20; $i++) {
if(in_array($i,$seat)){
        echo "<img src='icon/03D03.png'>";
}else{
        echo "<img src='icon/03D02.png'><input type='checkbox' class='seat' value='$i'>";
}
        if ($i % 5 == 0) echo "<br>";
}
