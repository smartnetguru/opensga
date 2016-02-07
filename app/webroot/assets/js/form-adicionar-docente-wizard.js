var FormWizard = function () {
    var wizardContent = $('#wizard');
    var wizardForm = $('#formAlumniCandidatoAlumni');
    var initWizard = function () {
        // function to initiate Wizard Form
        wizardContent.smartWizard({
            selected: 0,
            keyNavigation: false,
            onLeaveStep: leaveAStepCallback,
            onShowStep: onShowStep,
        });
        var numberOfSteps = 0;
        animateBar();
        initValidator();
    };
    var animateBar = function (val) {
        if ((typeof val == 'undefined') || val == "") {
            val = 1;
        }
        ;
        numberOfSteps = $('.swMain > ul > li').length;
        var valueNow = Math.floor(100 / numberOfSteps * val);
        $('.step-bar').css('width', valueNow + '%');
    };
    var initValidator = function () {
        $.validator.setDefaults({
            debug: true,
            errorElement: "span", // contain the error msg in a span tag
            errorClass: 'help-block',
            errorPlacement: function (error, element) { // render error placement for each input type
                if (element.attr("type") == "radio" || element.attr("type") == "checkbox") { // for chosen elements, need to insert the error after the chosen container
                    error.insertAfter($(element).closest('.form-group').children('div').children().last());
                } else if (element.attr("name") == "card_expiry_mm" || element.attr("name") == "card_expiry_yyyy") {
                    error.appendTo($(element).closest('.form-group').children('div'));
                } else {
                    error.insertAfter(element);
                    // for other inputs, just perform default behavior
                }
            },
            ignore: ':hidden',
            highlight: function (element) {
                $(element).closest('.help-block').removeClass('valid');
                // display OK icon
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error').find('.symbol').removeClass('ok').addClass('required');
                // add the Bootstrap error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error');
                // set error class to the control group
            },
            success: function (label, element) {
                label.addClass('help-block valid');
                // mark the current input as valid and display OK icon
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success').find('.symbol').removeClass('required').addClass('ok');
            }
        });
        $.extend($.validator.messages, {
            required: "Este Campo é de preenchimento  obrigatório.",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, introduza um endereço de email válido",
            url: "Por favor introduza uma URL válida.",
            date: "Por favor introduza uma data válida.",
            dateISO: "Por favor introduza uma data válida (ISO).",
            number: "Por favor introduza um número válido.",
            digits: "Por favor introduza apenas dígitos.",
            creditcard: "Por favor introduza um cartão de crédito válido.",
            equalTo: "Por favor introduza o mesmo valor novamente.",
            accept: "Please enter a value with a valid extension.",
            maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
            minlength: jQuery.validator.format("Please enter at least {0} characters."),
            rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
            range: jQuery.validator.format("Please enter a value between {0} and {1}."),
            max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
            min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
        });

    };
    var displayConfirm = function () {
        $('.display-value', formAlumniCandidatoAlumni).each(function () {
            var input = $('[name="' + $(this).attr("data-display") + '"]', formAlumniCandidatoAlumni);
            if (input.attr("type") == "text" || input.attr("type") == "email" || input.is("textarea")) {
                $(this).html(input.val());
            } else if (input.is("select")) {
                $(this).html(input.find('option:selected').text());
            } else if (input.is(":radio") || input.is(":checkbox")) {
                $(this).html(input.filter(":checked").parent('label').text());
            } else if ($(this).attr("data-display") == 'card_expiry') {
                $(this).html($('[name="card_expiry_mm"]', formAlumniCandidatoAlumni).val() + '/' + $('[name="card_expiry_yyyy"]', formAlumniCandidatoAlumni).val());
            }
        });
    };
    var onShowStep = function (obj, context) {
        $(".next-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goForward");
        });
        $(".back-step").unbind("click").click(function (e) {
            e.preventDefault();
            wizardContent.smartWizard("goBackward");
        });
        $(".finish-step").unbind("click").click(function (e) {
            e.preventDefault();
            onFinish(obj, context);
        });
    };
    var leaveAStepCallback = function (obj, context) {
        return validateSteps(context.fromStep, context.toStep);
        // return false to stay on step and true to continue navigation
    };
    var onFinish = function (obj, context) {
        if (validateAllSteps()) {
            $('.anchor').children("li").last().children("a").removeClass('selected').addClass('done');
            formAlumniCandidatoAlumni.submit();
        }
    };
    var validateSteps = function (stepnumber, nextstep) {
        var isStepValid = false;
        if (numberOfSteps !== nextstep) {
            // cache the form element selector
            if (wizardForm.valid()) { // validate the form
                wizardForm.validate({
                    messages: {
                        apelido: {
                            required: 'Enter this!'
                        }
                    }
                }).focusInvalid();
                //focus the invalid fields
                animateBar(nextstep);
                isStepValid = true;
                return true;
            }
            ;
        } else {
            displayConfirm();
            animateBar(nextstep);
            return true;
        }
        ;
    };
    var validateAllSteps = function () {
        var isStepValid = true;
        // all step validation logic
        return isStepValid;
    };
    return {
        init: function () {
            initWizard();
        }
    };
}();