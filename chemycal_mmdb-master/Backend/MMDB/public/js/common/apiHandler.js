var MAX_RETRY_COUNT = 2;

function callGetMethod(url, headers, data, successCallBack, errorCallBack) {
    let options = {
        url: url,
        type: "GET",
        headers: headers,
        data: data,
    };

    callApi(options, successCallBack, errorCallBack)
}

function callGetMethodOption(url, headers, data, successCallBack, errorCallBack) {
    let options = {
        url: url,
        type: "GET",
        headers: headers,
        data: data,
        crossDomain: true,
        dataType: 'jsonp'
    };

    callApi(options, successCallBack, errorCallBack)
}

function callPostMethod(url, headers, data, successCallBack, errorCallBack) {
    let options = {
        url: url,
        type: "POST",
        headers: headers,
        data: data,
    };

    callApi(options, successCallBack, errorCallBack)
}

function callPostFormDataMethod(url, data, successCallBack, errorCallBack) {
    let options = {
        url: url,
        type: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
    };

    callApi(options, successCallBack, errorCallBack)
}

function callApi(options, successCallBack, errorCallBack) {
    $.ajax(options).done(function(response) {
        var status = response.status;

        if (status == 1) {
            successCallBack(response);
        } else {

            // Check error code
            if (response.errorCode == 5) {
                // Retry
                errorCallBack(response.message);

            } else {
                errorCallBack(response.message);
            }

        }

    }).fail(function(request, status, error) {
        errorCallBack(request.responseText);
    });

}