$(document).ready(function () {

    $("#form-business-owner").on('submit', function (e) {
        e.preventDefault();
        registerZoho("form-business-owner")
    });

    $("#form-co-investor").on('submit', function (e) {
        e.preventDefault();
        registerZoho("form-co-investor")
    });

    $("#form-intermediary").on('submit', function (e) {
        e.preventDefault();
        registerZoho("form-intermediary")
    });
});


function registerZoho(formId) {

    $("#"+formId+"-submit").hide();
    $("#"+formId+"-loading").show();

    var myform = document.getElementById(formId);
    var dataForm = new FormData(myform);
    dataForm.append('Contact_Type', "Company contact");

    $.ajax({
        url: "https://nca-api.whagons.com/api/registerContactZoho",
        type: 'POST',
        datatype: 'json',
        data: dataForm,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#"+formId).hide();
            $("#form-alert-success").show();
            document.getElementById(formId).reset();

            setTimeout(function(){
                $("#form-alert-success").hide();
                $("#"+formId).show();
                $("#"+formId+"-loading").hide();
                $("#"+formId+"-submit").show();
            }, 3000);
        },
        error: function (data) {
        }
    })
}