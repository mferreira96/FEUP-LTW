$('#update').submit(function () {
    var username = $.trim($('input[name="username"]').val());
	var name = $.trim($('input[name="name"]').val());
    var confirm = $.trim($('input[name="confirm"]').val());
	var password = $.trim($('input[name="password"]').val());
	console.log("aasdsa");
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
	if ($('div').hasClass('edit_user')){
		console.log("aa");
		 $("input[name=password]").change(changeCurrentPassword());
	}
});

function validatePassword()
{
    $("input[name=password]").focusout(checkCurrentPassword);
    
}

function checkCurrentPassword() {
    var username = $("input[name=username]").val();
    var password = $.trim($("#password").val());
    var currentPassword = $("input[name=old_password]").val();
        $.ajax ({
        url: "../templates/jquery/get_user.php",
        type: "get",
        data: { password : currentPassword },
        success: function(samePassword) {
            
			console.log("aaaaa");
            if (samePassword == "false" && password.length > 0) {
                $(".info").text("Password is not correct!");
                $(".info").css("color", "red");
            }
            else {
                 $(".info").text("");
            }
        }
    });
}
