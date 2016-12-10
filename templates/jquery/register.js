$('form').submit(function () {
    var username = $.trim($('input[name="username"]').val());
	var name = $.trim($('input[name="name"]').val());
    var confirm = $.trim($('input[name="confirm"]').val());
	var password = $.trim($('input[name="password"]').val());
    if (user === '') {
        alert('Please choose a username.');
        return false;
    }
    if (pass === '') {
        alert('Please write a password.');
        return false;
    }
    if (pass !== confirm) {
        alert('Password does not match the confirmation field.');
        return false;
    }
});
