$(document).ready(function () {
    let DOMAIN = "http://localhost/webalizer/SystInvent/public";
    $("#register_form").on("submit", function(){
        let status   = false;
        let name     = $("#username");
        let lastname = $("#lastname");
        let email    = $("#email");
        let pass1    = $("#password1");
        let pass2    = $("#password2");
        let role     = $("#role");
       // var n_patt   = new RegExp(/^[A-Za-z ]+$/);
        let e_patt   = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        //Name control
        if(name.val() == ""){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'> Entrer le nom.</span>");
            status = false;
        }else if (name.val().length < 6){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Le nom doit avoir au moins 6 caracteres</span>");
            status = false;
        }else{
            name.removeClass("border-danger");
            $("#u_error").html("");
            status = true;
        }

        //Email control
        if(email.val() == ""){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'> Veuiller saisir une adresse email</span>");
            status = false;
        }else if(!e_patt.test(email.val())){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'> Veuiller saisir une adresse email valide</span>");
            status = false;
        }else{
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true;
        }

        //Password control
        if(pass1.val() == ""){
            pass1.addClass("border-danger");
            $("#p1_error").html("<span class='text-danger'>Veuiller saisir le mot de passe.</span>");
            status = false;
        }else if (pass1.val().length < 9){
            pass1.addClass("border-danger");
            $("#p1_error").html("<span class='text-danger'>Le mot de passe doit avoir au moins 9 caracteres</span>");
            status = false;
        }else{
            pass1.removeClass("border-danger");
            $("#p1_error").html("");
            status = true;
        }

        //Password2 control
        if(pass2.val() == ""){
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Veuiller saisir le mot de passe.</span>");
            status = false;
        }else if (pass2.val().length < 9){
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Le mot de passe doit avoir au moins 9 caracteres</span>");
            status = false;
        }else{
            pass2.removeClass("border-danger");
            $("#p2_error").html("");
            status = true;
        }

        //Password matched
        if((pass1.val() == pass2.val()) && status == true){
            //Loader
            $(".overlay").show();
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#register_form").serialize(),
                success : function (data) {
                    if(data == "EMAIL_ALREADY_EXISTS"){
                        //Loader
                        $(".overlay").hide();
                        alert("It seems like you email is already used");
                    }else if(data == "SOME_ERROR" ){
                        //Loader
                        $(".overlay").hide();
                        alert("Something wrong");
                    }else{
                        //Loader
                        $(".overlay").hide();
                        window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered now you can login.");
                    }
                }
            })
        }else{
            pass2.addClass("border-danger");
            $("#p2_error").html("<span class='text-danger'>Pasword is not matched</span>");
            status = false;
        }


        //Role control
        if(role.val() == ""){
            role.addClass("border-danger");
            $("#r_error").html("<span class='text-danger'>Veuiller choisir le role de l'utilisateur</span>");
            status = false;
        }else{
            role.removeClass("border-danger");
            $("#r_error").html("");
            status = true;
        }
    })

    //for login part

    $("#login_form").on("submit", function() {
        let status = false;
        let email = $("#log_email");
        let pass = $("#log_password");

        //Email control
        if(email.val() == ""){
            email.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'> Veuiller saisir une adresse email</span>");
            status = false;
        }else{
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true;
        }

        //Password control
        if(pass.val() == ""){
            pass.addClass("border-danger");
            $("#p_error").html("<span class='text-danger'> Veuiller saisir votre mot de passe</span>");
            status = false;
        }else{
            pass.removeClass("border-danger");
            $("#p_error").html("");
            status = true;
        }

        if (status){
            $.ajax({
                url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $("#login_form").serialize(),
                success : function (data) {
                    if(data == "NOT_REGISTERED"){
                        //Loader
                        $(".overlay").hide();
                        email.addClass("border-danger");
                        $("#e_error").html("<span class='text-danger'>It seems like you are not registered</span>");
                    }else if(data == "PASSWORD_NOT_MATCHED" ){
                        //Loader
                        $(".overlay").hide();
                        email.addClass("border-danger");
                        $("#p_error").html("<span class='text-danger'>Saisir un mot de passe correct</span>");
                        status = false;
                    }else{
                        //Loader
                        $(".overlay").show();
                        //window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered now you can login.");
                        console.log(data);
                       window.location.href = DOMAIN+"/dashboard.php";
                    }
                }
            })
        }
    })

    //Fetch category
    fetch_category();
    function fetch_category() {
        $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : {getCategory:1},
            success : function (data) {
                let root = "<option value='0'>Root</option>";
                $("#parent_cat").html(root+data);
            }
        })
    }


});