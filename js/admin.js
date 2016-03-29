var update_receiver = function () {
    if ($("#Receiver").is(":checked")) {
        $('#nameReceiver').prop('disabled', false);
        $('#emailReceiver').prop('disabled', false);
        $('#buttonReceiver').prop('disabled', false);
    }
    else {
        $('#nameReceiver').prop('disabled', 'disabled');
        $('#emailReceiver').prop('disabled', 'disabled');
        $('#buttonReceiver').prop('disabled', 'disabled');
    }
};

$(update_receiver);
$("#Receiver").change(update_receiver);

var template = function () {
    if ($("#template").is(":checked")) {
        $('#name').prop('disabled', 'disabled');
        $('#message').prop('disabled', 'disabled');
        $('#hand').prop('checked', false);
        $('#templatefile').prop('disabled', false);
    }
    else {
        $('#name').prop('disabled', false);
        $('#message').prop('disabled', false);
        $('#hand').prop('checked', false);
    }
};

$(template);
$("#template").change(template);

var template = function () {
    if ($("#hand").is(":checked")) {
        $('#name').prop('disabled', false);
        $('#message').prop('disabled', false);
        $('#template').prop('checked', false);
    } else {
        $('#templatefile').prop('disabled', 'disabled');
    }
};

$(template);
$("#hand").change(template);