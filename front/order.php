<form id="movie">
    <h1 class="ct">線上訂票</h1>
    電影：<select name="name" id="name">
        <?php
        $today = date("Y-m-d");
        $ondate = date("Y-m-d", strtotime("$today -2 days"));
        $movies = $Movie->all(['sh' => 1], " & ondate >= $ondate & ondate <= $today");
        foreach ($movies as $m) {
        ?>
            <option value="<?= $m['name']; ?>"><?= $m['name']; ?></option>
        <?php
        }
        ?>
    </select><br>
    日期：<select name="date" id="date"></select><br>
    場次：<select name="session" id="session"></select><br>
    <button type="button" onclick="booking()">確定</button><button type="reset">重置</button>
</form>
<form id="order" style="display:none">
    <div id="seat"></div>
    您選擇的電影是：<span id="mname"></span><br>
    您選擇的時刻是：<span id="mdate"></span><span id="msess">&nbsp;</span><br>
    您勾選了<span id="ticket">0</span> 張票，最多可以購買4張票<br>
    <button type="button" onclick="prev()">上一步</button><button type="button" onclick="send()">完成訂購</button>
</form>
<script>
    let ticket = 0,
        seat = [];
    getdate();
    $("#name").on("change", function() {
        getdate();
    })

    function getdate() {
        $.post("api/getdate.php", {
            "name": $("#name").val()
        }, function(res) {
            $("#date").html(res);
            getsess();
        })
    }

    function getsess() {
        $.post("api/getsess.php", {
            "name": $("#name").val(),
            "date": $("#date").val()
        }, function(res) {
            $("#session").html(res);
        })
    }

    function booking() {
        $("#movie,#order").toggle();
        $("#mname").text($("#name").val());
        $("#mdate").text($("#date").val());
        $("#msess").text($("#session").val());
        $.post("api/getseat.php", {
            "name": $("#name").val(),
            "date": $("#date").val(),
            "session": $("#session").val()
        }, function(res) {
            $("#seat").html(res);
            $(".seat").on("change", function() {

                if (this.checked) {
                    if (ticket > 3) this.checked = false;
                    else {
                        ticket++;
                        seat.push(this.value);
                    }
                } else {
                    ticket--;
                    seat.splice(seat.indexOf(this.value), "1");
                }
                $("#ticket").text(ticket);
                // console.log(seat);
            })
        })
    }

    function send() {
        $.post("api/order.php", {
            "name": $("#name").val(),
            "date": $("#date").val(),
            "session": $("#session").val(),
            "seat":seat,
            "qt":ticket
        }, function(res) {
location.href=`?do=result&no=${res}`;
// console.log(res);
        })
    }

    function prev() {
        $("#movie,#order").toggle();
        $("#seat").html("");
    }
</script>