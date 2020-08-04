$().ready(function() {
    $('#signInBtn').on("click",function(event){
    event.preventDefault();
    var checkData = {};

    checkData.email = $('#email').val();
    checkData.password = $('#password').val();
    var response = autoresponse('employees/auth', checkData);
    
    if(response.success == false)
    {
        $('.signInResponse').text(response.errormsg);
    }
    else
    {
        if($("#rememberme").prop('checked')==true)
        {
            set_cookie('ins_email',checkData.email);
            set_cookie('ins_password',checkData.password);

        }
        else
        {
            delete_cookie('ins_email');
            delete_cookie('ins_password');
        }
        //alert("AA")
        //console.log(response);
      //  return false;
        set_cookie('ins_token',response.data.token);
        set_cookie('ins_name',response.data.name);
        window.location = 'form';
      //  window.location = 'landingpage.php';
    }

    });

    var email=get_cookie('ins_email');

    if(email!='')
    {
        var password=get_cookie('ins_password');
        $("#email").val(email);
        $("#password").val(password);
        $("#rememberme").prop('checked',true);
    }
});
