$("#submitEmail").on("click", function () {
    //Инпуты
    let name = $("#name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    let social = $("#social-web").val();
    let size = $("#size-float").val();
    let limit = $("#limit-day").val();
    let count = $("#count-float").val();
    let address = $("#address").val();
    let message = $("#message").val();
    let chek = $("#agreement").prop('checked');
    let successName = false;
    let successEmail = false;
    let successPhone = false;
    let successSize = false;
    let successLimit = false;
    let successCount = false;
    let successAddress = false;
    let successChek = false;
    //обработка ошибок
    if (name === "") {
        let nameError = document.getElementById("nameError");
        nameError.style.display = "";
        nameError.innerHTML = "Это обязательное поле";
    } else {
        let nameError = document.getElementById("nameError");
        nameError.style.display = "none";
        successName = true;
    }
    if (email === "") {
        let emailError = document.getElementById("emailError");
        emailError.style.display = "";
        emailError.innerHTML = "Это обязательное поле";
    } else {
        let emailError = document.getElementById("emailError");
        emailError.style.display = "none";
        successEmail = true;
    }
    if (phone === "") {
        let phoneError = document.getElementById("phoneError");
        phoneError.style.display = "";
        phoneError.innerHTML = "Это обязательное поле";
    } else {
        let phoneError = document.getElementById("phoneError");
        phoneError.style.display = "none";
        successPhone = true;
    }
    if (size === "") {
        let sizeError = document.getElementById("sizeError");
        sizeError.style.display = "";
        sizeError.innerHTML = "Это обязательное поле";
    } else {
        let sizeError = document.getElementById("sizeError");
        sizeError.style.display = "none";
        successSize = true;
    }
    if (limit === "") {
        let limitError = document.getElementById("limitError");
        limitError.style.display = "";
        limitError.innerHTML = "Это обязательное поле";
    } else {
        let limitError = document.getElementById("limitError");
        limitError.style.display = "none";
        successLimit = true;
    }
    if (count === "") {
        let countError = document.getElementById("countError");
        countError.style.display = "";
        countError.innerHTML = "Это обязательное поле";
    } else {
        let countError = document.getElementById("countError");
        countError.style.display = "none";
        successCount = true;
    }
    if (address === "") {
        let addressError = document.getElementById("addressError");
        addressError.style.display = "";
        addressError.innerHTML = "Это обязательное поле";
    } else {
        let addressError = document.getElementById("addressError");
        addressError.style.display = "none";
        successAddress = true;
    }
    if (!chek) {
        let agreementError = document.getElementById("agreementError");
        agreementError.style.display = "";
        agreementError.innerHTML = "Не подтверждена обработка персональных данных";
    } else {
        let agreementError = document.getElementById("agreementError");
        agreementError.style.display = "none";
        successChek = true;
    }


    if (successName && successEmail && successPhone && successSize && successLimit && successCount && successAddress && successChek) {
        let captcha = grecaptcha.getResponse();
        let formContainer = document.getElementById("containerForm");
        let messageSuccess = document.getElementById("successMessage");


        if (!captcha.length) {
            $('#recaptchaError').text('* Вы не прошли проверку капчей');
        } else {
            $('#recaptchaError').text('');
            let $form = $("#mail-form");
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: {
                    'name': name,
                    'email': email,
                    'phone': phone,
                    'size': size,
                    'limit': limit,
                    'count-float': count,
                    'address': address,
                    'message': message,
                    'social': social
                },
                beforeSend: function () {
                    $("#submitEmail").prop('disabled', true);
                },
                success: function (data) {
                    if (!data) {
                        alert("Произошла ошибка");
                    } else {
                        document.querySelector('#containerForm').setAttribute("style", "display: none; transition: 1s;")
                        document.querySelector('#successMessage').setAttribute("style", "display: block")
                        window.scrollTo(0, 0)
                        $("#submitEmail").prop('disabled', false);
                    }
                }
            }).done(function () {
                console.log('good')
            });
        }
    }
});


//обработчики основных ошибок и
$("#name").blur(function () {
    const name = $("#name").val().trim();
    //обработчик ошибок
    const regexp = new RegExp(/[!@#$%^&*()_+\-=\[\]{};':"\\|,<>\/?]+/);
    const regexpNumber = new RegExp(/[0-9]/);
    if (name === ""){
        let nameError = document.getElementById("nameError");
        nameError.style.display = "";
        nameError.innerHTML = "Это обязательное поле";
    } else if (!isNaN(parseInt(name))) {
        let nameError = document.getElementById("nameError");
        nameError.style.display = "";
        nameError.innerHTML = "В имени не должно быть цифр";
    } else if (regexp.test(name)){
        let nameError = document.getElementById("nameError");
        nameError.style.display = "";
        nameError.innerHTML = "Пожалуйста не используйте специальные символы";
    } else if (regexpNumber.test(name)){
        let nameError = document.getElementById("nameError");
        nameError.style.display = "";
        nameError.innerHTML = "В имени не должно быть цифр";
    } else {
        let nameError = document.getElementById("nameError");
        nameError.style.display = "none";
    }
})

$("#email").blur(function () {
    const email = $("#email").val().trim();
    const rexexp = new RegExp(/@/);
    if (email === ""){
        let emailError = document.getElementById("emailError");
        emailError.style.display = "";
        emailError.innerHTML = "Это обязательное поле";
    } else if (!rexexp.test(email)) {
        let emailError = document.getElementById("emailError");
        emailError.style.display = "";
        emailError.innerHTML = "Несуществующая почта";
    } else {
        let emailError = document.getElementById("emailError");
        emailError.style.display = "none";
    }
})

$("#phone").blur(function () {
    const phone = $("#phone").val().trim();
    const regexpPhonePlus = new RegExp(/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/);
    if (phone === "") {
        let phoneError = document.getElementById("phoneError");
        phoneError.style.display = "";
        phoneError.innerHTML = "Это обязательное поле";
    } else if (!regexpPhonePlus.test(phone)) {
        let phoneError = document.getElementById("phoneError");
        phoneError.style.display = "";
        phoneError.innerHTML = "Некорректный номер телефона";
    } else {
        let phoneError = document.getElementById("phoneError");
        phoneError.style.display = "none";
    }
})

$("#size-float").blur(function (){
    const size = $("#size-float").val().trim();
    if (size === "") {
        let sizeError = document.getElementById("sizeError");
        sizeError.style.display = "";
        sizeError.innerHTML = "Это обязательное поле";
    } else {
        let sizeError = document.getElementById("sizeError");
        sizeError.style.display = "none";
    }
})

$("#limit-day").blur(function (){
    const limit = $("#limit-day").val().trim();
    if (limit === "") {
        let limitError = document.getElementById("limitError");
        limitError.style.display = "";
        limitError.innerHTML = "Это обязательное поле";
    } else {
        let limitError = document.getElementById("limitError");
        limitError.style.display = "none";
    }
})

$("#count-float").blur(function (){
    const count = $("#count-float").val().trim();
    if (count === "") {
        let countError = document.getElementById("countError");
        countError.style.display = "";
        countError.innerHTML = "Это обязательное поле";
    } else {
        let countError = document.getElementById("countError");
        countError.style.display = "none";
    }
})

$("#address").blur(function (){
    const address = $("#address").val().trim();
    if (address === "") {
        let addressError = document.getElementById("addressError");
        addressError.style.display = "";
        addressError.innerHTML = "Это обязательное поле";
    } else {
        let addressError = document.getElementById("addressError");
        addressError.style.display = "none";
    }
})