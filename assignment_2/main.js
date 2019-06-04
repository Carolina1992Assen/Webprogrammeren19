function validateForm() {

    $('#sb').click(function () {
        let varName = $('#name').val();
        let varAge = $('#age').val();
        let varCity = $('#city').val();
        let varEmail = $('#email').val();
        let varPN = $('#pn').val();
        let input = [varName, varAge, varCity, varEmail, varPN];
        let empty_string = /""/;

        fields = 0;
        $.each(input, function (index, value) {
            if (value.length === 0) {
                fields = fields + 1;
            }
        });


        if (fields > 0) {
            $("#form-alert").show();
            $("#form-alert").text("Please fill in all the fields!");

        }

        else {
            let n = 0;
            let reText =  /^[a-z ,.'-]+$/i   //name moet whitespace kunnen bevatten
            let reNum = /^[0-9]+$/;
            let reEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            $("#form-alert").text("Please make sure the sure the following fields are valid: ");

            if (!reText.test(varName)) {
                $("#form-alert").show();
                $("#form-alert").text($('#form-alert').text() + " [Name] ");
                n = n + 1;

            }

            if (!reNum.test(varAge)) {
                $("#form-alert").show();
                $("#form-alert").text($('#form-alert').text() + " [Age] ");
                n = n + 1;
            }


            if (!reText.test(varCity)) {
                $("#form-alert").show();
                $("#form-alert").text($('#form-alert').text() + " [City] ");
                n = n + 1;

            }

            if (!reEmail.test(varEmail)) {
                $("#form-alert").show();
                $("#form-alert").text($('#form-alert').text() + " [Email] ");
                n = n + 1;

            }

            if (!reNum.test(varPN)) {
                $("#form-alert").show();
                $("#form-alert").text($('#form-alert').text() + " [Phone number] ");
                n = n + 1;

            }

            if (n === 0) {
                $("#form-alert").hide();

                function writeFormData() {
                    $("#form-content table tbody td:eq(0)").text(varName);
                    $("#form-content table tbody td:eq(1)").text(varAge);
                    $("#form-content table tbody td:eq(2)").text(varCity);
                    $("#form-content table tbody td:eq(3)").text(varEmail);
                    $("#form-content table tbody td:eq(4)").text(varPN);
                    $("#form-content").show();
                }
                writeFormData();
            }


            $("#eb").click(function () {
                $("#form-alert").hide();
                $("#form-content").hide();
                $(".form-control").val("");
            });

        }

    });

}


function tabs() {
    $('#contact-tab').click(function(){
        $('#contact').show();
    });

    $('#links').hide(); // It said in the assignment the links where hidden but they were not, so i hid them beforehand.
    $("#link-tab").click(function(){
        $('#links').show();
    });
}



$(document).ready(function() {
    validateForm();
    tabs();
});

