<!-- ARCHIVES JS -->
<script src="{{asset("js/jquery-3.5.1.min.js")}}"></script>
<script src="{{asset("js/rangeSlider.js")}}"></script>
<script src="{{asset("js/tether.min.js")}}"></script>
<script src="{{asset("js/moment.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/mmenu.min.js")}}"></script>
<script src="{{asset("js/mmenu.js")}}"></script>
<script src="{{asset("js/aos.js")}}"></script>
<script src="{{asset("js/aos2.js")}}"></script>
<script src="{{asset("js/slick.min.js")}}"></script>
<script src="{{asset("js/fitvids.js")}}"></script>
<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("js/typed.min.js")}}"></script>
<script src="{{asset("js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("js/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("js/smooth-scroll.min.js")}}"></script>
<script src="{{asset("js/lightcase.js")}}"></script>
<script src="{{asset("js/search.js")}}"></script>
<script src="{{asset("js/owl.carousel.js")}}"></script>
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("js/ajaxchimp.min.js")}}"></script>
<script src="{{asset("js/newsletter.js")}}"></script>
<script src="{{asset("js/jquery.form.js")}}"></script>
<script src="{{asset("js/jquery.validate.min.js")}}"></script>
<script src="{{asset("js/searched.js")}}"></script>
<script src="{{asset("js/forms-2.js")}}"></script>
<script src="{{asset("js/leaflet.js")}}"></script>
<script src="{{asset("js/leaflet-gesture-handling.min.js")}}"></script>
<script src="{{asset("js/leaflet-providers.js")}}"></script>
<script src="{{asset("js/leaflet.markercluster.js")}}"></script>
<script src="{{asset("js/map-style2.js")}}"></script>
<script src="{{asset("js/range.js")}}"></script>
<script src="{{asset("js/color-switcher.js")}}"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="{{asset("revolution/js/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{asset("revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.carousel.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script src="{{asset("revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });

</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });

</script>

<script>
    $(".dropdown-filter").on('click', function() {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });

</script>

<!-- MAIN JS -->
<script src="{{asset("js/script.js")}}"></script>
