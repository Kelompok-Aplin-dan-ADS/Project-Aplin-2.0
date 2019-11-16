$("#btnSearch").click(function (e) { 
    $.ajax({
        method: "post",
        url: "search.php",
        data:{
            judul: $("input[name=eventName]").val()
        },
        success: function (response) {
            $(".result").html(response);
        }
    });
});