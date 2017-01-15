(function($) {

    // Add smooth scrolling to all links in navbar
    $(".navbar a,a.btn-appoint, .quick-info li a, .overlay-detail a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function() {
            window.location.hash = hash;
        });
    });

    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

})(jQuery);


$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='dform']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            gender: "required",
            race: "required",
            ethinicity: "required",
            pref_language: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            home_phone: {
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            cell_phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            work_phone: {
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            address1: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                digits: true,
                required: true,
            },

        },
        // Specify validation error messages
        messages: {
            gender: "Please select your gender",
            race: "Please select race",
            home_phone: {
                required: "Please provide a phone",
                minlength: "Your phone must be 10 digits long"
            },
            cell_phone: {
                digits: "Enter Digits Only",
                minlength: "Your phone must be 10 digits long",
                maxlength: "Phone No. cannot be long than 10 Digits"
            },
            work_phone: {
                digits: "Enter Digits Only",
                minlength: "Your phone must be 10 digits long"
            },

            email: "Please enter a valid email address",

            city: "Please Enter Your City",

            state: "Select Your State",

            zip: "Enter zip code"

        },

        errorClass: 'help-block col-lg-6',
        errorElement: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        },


        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });




});


$(function() {
    $('#checkbox1').click(function() {
        if ($(this).is(':checked')) {
            // $('#baddress1').val( $('#address1').val() );
            baddress1.value = address1.value;
            baddress2.value = address2.value;
            bcity.value = city.value;
            bstate.value = state.value;
            bzip.value = zip.value;
        } else {
            $('#baddress1').val("");
            $('#baddress2').val("");
            $('#bcity').val("");
            $('#bstate').val("");
            $('#bzip').val("");
        }

    });

    $('#checkbox2').click(function() {
        if ($(this).is(':checked')) {
            // $('#baddress1').val( $('#address1').val() );
            em1name.value = ename.value;
            em1address1.value = address1.value;
            em1address2.value = address2.value;
            em1city.value = city.value;
            em1state.value = state.value;
            em1zip.value = zip.value;
            em1home_phone.value = home_phone.value;
            em1work_phone.value = work_phone.value;
            em1cell_phone.value = cell_phone.value;

        } else {

            $('#em1address1').val("");
            $('#em1address2').val("");
            $('#em1city').val("");
            $('#em1state').val("");
            $('#em1zip').val("");
            $('#em1home_phone').val("");
            $('#em1work_phone').val("");
            $('#em1cell_phone').val("");
        }

    });

    $('#checkbox3').click(function() {
        if ($(this).is(':checked')) {
            // $('#baddress1').val( $('#address1').val() );
            em2name.value = ename.value;
            em2address1.value = address1.value;
            em2address2.value = address2.value;
            em2city.value = city.value;
            em2state.value = state.value;
            em2zip.value = zip.value;
            em2home_phone.value = home_phone.value;
            em2work_phone.value = work_phone.value;
            em2cell_phone.value = cell_phone.value;

        } else {

            $('#em2address1').val("");
            $('#em2address2').val("");
            $('#em2city').val("");
            $('#em2state').val("");
            $('#em2zip').val("");
            $('#em2home_phone').val("");
            $('#em2work_phone').val("");
            $('#em2cell_phone').val("");
        }

    });

    $('#checkbox4').click(function() {
        if ($(this).is(':checked')) {
            // $('#baddress1').val( $('#address1').val() );
            em3name.value = ename.value;
            em3address1.value = address1.value;
            em3address2.value = address2.value;
            em3city.value = city.value;
            em3state.value = state.value;
            em3zip.value = zip.value;
            em3home_phone.value = home_phone.value;
            em3work_phone.value = work_phone.value;
            em3cell_phone.value = cell_phone.value;

        } else {

            $('#em3address1').val("");
            $('#em3address2').val("");
            $('#em3city').val("");
            $('#em3state').val("");
            $('#em3zip').val("");
            $('#em3home_phone').val("");
            $('#em3work_phone').val("");
            $('#em3cell_phone').val("");
        }

    });

});