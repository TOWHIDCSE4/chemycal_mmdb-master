// var API_URL = "https://online.tuvisonlong.vn";

var APP_NAME = "mmdb";

var SITE_TOKEN_PREFIX = "site";
var ADMIN_TOKEN_PREFIX = "admin";

function getSiteToken() {
    let key = APP_NAME + "_" + SITE_TOKEN_PREFIX + "_token";
    return getStorageData(key, null);
}

function saveSiteToken(token) {
    let key = APP_NAME + "_" + SITE_TOKEN_PREFIX + "_token";
    saveStorageData(key, token);
}

function getAdminToken() {
    let key = APP_NAME + "_" + ADMIN_TOKEN_PREFIX + "_token";
    return getStorageData(key, null);
}

function saveAdminToken(token) {
    let key = APP_NAME + "_" + ADMIN_TOKEN_PREFIX + "_token";
    saveStorageData(key, token);
}

// Storage Data =====================================================================================================
function saveStorageData(key, value) {
    window.localStorage.setItem(key, value);
}

function getStorageData(key, defaultValue) {
    var val = window.localStorage.getItem(key);

    if (val == null) {
        val = defaultValue;
    }

    return val;
}

// =================================================================================================================



function findObjectInArrByKey(arr, key, value) {
    for(var i=0; i<arr.length; i++) {
        if(arr[i][key] == value) {
            return arr[i];
        }
    }

    return null;
}



var isShowLoading = false;
function showLoading() {
    if (!isShowLoading) {
        $.LoadingOverlay("show");
        isShowLoading = true;
    }
}

function hideLoading() {
    if (isShowLoading) {
        $.LoadingOverlay("hide");
        isShowLoading = false;
    }
}

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};