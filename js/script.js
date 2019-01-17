let img;
$('input:file').change(function () {
    img = this.files;
});
$('.register').submit(function (event) {
    event.preventDefault();
    let form = new FormData();
    let dataForm = JSON.stringify($(this).serializeArray());
    form.append("dataForm", dataForm);
    $.each(img, function (key, value) {
        form.append(key, value);
    });
    $.ajax({
        url: "profile/registerprocessing.php",
        type: "POST",
        data: form,
        cache: false,
        processData: false,
        contentType: false,
        success: function (res) {
            let r = JSON.parse(res);
            if (r.success == 1) {
                alert('зарегался, молор');
            } else {
                alert(r.error);
            }
        },
    });
});
$('.signin').submit(function (event) {
    event.preventDefault();
    let form = new FormData();
    let dataForm = JSON.stringify($(this).serializeArray());
    form.append("dataForm", dataForm);
    $.ajax({
        url: "profile/signinprocessing.php",
        type: "POST",
        data: form,
        cache: false,
        processData: false,
        contentType: false,
        success: function (res) {
            let r = JSON.parse(res);
            if (r.success == 1) {
                location.href = 'profile/profile.php';
            } else {
                alert(r.error);
            }
        },
    });
});


