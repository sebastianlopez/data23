
    $(document).ready(function() {

        $("#btn-submit-email").on("click", function(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf', {action: 'form_ingreso'}).then(function(token) {
                    formLogin(token);
                });
            });
        });

        function formLogin(token){
            var _token = $("input[name='_token']").val();
            var password = $("input[name='password']").val();
            var email = $("input[name='email']").val();
            var empresa = $("input[name='empresa']").val();
            var loginIsOld = $("input[name='loginIsOld']").val();
            var urlServer = $("#_url").val();

            urlServer = helperBuildURL();

            var pay = false;

            if(getParameterByName('pay')){
                var pay = true;
            }
            $.ajax({
                url: urlServer+'loginCrm',
                type:'POST',
                data: {_token:_token, tokenreCAPTCHA: token, email:email, empresa:empresa, password:password, email:email, loginIsOld: loginIsOld, pay:pay},
                beforeSend: function() {
                    $("#btn-submit-email").attr("disabled", true);
                },
                success: function(data) {
                    if(!$.isEmptyObject(data.resultMsg)){
                        if (typeof data.resultMsg == 'string') {
                            $('#idMsgServe').text(data.resultMsg);
                        }else{
                            $.each(data.resultMsg, function(key, msg) {
                                $('#idMsgServe').text(msg);
                            });
                        }
                    }

                    if (typeof data.error == 'number') {
                        $('.company').css('display', 'block');
                    }

                    if(!$.isEmptyObject(data.redirect)){
                        window.location.href = data.redirect;
                    }
                    
                    if(!$.isEmptyObject(data.result)){
                        if(data.success == "false"){
                            $('#modalVerificationEmail').find('.usersEmail').val(data.result.users);
                            $('#modalVerificationEmail').find('.crmsEmail').val(data.result.crms);
                            $('#modalVerificationEmail').find('.emailEmail').val(data.result.email);
                            $('#modalVerificationEmail').find('.loginEmail').val(data.result.login);
                            $('#modalVerificationEmail').modal({
                                backdrop: 'static',
                                keyboard: false, 
                                show: true
                            });
                        }else{

                        }
                    }
                    $("#btn-submit-email").attr("disabled", false);
                }
            });
        }


        $(".verificationEmailSent").click(function(e){
            e.preventDefault();
            var button = $(this);
            button.attr('disabled', true);
            var users = $('#modalVerificationEmail').find('.usersEmail').val();
            var crms = $('#modalVerificationEmail').find('.crmsEmail').val();
            var loginEmail = $('#modalVerificationEmail').find('.loginEmail').val();
            var email = $("input[name='emailVerification']").val();
            var phone = $("input[name='phoneVerification']").val();
            var _token = $('#modalVerificationEmail #_token').val();
            var urlServer = $("#_url").val();
            
            urlServer = helperBuildURL();

            $.ajax({
                url: urlServer+'verificationEmailSent',
                type:'POST',
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                data: {_token:_token, emailVerification:email, loginEmail: loginEmail, users:users, crms:crms, phoneVerification:phone},
                success: function(data) {

                    if(!$.isEmptyObject(data.idMsgEmail)){
                        if (typeof data.idMsgEmail == 'string') {
                            $('#idMsgEmail').text(data.idMsgEmail);
                        }else{
                            $.each(data.idMsgEmail, function(key, msg) {
                                $('#idMsgEmail').text(msg);
                            });
                        }
                    }
                    
                    if(!$.isEmptyObject(data.result)){
                        if(data.success){
                            $('#modalVerificationEmail').modal('hide');
                            $('.msgDatacrm').text(data.result)
                            $('#msgSentEmail').modal({
                                show: true,
                                backdrop: 'static',
                                keyboard: false
                            });
                        }else{
                            $('#modalVerificationEmail').modal('hide');
                            $('.msgDatacrm').text(data.result)
                            $('#msgSentEmail').modal({
                                show: true,
                                backdrop: 'static',
                                keyboard: false
                            });
                        }

                        window.setTimeout(function () {
                            $("#msgSentEmail").modal("hide");
                        }, 20000);
                        
                    }
                },complete: function (){
                    button.attr('disabled', false);
                }
            });
        }); 

        $("#formRecoverPass").click(function(e){
            e.preventDefault();
            var button = $(this);
            button.attr('disabled', true);
            var _token = $("#formRequestPass input[name='_token']").val();
            var email = $("input[name='emailPassword']").val();
            var urlServer = $("#_url").val();
            
            urlServer = helperBuildURL();

            $.ajax({
                url: urlServer+'recoverPasswordFromWebsite',
                type:'POST',
                data: {_token:_token, email:email},
                success: function(data) {

                    if(!$.isEmptyObject(data.sendEmail)){
                        if (typeof data.sendEmail == 'string') {
                            $('#idMsgRecover').text(data.sendEmail);
                        }else{
                            $.each(data.sendEmail, function(key, msg) {
                                $('#idMsgRecover').text(msg);
                            });
                        }
                    }

                    if(!$.isEmptyObject(data.result)){
                        if(data.success == "false"){
                            $('#modalVerificationEmail').find('.usersEmail').val(data.result.users);
                            $('#modalVerificationEmail').find('.crmsEmail').val(data.result.crms);
                            $('#modalVerificationEmail').find('.emailEmail').val(data.result.email);
                            $('#modalVerificationEmail').find('.loginEmail').val(data.result.login);
                            $('#modalVerificationEmail').modal({
                                backdrop: 'static',
                                keyboard: false, 
                                show: true
                            });
                        }else{
                        }
                    }

                    if(!$.isEmptyObject(data.resultMsg)){
                        if (typeof data.resultMsg == 'string') {
                            $('#idMsgRecover').text(data.resultMsg);
                        }else{
                            $.each(data.resultMsg, function(key, msg) {
                                $('#idMsgRecover').text(msg);
                            });
                        }
                    }

                },complete: function (){
                    button.attr('disabled', false);
                }
            });
        }); 

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    });


