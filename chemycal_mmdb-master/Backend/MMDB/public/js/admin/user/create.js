var $inputEmail;
var $inputName;
var $inputPassword;
var $inputConfirmPassword;
$(document).on('click', '#buttonSave', buttonSaveOnClick);
$(document).ready(function() {
    initVariable();
    getData();
});

function initVariable() {
    $inputName = $("#exampleInputName");
    $inputEmail = $("#exampleInputEmail1");
    $inputPassword = $("#exampleInputPassword");
    $inputConfirmPassword =  $("#exampleInputConfirmPassword");
}

function buttonSaveOnClick() {
    let url = "/admin/user/create";


    let params = {
        name: $inputName.val(),
        email: $inputEmail.val(),
        password: $inputPassword.val(),
        confirm_password:$inputConfirmPassword.val()
    };
    let headers = {
        token: getAdminToken(),
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };
    callPostMethod(url, headers, params, function(result) {
        window.location.replace("/admin/user");
    }, function(error) {

    });

}