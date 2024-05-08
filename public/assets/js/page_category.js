var data;
$("#add-item").mousemove(function () {
    $("#category_slug").val(
        $("#category")
            .val()
            .replace(/[^a-z0-9\s/&]/gi, "")
            .replace(/[_\s/&]/g, "-")
    );
});
