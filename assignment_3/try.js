
function checkName() {
    let name_input = $('#name');
    let cur_val = name_input.val();
    let name_regex = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$";
    if (cur_val.match(name_regex) && cur_val !== '') {
        name_input.removeClass('is-invalid');
        name_input.addClass('is-valid');
        return true;
    } else {
        name_input.removeClass('is-valid');
        name_input.addClass('is-invalid');
        return false;
    }
}

function checkAge() {
    let age_input = $('#age');
    let cur_val_a = age_input.val();
    let age_regex = "^[0-9]+$";
    if (cur_val_a.match(age_regex) && cur_val_a !== '') {
        age_input.removeClass('is-invalid');
        age_input.addClass('is-valid');
        return true;
    } else {
        age_input.removeClass('is-valid');
        age_input.addClass('is-invalid');
        return false;
    }
}



function checkPlace() {

    let place_input = $('#place');
    let cur_val_p = place_input.val();
    let place_regex = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$";
    if (cur_val_p.match(place_regex) && cur_val_p !== '') {
        place_input.removeClass('is-invalid');
        place_input.addClass('is-valid');
        return true;
    } else {
        place_input.removeClass('is-valid');
        place_input.addClass('is-invalid');
        return false;
    }
}

function checkEmail() {

    let email_input = $('#email');
    let cur_val_e = email_input.val();
    let email_regex = "^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$";
    if (cur_val_e.match(email_regex) && cur_val_e !== '') {
        email_input.removeClass('is-invalid');
        email_input.addClass('is-valid');
        return true;
    } else {
        email_input.removeClass('is-valid');
        email_input.addClass('is-invalid');
        return false;
    }
}



function check () {


    $('#name').keyup(function () {
        checkName();
    });


    $('#place').keyup(function () {
        checkPlace();
    });

    $('#email').keyup(function () {
        checkEmail();
    });

    $('#age').keyup(function () {
        checkAge();
    });


    $('#sub').click(function () {

        if (checkName() && checkPlace() && checkEmail() && checkAge()) {
            $('form').submit();

        }
        else {
            $('#my_form')[0].reset();
            alert("enter valid values");

        }
    });



}



$(document).ready(function() {
    check();

});