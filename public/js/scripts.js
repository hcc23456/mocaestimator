$(function formValidation() {
    $('#inputName').on('focusout', function(){
        checkName($('#inputName').val())
    });

    $('#inputCarMake').on('focusout', function(){
        checkCarMake($('#inputCarMake').val())
    });

    $('#inputCarModel').on('focusout', function(){
        checkCarModel($('#inputCarModel').val())
    });

    $('#inputCarYear').on('focusout', function(){
        checkCarYear($('#inputCarYear').val())
    });

    $('#inputAddress').on('focusout', function(){
        checkAddress($('#inputAddress').val())
    });

    $('#inputEmail').on('focusout', function(){
        checkEmail($('#inputEmail').val())
    });

    $('#inputPhoneNumber').on('focusout', function(){
        checkPhoneNumber($('#inputPhoneNumber').val())
    });

    function checkName(name) {
        if (name.match(/^[a-z ,.'-]+$/i))
            $("#nameForm p").text("");
        else
            $("#nameForm p").text("Name Not Valid").css({color:"Red"});
    }

    function checkCarMake(carMake) {
        if (carMake)
            $("#carMakeForm p").text("");
        else
            $("#carMakeForm p").text("Car Make Not Valid").css({color:"Red"});
    }

    function checkCarModel(carModel) {
        if (carModel)
            $("#carModelForm p").text("");
        else
            $("#carModelForm p").text("Car Model Not Valid").css({color:"Red"});
    }

    function checkCarYear(carYear) {
        if (carYear.match(/^\d{4}$/))
            $("#carYearForm p").text("");
        else
            $("#carYearForm p").text("Car Year Not Valid").css({color:"Red"});
    }

    function checkAddress(address) {
        if (address)
            $("#addressForm p").text("");
        else
            $("#addressForm p").text("Address Not Valid").css({color:"Red"});
    }

    function checkEmail(email) {
        if (email)
            $("#emailForm p").text("");
        else
            $("#emailForm p").text("Email Not Valid").css({color:"Red"});
    }

    function checkPhoneNumber(phoneNumber) {
        if (phoneNumber.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/))
            $("#phoneNumberForm p").text("");
        else
            $("#phoneNumberForm p").text("Phone Number Not Valid").css({color:"Red"});
    }
});

$(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {
        $navbar.collapse('hide');
    }
});

$(function() {

    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
    });

});

$(function scroll() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

$(document).ready(function($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                        $('.navbar-custom').addClass('is-visible');
                    } else {
                        $('.navbar-custom').removeClass('is-visible is-fixed');
                    }
                } else if (currentTop > this.previousTop) {
                    //if scrolling down...
                    $('.navbar-custom').removeClass('is-visible');
                    if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }
});
