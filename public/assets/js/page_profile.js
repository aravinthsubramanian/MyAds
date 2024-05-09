$(document).ready(function () {
    $("#profile_delete").on("click", function () {
        $("#delete-item").modal("show");
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="token"]').attr("content"),
        },
    });

    $image_crop = $("#image_demo").croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: "circle", //circle
        },
        boundary: {
            width: 300,
            height: 300,
        },
    });

    $("#profile_image").on("change", function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $("#imageModel").on("shown.bs.modal", function () {
                $image_crop.croppie("bind", {
                    url: event.target.result,
                });
            });
        };
        reader.readAsDataURL(this.files[0]);
        $("#imageModel").modal("show");
    });

    $(".crop_image").click(function (event) {
        $image_crop
            .croppie("result", {
                type: "canvas",
                size: "viewport",
            })
            .then(function (response) {
                $.ajax({
                    url: "update_profile_image",
                    type: "POST",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                        image: response,
                    },
                    success: function (data) {
                        location.reload(true);
                    },
                });
            });
    });
});
