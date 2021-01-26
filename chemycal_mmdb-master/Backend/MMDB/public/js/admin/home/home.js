$(document).ready(function () {
    var name = getStorageData("user_name");
    let avatar = getStorageData("user_avatar");
    $(".name-admin").html(name);
});
$(document).on('click', '#buttonLogout', buttonLogoutOnClick);

function buttonLogoutOnClick() {
    let url = "/logout?kind=0";
    let headers = {
    };
    let data = {
    };

    callGetMethod(url,headers, data, function(response) {
        window.location.replace("/admin/login");
    }, function(error) {

    });
}