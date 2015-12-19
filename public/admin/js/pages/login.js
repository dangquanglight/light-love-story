/*
 *  Document   : login.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Login page
 */

var Login = function () {
    return {
        init: function () {
            var formLogin = $('#form-login');

            /*
             *  Jquery Validation, Check out more examples and documentation at
             *  https://github.com/jzaefferer/jquery-validation
             */

            /* Login form - Initialize Validation */
            formLogin.validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'username': {
                        required: true
                    },
                    'password': {
                        required: true
                    }
                }
            });
        }
    };
}();