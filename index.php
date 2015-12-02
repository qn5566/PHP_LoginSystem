<!doctype html>
<html lang="zh-tw">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/style.css" rel="stylesheet">
    <script language="JavaScript" type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/login.js"></script>
</head>
<form id="identifi" class="container" name="form" method="post" action="connect.php">
    帳號：<input type="text" name="id"/> <br>
    密碼：<input type="password" name="pw"/> <br>
    <input type="submit" name="button" value="登入"/>&nbsp;&nbsp;
<!--    <a type="submit" name="button" class="css_btn_class">登入</a>-->
    <a href="register.php">申請帳號</a>
</form>

<!--<script>-->
<!--    //    $("form").submit(function () {-->
<!--    //        return false();-->
<!--    //    });-->
<!--    $(".css_btn_class").on("click", function (e) {-->
<!---->
<!--        $.ajax({-->
<!--            url: "connect.php",-->
<!--            type: "post",-->
<!--            data: $("#identifi").serialize(),-->
<!--            success: function (msg) {-->
<!---->
<!--//                $('#ffff').html(msg);-->
<!--//                alert(msg);-->
<!---->
<!--//switch(msg){-->
<!--//case "0":-->
<!--//$("#title_msg").html("您輸入的認證碼驗證成功!");//+_mac機台 01已輸入過認證碼，或沒有新機紀錄 02認證碼輸入錯誤請重新輸入-->
<!--//$('#bou').hide();-->
<!--//break;-->
<!--//case "1":-->
<!--//$("#title_msg").html("認證碼有誤，請重新輸入(錯誤代碼:001)");-->
<!--//break;-->
<!--//case "2":-->
<!--//$("#title_msg").html("認證碼有誤，請重新輸入(錯誤代碼:002)");-->
<!--//break;-->
<!--//case "3":-->
<!--//$("#title_msg").html("認證碼有誤，請重新輸入(錯誤代碼:003)");-->
<!--//break;-->
<!--// default:-->
<!--//   $("#change_sales").html(msg);-->
<!--//   break;-->
<!---->
<!--            }-->
<!--        })-->
<!---->
<!---->
<!--    })-->
<!---->
<!---->
<!--</script>-->