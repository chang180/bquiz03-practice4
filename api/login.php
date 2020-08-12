<?php
include_once "../base.php";
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    $_SESSION['login']=1;
    to("../admin.php");
}else{
    echo "<script>
    alert('帳號或密碼錯誤');
    location.href='../admin.php?do=login';
    </script>";
}