var $table;
var $inputSearch;
var recPerPage = 10;
var page = 1;
var totalPages = 0;
var records = [];
var totalRecords = 0;
var i = 0;
$(document).ready(function() {
    initVariable();
    getData();
});

function initVariable() {
    $table = $(".tableData");
    $inputSearch = $("#inputSearch");
}

function getData() {
    let url = "/admin/user/all";
    let headers = {
        token: getAdminToken(),
    };
    let data = {
    };
    callGetMethod(url,headers, data, function(response) {
        showData(response.data);
    }, function(error) {

    });

}
function showData(data) {

    records = data;
    totalRecords = records.length;
    totalPages = Math.ceil(totalRecords / recPerPage);


    $('#pagination').removeData("twbs-pagination");// xoa du lieu
    $("#pagination").twbsPagination({
        totalPages: totalPages,
        visiblePages: 5,
        onPageClick: function (event, page) {
            showDataTable(page, records);
        }
    });

}

function showDataTable(page, records){

    let displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
    let endRec = (displayRecordsIndex) + recPerPage;
    let displayRecords = records.slice(displayRecordsIndex, endRec);
    $table.find("tbody").html("");

    // Fill data
    for (var i = 0; i < displayRecords.length; i++) {
        var item = displayRecords[i];
        var buttonActions =
            "<div class='btn-group align-top'>" +
            "<a href='/admin/user/edit/" + item.id + "'class='btn btn-sm btn-primary badge' data-target='#user-form-modal'>Edit</a>" +
            "<button id= 'buttonDelete' row-id='"+ item.id +"'class='btn btn-sm btn-primary badge' type='button'><i class='fa fa-trash'></i></button>" +
            "</div>";

        var $avatar =null;
        if(item.avatar ==null){
            $avatar ='../../../assets/images/users/10.jpg';
        }else{
            $avatar = item.avatar;
        }
        $table.find('tbody:last-child').append('' +
            '<tr>' +
            '<td class="align-middle text-center">' + item.id +'</td>' +
            '<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="'+$avatar+'"></td>'+
            '<td class="text-nowrap align-middle">' +item.name + '</td>'+
            '<td class="text-nowrap align-middle"><span>'+item.email+'</span></td>'+
            '<td class="text-center align-middle">'+ buttonActions +'</td>'+
            '</tr>');
    }
}


$(document).on('click', '#buttonDelete', buttonDelete);
function buttonDelete() {

    var r = confirm("Do you want to delete this user?");

    if (r == false) {
        return;
    }
    let url = "/admin/user/delete";
    let id = $(this).attr("row-id");
    let params = {
        id:id
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
$(document).on('click', '#buttonSearch', buttonSearch);
function buttonSearch() {

    let url = "/admin/user/search";
    let headers = {
        token: getAdminToken(),
    };
    let data = {
        keyword:$inputSearch.val()
    };
    callGetMethod(url,headers, data, function(response) {
        showData(response.data);
    }, function(error) {

    });
}

