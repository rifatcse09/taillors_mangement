var booking_events = {
    init : function(){
        $('#booking_edit').on('submit', function(e){
            e.preventDefault();
            var fd = new FormData(this);
            order.booking_edit(fd);
        });
        $('#booking_add').on('submit', function(e){
            e.preventDefault();
            var fd = new FormData(this);
            order.booking_add(fd);
        });
        $('.orderinfo').on('click', function(e){
            e.preventDefault();
            var id = this.id;
            var splitid = id.split('_');
            var orderId = splitid[1];
            //alert(orderId);
           order.order_info(orderId);
        });
    }
};

var order = {
    order_info : function(orderId){
        // AJAX request
        $.ajax({
            url:'post_url/orderInfo',
            type: 'post',
            data: {orderId: orderId},
            success: function(response){ 
                // Add response in Modal body
                $('.modal-body').html(response); 

                // Display Modal
                $('#empModal').modal('show'); 
            }
        });
    },
    booking_edit : function(fd){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'post_url/bookingEdit', true);
        var order_no =  $('[name="order_no"]').val();
        //alert(order_no);
        //return false;
        xhr.onload = function() {
            if (this.status == 200) {
                
                if(this.response=='Order Updated Successfully')
                {
                    var link = 'invoice_print/invoice/'+order_no;
                    var mywindow = window.open(link);

                    setTimeout(function(){
                     var baseUrl = document.location.origin;
                      
                        mywindow.print();
                        window.location = 'orderManage';
                        mywindow.close();
                    }, 1000);
                }
            };
        };
        xhr.send(fd);
    },

    booking_add : function(fd){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'post_url/bookingAdd', true);
        var order_no =  $('[name="order_no"]').val();
        //alert(order_no);
        //return false;
        xhr.onload = function() {
            if (this.status == 200) {
                console.log(this.response);
                if(this.response=='Order Received Successfully')
                {
                    var link = 'invoice_print/invoice/'+order_no;
                    var mywindow = window.open(link);
                    setTimeout(function(){
                        mywindow.print();
                        window.location = 'booking';
                        mywindow.close();
                    }, 1000);
                }

            };
        };
        xhr.send(fd);
    }
};
$(function(){
    booking_events.init();
});


