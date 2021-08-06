
<!DOCTYPE html>
<html lang="zxx">
@include("part.head")

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    @include("part.header")
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- STAR HEADER SEARCH -->
    @yield("heading")
    <!-- END HEADER SEARCH -->

@include("flash-message")
    @yield("content")

    @include("part.footer")


    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    @include("part.script")
    @yield("custom-script")

</div>
<!-- Wrapper / End -->
</body>

</html>
