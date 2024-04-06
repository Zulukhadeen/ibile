$(document).ready(function(){
    $("#addmore").click(function(e) {
        console.log('button clicked');
        $.ajax({
            type:  "GET",
            url: "/server/index/index.php",
            data: {
                count: 'From client'
            },
            dataType: "json",
            success: function (response) {
                console.log(response)
            }
        })
    })
})