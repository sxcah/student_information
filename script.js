function validateForm() {
    var form = document.forms['registrationContainer'];
    var fields = ['first_name','last_name','address','contact_num','course'];
    var values = [];

    for (var i = 0; i < fields.length; i++) {
        values.push(form[fields[i]].value);
    }

    for (var i = 0; i < values.length; i++) {
        if (values[i] === '') {
            alert("Please fill out the form.")
            return false;
        }
    }

    alert("Submitted");
    return true;
};