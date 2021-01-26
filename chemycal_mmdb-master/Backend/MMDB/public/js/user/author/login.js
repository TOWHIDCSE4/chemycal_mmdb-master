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
        "role": 1
    };
    let url = "/login";
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
        saveStorageData("user_email", response.data.email);
        window.location.replace("/");

    } else {
        alert(response.message);
    }
}

