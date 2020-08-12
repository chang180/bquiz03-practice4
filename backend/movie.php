<a href="?do=add_movie"><button>新增電影</button></a>
<hr>
<?php
$movies = $Movie->all([], " ORDER BY rank DESC ");
foreach ($movies as $m) {
?>
    <div class="contain" style="display:flex">
        <div><img src="img/<?= $m['poster']; ?>" style="height:100px;width:68px;"></div>
        <div>
            分級：<img src="icon/<?=$m['level'];?>.png">
        </div>
        <div>
            片名：<?=$m['name'];?>片長：<?=$m['length'];?>上映時間：<?=$m['ondate'];?><br>
            <a href="?do=edit_movie&id=<?=$m['id'];?>"><button>編輯電影</button></a><a href="api/del_movie.php?id=<?=$m['id'];?>"><button>刪除電影</button></a><br>
劇情介紹：<?=$m['intro'];?>
        </div>
    </div>
    <hr>
<?php } ?>