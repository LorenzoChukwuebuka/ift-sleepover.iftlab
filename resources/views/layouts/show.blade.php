
<!DOCTYPE html>
<html lang="zxx">

@include("part.head")

<body class="inner-pages sin-1 hd-white">
<!-- Wrapper -->
<div id="wrapper">

    @include("part.header")

    <div class="clearfix"></div>


    @yield("content")



    @include("part.footer")
    @include("part.script")
    @yield("custom-script")

</div>
<!-- Wrapper / End -->
</body>

</html>
