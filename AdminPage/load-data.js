$(document).ready(function() {
    var recordCount = 2;
    $("#loadBtn").click(function() {
        
        recordCount = recordCount + 2;
        $.ajax({
                    type: "GET",
                    url: "load-data.php?count="+recordCount,
                    data: {},
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",                    
                    cache: false,                       
                    success: function(response) {                        
                        var trHTML = '';
                            $.each(response, function (i, item) {
                                trHTML +=    '<tr><td>' + item.bk_id + '</td><td>' + item.status +
                               '</td><td>' + item.bk_amt + '</td><td>' + item.frm_date + '</td><td>' + item.to_date +
                               '</td><td>' + item.car_id + '</td><td>' + item.cust_id + '</td><td>' + item.bill_id + '</td><td>' + item.cust_id
                               + '</td><td>' + item.pin_current + '</td><td>' + item.pin_drop + '</td><td>' + item.disc + '</td><td>' + item.ins + '</td></tr>';
                            });
                            $('#firstTable').append(trHTML);
                    },
                    error: function (e) {
                        console.log(response);
                    }
            });  
    });        
});