$(document).on('click', '#buttonLogin', buttonLoginOnClick);

var $inputUserEmail;
var $inputPassword;
$(document).ready(function() {
    initData();
});

function initData() {
    $inputUserEmail = $("#inputUserEmail");
    $inputPassword = $("#inputPassword");
}
function buttonLoginOnClick() {
    var data = {
        "email": $inputUserEmail.val(),
        "password": $inputPassword.val(),
        "role": 0
    };
    let url = "/admin/login";
    let headers = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };
    callPostMethod(url,headers, data, function(response) {
        loginDone(response);
    }, function(error) {

    });
}

function loginDone(response) {
    if (response.status === 1) {
        saveAdminToken(response.data.token);
        saveStorageData("user_avatar", response.data.avatar);
        saveStorageData("user_name", response.data.name);
        window.location.replace("/admin/home");
    } else {
        alert(response.message);
    }
}

