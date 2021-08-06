<!DOCTYPE html>
<html lang="zxx">

@include("part.head")

<body class="inner-pages hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    @include("part.header")
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    @yield("heading")

    <!-- END SECTION HEADINGS -->
@include("flash-message")
    <!-- START SECTION LOGIN -->
    @yield("content")
    <!-- END SECTION LOGIN -->

    <!-- START FOOTER -->
    @include("part.footer")

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- ARCHIVES JS -->
    @include("part.script")
    @yield("custom-script")

</div>
<!-- Wrapper / End -->
</body>
</html>
