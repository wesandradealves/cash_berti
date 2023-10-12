(function ($) {
    $(window).on("load", function () {
        let $this = $(this);

        // if(window.location.search) {
        //     let parameters = window.location.search.split("?")[1].split("&");
        //     if(parameters.find((p) => p.indexOf("'p=post'"))) {
        //         setTimeout(function () {
        //             document.getElementById('blog').scrollIntoView({behavior: "smooth", block: "center"});
        //         }, 500);                
        //     }
        // }

        Inputmask({regex: "[A-Z a-z]*"}).mask($('[name*="nome"]'));

        function MTel(v) {
            v = v.replace(/\D/g, ""); // Remove tudo o que não é dígito
            v = v.replace(/(\d{2})(\d)/, "($1) $2") // Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d{3})(\d{1,4})$/, "$1-$2") // Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function Mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout(execmascara, 1)
        }['keydown', 'keypress', 'keyup'].forEach(event => {
            $('[name*="telefone"]').on(event, function () {
                Mascara(this, MTel);
            });
        });

        $( ".faq-item" ).on( "click", ".title", function(e) {
            $(this).toggleClass('active'),
            $(this).find('.fa-solid').toggleClass('fa-plus fa-minus'),
            $(this).next().toggleClass('d-block d-none');
        });	
        
        $('.item-carousel .items').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000,            
            speed: 300,
            mobileFirst: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 0,
            adaptiveHeight: false,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
                },                
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]                 
        });

        $('.latest-posts .posts').slick({
            dots: false,
            infinite: true,
            // autoplay: true,
            autoplaySpeed: 5000,            
            speed: 300,
            mobileFirst: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 0,
            adaptiveHeight: false,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
                },                
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]                 
        });        
        
        // -

        $(this).scrollTop(0),
        $('body').removeClass('d-none');

        $("body").on("click", ".hamburger", function (e) {
            $('.header').toggleClass('is-active');
            $('.hamburger, .navigation.mobile').toggleClass('is-active');
        });

        $("header").before($("header").clone(true).addClass("sticky"));

        $(window).on("scroll", function () {
            $(".sticky").toggleClass("stuck", ($(window).scrollTop() > 49));
            $(".is-active").removeClass('is-active')
            if ($(window).scrollTop() > 49) {
                $("header:not(.sticky").addClass('hidden')
            } else {
                $("header:not(.sticky").removeClass('hidden')
            }
        });

        let events = ['scroll', 'resize'];

        events.forEach(event => {
            $(window).on(event, function () {
                $(".is-active").removeClass('is-active')
            });
        });

        $("body").on("click", ".yu2fvl", function (e) {
            $.yu2fvl({vid: e.target.dataset.id, open: true});
        });

        setTimeout(function () {
            if (sessionStorage.getItem('name') !== "whatsappIconMessage") {
                $('.whatsapp-icon-message').addClass('active');
            }
        }, 12000);

        $('.whatsapp-icon-message-close').click(function () {
            sessionStorage.setItem('name', 'whatsappIconMessage');
            $('.whatsapp-icon-message').removeClass('active');
        });

        setTimeout(function () {
            $('#module-whatsapp').css('visibility', 'visible');
        }, 2000);

        $('.whatsapp-btn, [href*="https://api.whatsapp.com"]').click(function (e) {
            e.preventDefault();

            if ($('.whatsapp-btn').hasClass('active')) {
                $('.whatsapp-btn').addClass('not-active');
                $('.whatsapp-btn').removeClass('active');
                $('#module-whatsapp-container').removeClass('active');
                setTimeout(function () {
                    if (sessionStorage.getItem('name') !== "whatsappIconMessage") {
                        $('.whatsapp-icon-message').addClass('active');
                    }
                }, 2000);
            } else {
                $('.whatsapp-btn').addClass('active');
                $('.whatsapp-btn').removeClass('not-active');
                $('#module-whatsapp-container').addClass('active');
                $('.whatsapp-icon-message').removeClass('active');
            }
        });

        setTimeout(function () {
            $('#module-whatsapp').css('visibility', 'visible');
        }, 2000);

        var disableSubmit = false;

        jQuery('button.module-whatsapp-content-form-button').click(function () {
            jQuery('button.module-whatsapp-content-form-button').addClass("disabled");
            jQuery('button.module-whatsapp-content-form-button').text('INICIANDO...');
            if (disableSubmit == true) {
                return false;
            }
            disableSubmit = true;
            return true;
        })

        document.addEventListener('wpcf7submit', function (event) {
            jQuery('#' + event.detail.unitTag + ' button.module-whatsapp-content-form-button').removeClass("disabled");
            jQuery('#' + event.detail.unitTag + ' button.module-whatsapp-content-form-button').text('INICIAR CONVERSA');
            disableSubmit = false;
        }, false);
    });
})(jQuery);