$(document).ready(function (){
    $('.chitietsach').click(function (){
        $.ajax({
            url : 'site/controller/c_sach.php?cn=sach&method=Chi_tiet_sach&id_sach='+$(this).data('idchitietsach'),
            data :{
                //id_sach : $(this).data('idchitietsach')
            },
            dateType:"text",
            type: 'POST',
            success: function (result) {
                $('#right1').html(result);
            }
            
        });
        alert (a);
    });
});
