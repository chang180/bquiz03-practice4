<?php
$ord=$Ord->find($_GET['no']);
?>
感謝您的訂購，您的訂單編號是：<?=$_GET['no'];?><br>
電影名稱：<?=$ord['name'];?><br>
日期：<?=$ord['date'];?><br>
場次時間：<?=$ord['session'];?><br>
座位：<br>
<?php 
$seats=unserialize($ord['seat']);
foreach($seats as $s){
    echo $s,",";
}
?>
共<span><?=$ord['qt'];?></span>張電影票
<br>
<div class="ct"><button onclic="location.href='index.php'">確認</button></div>

