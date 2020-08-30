$(document).ready(function(){
    var eId=0, dId=0, pname='', dname='';

    $('.docAdd').on('click', function(event){
        event.preventDefault();
         eId = event.currentTarget.parentNode.parentNode.dataset['eid'];
         pname = event.currentTarget.parentNode.parentNode.dataset['pname'];
         dname = event.currentTarget.parentNode.parentNode.dataset['dname'];
         dId = event.currentTarget.parentNode.parentNode.dataset['did'];
        $('#pCol').text(pname);
        $('#dCol').text(dname);
    });

    $('#docAppButt').on('click', function () {
        $(this).attr('data-dismiss','modal');
        var myclass = $('.sclass'+eId);
        var report = $('#doctext').val();
        $.ajax({
            type: "POST",
            url: url,
            data: {dId: dId, eId: eId, report: report, _token: token},
            success: function(data){
                if(data == "success!"){
                       $('#sclass'+eId).text("resolved");
                      myclass.removeClass("isRed");
                      myclass.addClass("isGreen");
                }else{
                    alert(data);
                }
            },
            error: function(err){
                alert(JSON.stringify(err));
            }
        });
    });
});
