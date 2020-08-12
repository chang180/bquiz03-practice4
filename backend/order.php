<h1 class="ct">訂單管理</h1>
<form action="api/fastdel.php" method="post" onsubmit="return confirm('確定？')">
快速刪除：<input type="radio" name="mode" value="1">
<input type="text" name="date">依日期
<input type="radio" name="mode" value="2">依電影<select name="name">
<?php
$movies=$Movie->all();
foreach($movies as $m){
?>
<option value="<?=$m['name'];?>"><?=$m['name'];?></option>
<?php }
?>
</select>
<button>刪除</button>
</form>
<form action="api/edit_order.php">
<table rule="rows">
    <tr>
        <td>訂單編號</td>
        <td>電影名稱</td>
        <td>日期</td>
        <td>場次時間</td>
        <td>訂購數量</td>
        <td>訂購位置</td>
        <td>操作</td>
    </tr>
    <?php
$ords=$Ord->all([]," ORDER BY no DESC   ");
foreach($ords as $o){
    
    ?>
    <tr>
        <td><?=$o['no'];?></td>
        <td><?=$o['name'];?></td>
        <td><?=$o['date'];?></td>
        <td><?=$o['session'];?></td>
        <td><?=$o['qt'];?></td>
        <td><?php
        $seats=unserialize($o['seat']);
        foreach($seats as $s){
            echo $s,",";
        }
        ?></td>
        <td><a href="api/del_order.php?id=<?=$o['id'];?>"><button type="button">刪除</button></a></td>
    </tr>
<?php } ?>
</table>
</form>