
var API_URL='http://localhost/phalconproject/dapi';
var WEBSITE_URL='http://localhost/phalconproject/';

function showLoader()
{
    $("#loader").show();
}
function hideLoader()
{
    $("#loader").hide();
}


function preProcessGridData(data)
{
    if(data.errorcode=="BS100")
    {
        logout();
        return false;
    }
    else
    {
        return data;
    }

}
function autoresponse(url, data) {
//alert('inside autoresponse');
    var resultobj;
    var result;
    var URL = API_URL+"/" + url;
    var formData = data;
    $.ajax({
        type: "POST",
        url: URL,
        data: formData,
        // processData: false,
        dataType: 'json',
        async: !1,
        success: function(data) {
            resultobj = data;
        },
        error: function(xhr){
        //console.log(xhr.responseText);
        //alert('Ajax Error Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
        }
    });
	//alert('The value is:' + resultobj);
    return resultobj
}

function autoresponsefile(url, data)
{
    var resultobj;
    var result;
    var URL = API_URL+"/" + url;
    var formData = data;
    $.ajax({
        url: URL,
        type: "POST",
        data:  formData,
        contentType: false,
        enctype: 'multipart/form-data',
        cache: false,
        processData:false,
        async: !1,
        beforeSend : function()
        {
            //$("#preview").fadeOut();
            //$("#err").fadeOut();
            //console.log(data);
        },
        success: function(data)
        {
            resultobj = data;
        },
        error: function(xhr)
        {
            console.log(xhr.responseText);
        }
    });
    return resultobj
}
function thousandSeperator(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    //console.log('Query variable %s not found', variable);
}
function selectAll(id)
{
    id='#'+id;

    try {

        $(id).find('option[value!=""]').prop('selected',true);
        $(id).select2();
        if($(id).find('option').length==0)
        {
            swal('Options are not present in the list!');
        }
        else
        {
            $(id).trigger('change');
        }

    }catch(e) { }

}

function getSessionFilters() {
    var items = sessionStorage.getItem("ins_filters");
    return $.parseJSON(items);
}
/*--------This function is only for Chat-------*/
function set_cookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + btoa(cvalue) + ";" + expires + ";path=/";
}

function delete_cookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function get_cookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return atob(c.substring(name.length, c.length));
        }
    }
    return "";
}


function logoutNoAlert()
{
    delete_cookie("ins_token");
    sessionStorage.clear();
    localStorage.clear();
    window.location = WEBSITE_URL;
}
function logout()
{
    swal('Your session has been expired! Please login again.');
    delete_cookie("ins_token");
    sessionStorage.clear();
    localStorage.clear();
    window.location = WEBSITE_URL;
}
