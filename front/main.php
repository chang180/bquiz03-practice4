<div id="mm">
    <div class="half" style="vertical-align:top;">
        <h1>預告片介紹</h1>
        <div class="rb tab" style="width:95%;">
            <div id="abgne-block-20111227">
                <div style="height:300px;">
                    <div class="list" style="position:relative">
                        <img id="showpost" style="width:150px;height:250px"><br>
                        <span id="showtext"></span>
                    </div>
                </div>
                <div style="height:100px;">
                    <div class="butt" style="display:flex">
                        <button onclick="pp(1)">&#9664;</button>
                        <?php
                        $posters = $Poster->all(['sh' => 1]);
                        foreach ($posters as $key => $p) {
                            echo "<div id='ssaa" . $key . "' onclick='change($key)' class='im'><img src='img/" . $p['img'] . "' style='height:80px;width:68px'>
<br>
<span>" . $p['name'] . "</span>
</div>";
                        }
                        ?>
                        <button onclick="pp(2)">&#9654;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="half">
        <h1>院線片清單</h1>
        <div class="rb tab" style="width:95%;">


            <div class="ct"> </div>
        </div>
    </div>
</div>

<script>
    var nowpage = 0,
        num = <?= count($posters); ?>,
        po = 0,
        anim = <?= $_SESSION['ani']; ?>;
        
        change(0);
        
        function change(post) {
            $("#showpost").attr("src", $("#ssaa" + po).find("img").attr("src"));
            $("#showtext").text($("#ssaa" + po).text());
            po = post;
        }
        
        setInterval(() => {
            ani();
            po++;
            if(po>=num) po=0;
    }, 3000);

    function ani() {
        switch (anim) {
            case 1:
                $(".list").fadeOut();
                change(po);
                $(".list").fadeIn();
                break;
            case 2:
                $(".list").slideToggle();
                change(po);
                $(".list").slideToggle();
                break;
            default:
                $(".list").animate({
                    left: "-=200px",
                    opacity: "0"
                })
                change(po);
                $(".list").animate({
                    left: "+=200px",
                    opacity: "1"
                })
                break;

        }
    }

    function pp(x) {
        var s, t;
        if (x == 1 && nowpage - 1 >= 0) {
            nowpage--;
        }
        if (x == 2 && (nowpage + 1) <= num * 1 - 4) {
            nowpage++;
        }
        $(".im").hide()
        for (s = 0; s <= 3; s++) {
            t = s * 1 + nowpage * 1;
            $("#ssaa" + t).show()
        }
    }
    pp(1)
</script>