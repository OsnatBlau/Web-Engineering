$.ajax({
    type: "POST",
    url: "php/signup.php",
    data: "password=" + name + "&email=" + email + "&password=" + password,
    success: function (text) {
        if (text == "success") {
            formSuccess();
        } else {
            formError();
            submitMSG(false, text);
        }
    }
});