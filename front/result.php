<?php
$movie=$Movie->find($_GET['no']);
?>
感謝您的訂購，您的訂單編號是：<?=$_GET['no'];?><br>
電影名稱：<?=$movie['name'];?><br>
日期：<?=$movie['date'];?><br>
場次時間：<?=$movie['session'];?><br>
座位：<br>
<?php 
$seats=unserialize($movie['seat']);
foreach($seats as $s){
    echo $s,",";
}
?>
<br>
<div class="ct"><button onclic="location.href='index.php'">確認</button></div>

