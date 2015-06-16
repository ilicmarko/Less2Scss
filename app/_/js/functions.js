function convert() {
    var searchTxt = $("textarea[name='less']").val();
    $.post("convert.php", {
        searchVal: searchTxt
    }, function(data) {
        var output = $(data).filter("#output").text();
        var count = $(data).filter("#count").text();
        $("#output").html(output);
        $("#count").html(count);
    });
}