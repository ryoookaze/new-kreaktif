$(document).ready(function() { 
        $(window).scroll(function() {
            if($(this).scrollTop() > 500) { 
                $('.navigation-bar').addClass('solid');
                $('.bar').addClass('solid');
            } else if($(this).scrollTop) {
                $('.navigation-bar').removeClass('solid');
                $('.bar').removeClass('solid');
            }
        });
        $(".menu").click(function() {
            $('menu', $(this).parent()).removeClass('active');
            $(this).addClass('active');
        })
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
});