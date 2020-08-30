$(document).ready(function(){
    var comId = 0, comName = '', braId = 0, braName = '', deptId = 0,  deptName='';


    /****auto fill comfirm password begin***/

    $('#eUpass').on('keyup', function(){
        $('#eUcpass').val($('#eUpass').val());
    });

    /****auto fill comfirm password ends***/

    /**********Department Script***********/

      $('.deptDelete').on('click', function(event){
          event.preventDefault();
          deptId = event.currentTarget.parentNode.parentNode.dataset['deptid'];
          deptName = event.currentTarget.parentNode.parentNode.dataset['deptname'];
          comName = event.currentTarget.parentNode.parentNode.dataset['comname'];
          $('#deptCol').text(deptName); $('#deptCol1').text(comName);

      });

    $('#deptButt').on('click', function(event) {
        event.preventDefault();
        $(this).attr('data-dismiss','modal');
        $.ajax({
            type: "POST",
            url: delDeptUrl,
            data: {id: deptId, _token: token},
            success: function(data){
                if(data == 'success'){
                    $('#trow'+deptId).remove();
                }else{
                    alert(data);
                }
            },
            error: function(err){
                alert(JSON.stringify(err));
            }
        });
    });

    /************End*********/

    /***branch section script starts***/

    $('.braDelete').on('click', function(event){
        event.preventDefault();
        braId = event.currentTarget.parentNode.parentNode.dataset['braid'];
        braName = event.currentTarget.parentNode.parentNode.dataset['braname'];
        comName = event.currentTarget.parentNode.parentNode.dataset['comname'];
        $('#braCol').text(braName); $('#braCol1').text(comName)
    });

    $('#braButt').on('click', function(event) {
        event.preventDefault();
        $(this).attr('data-dismiss','modal');
        $.ajax({
            type: "POST",
            url: braDelUrl,
            data: {id: braId, _token: token},
            success: function(data){
                if(data == 'success'){
                    $('#trow'+comId).remove();
                }else{
                    alert(data);
                }
            },
            error: function(err){
                alert(JSON.stringify(err));
            }
        });
    });
    /***branch section script ends***/

    /***Company section script starts***/
    $('.comDelete').on('click', function(event){
        event.preventDefault();
        comId = event.currentTarget.parentNode.parentNode.dataset['comid'];
        comName = event.currentTarget.parentNode.parentNode.dataset['comname'];
        $('#comCol').text(comName);
    });

    $('#comButt').on('click', function(event) {
        event.preventDefault();
        $(this).attr('data-dismiss','modal');
        $.ajax({
            type: "POST",
            url: comDelUrl,
            data: {id: comId, _token: token},
            success: function(data){
               if(data == 'success'){
                   $('#trow'+comId).remove();
               }else{
                   alert(data);
               }
            },
            error: function(err){
                alert(JSON.stringify(err));
            }
        });
    });
    /***Company section script ends***/

});

