$(document).ready(function () {
    $("body").ready(myclock = function () {
        d = new Date();
        var options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        $("input[name='date']").val(d.toLocaleDateString("ru", options));
        $("input[name='clock']").val(d.toLocaleTimeString());
        setTimeout("myclock();", 500);
    });
    $('#datetime').hover(function () {
        $('#datetime').toggleClass('datetime');
    });
    $("#news").click(function () {
        $("#content").toggleClass("hide-news");
    });
    $("#logo a").click(function (){
        window.open('http://javascript.ru','javascript', 'width=800,height=600');
    })
});