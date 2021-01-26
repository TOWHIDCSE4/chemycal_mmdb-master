var modelId;
var $inputEmail;
var $inputName;
var $inputPassword;
var $inputConfirmPassword;

var $username;
var $useremail;
var $imageavatar;
var $buttonDeleteImage;

$(document).on('click', '#buttonUpdate', buttonUpdateOnClick);
$(document).on('click', '#buttonUploadImage', buttonUploadImageOnClick);
$(document).on('click', '#buttonDeleteImage', buttonDeleteImage);

$(document).ready(function() {
    initVariable();
    getData();
});

function initVariable() {
    modelId = $("#modelId").val();
    $inputName = $("#exampleInputName");
    $inputEmail = $("#exampleInputEmail1");
    $inputPassword = $("#exampleInputPassword");
    $inputConfirmPassword =  $("#exampleInputConfirmPassword");
    $useremail = $("#useremail");
    $username = $("#username");
    $imageavatar = $(".image-avatar");
    $buttonDeleteImage = $("#buttonDeleteImage");
}
function getData() {
    let url = "/admin/user/detail/";
    let headers = {
        token: getAdminToken(),
    };
    let data = {
        id:modelId
    };

    callGetMethod(url,headers, data, function(response) {
        showData(response.data);
    }, function(error) {

    });
}

function showData(item) {
    console.log(item.avatar);
    $username.html(item.name);
    $useremail.html(item.email);
    $inputName.val(item.name);
    $inputEmail.val(item.email);

    if(item.avatar ==null){
        $buttonDeleteImage.attr("style", "display: none");
    }else{
        $buttonDeleteImage.attr("style", "display: initial");
    }
    $imageavatar.attr("src", item.avatar);
}

function buttonUpdateOnClick() {
    let url = "/admin/user/update";

    let params = {
        id: modelId,
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
function buttonUploadImageOnClick() {
    $inputFileUploadImage.trigger("click");
}

function buttonDeleteImage() {

}
