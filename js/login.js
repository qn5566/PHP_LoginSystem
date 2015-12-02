/**
 * Created by heran on 2015/11/18.
 */
$(document).on('click','.css_btn_class',function(){
  //var ss=$("#identifi").serialize();
    //alert(ss);

    $.ajax({
        url: "http://qn7788.lionfree.net/connect.php",
        type: "post",
        data: $("#identifi").serialize(),
//        success: function (msg) {
//alert('success');
            //$('#ffff').html(msg);
        //}
    });
});

