<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>@yield('title')</title>

        @include('Components.css')
    
    </head>
    <body>
        <div id="page">
            <!---header top---->
                @include('Components/headBar')
            <!--header--->

            {{-- Navbar --}}
                @include('Components/navbar')
            {{-- End Navbar --}}


            <!--end-->
            @yield('content')

            <!---footer--->
                @include('Components.footer')

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
    </body>
</html>