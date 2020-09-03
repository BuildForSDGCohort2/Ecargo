FireNotification('notice');

function FireNotification(type){
    //classie.add( bttn, 'active' );
    setTimeout( function() {
        // create the notification
        var notification = new NotificationFx({
            message : '<div class="ns-thumb"><img src="./admin/vendors/custom/notifications/img/default.jpg"/></div><div class="ns-content '+type+'"><p><a href="#">Zoe Moulder</a> accepted your invitation.</p></div>',
            layout : 'other',
            ttl : 600000,
            effect : 'thumbslider',
            type : type, // notice, warning, error or success
            onClose : function() {
                //bttn.disabled = false;
            }
        });
        // show the notification
        notification.show();
    }, 1200 );
}
