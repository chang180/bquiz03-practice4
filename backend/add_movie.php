<form action="api/save_movie.php" method="post" enctype="multipart/form-data">
    片名：<input type="text" name="name"><br>
    分級：<select name="level">
        <?php
    for($i=1;$i<=4;$i++){
        echo "<option value='$i'>".$level[$i]."</option>";
    }
        ?>
    </select><br>
    片長：<input type="number" name="length"><br>
    上映日期：
    <select name="y">
    <?php
    for($i=2020;$i<=2021;$i++){
        echo "<option value='$i'>$i</option>";
    }
        ?>
    </select>
    年
    <select name="m">
    <?php
    for($i=1;$i<=12;$i++){
        echo "<option value='$i'>$i</option>";
    }
        ?>
    </select>月
    <select name="d">
    <?php
    for($i=1;$i<=31;$i++){
        echo "<option value='$i'>$i</option>";
    }
        ?>
    </select>
    日<br>
    發行商：<input type="text" name="publish"><br>
    導演：<input type="text" name="director"><br>
    預告影片：<input type="file" name="trailer"> <br>
    電影海報：<input type="file" name="poster"><br>
    排序：<input type="number" name="rank"><br>
    劇情簡介：<textarea name="intro" style="width:600px;height:200px;"></textarea><br>
    <div class="ct"><button>新增</button><button type="reset">重置</button></div>
</form>