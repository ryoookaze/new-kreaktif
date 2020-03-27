$(document).ready(function() { 
        $(window).scroll(function() {
            if($(this).scrollTop() > 100) { 
                $('.navigation-bar').addClass('solid');
                $('.bar').addClass('solid');
            } else if($(this).scrollTop) {
                $('.navigation-bar').removeClass('solid');
                $('.bar').removeClass('solid');
            } else if($('.contact-us').scrollTop > 10) {
                $('.bar').addClass('solid');
            }
        });
        $(".menu").click(function() {
            $('menu', $(this).parent()).removeClass('active');
            $(this).addClass('active');
        })
        $(".menu-toggle").click(function(e){
            e.preventDefault();
            $(".navbar-mobile-menu").css({"width": "100%"});
        })
        $(".close-button").click(function(e) {
            e.preventDefault();
            $(".navbar-mobile-menu").css({"width": "0"});
        })
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
});