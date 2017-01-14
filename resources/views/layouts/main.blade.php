
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en">
<head>
    @include('elements.head')
    @yield('page_meta')
    @yield('page_styles')      
</head>

<body >
    <div class="wrap">

        @include('elements.nav')

        <div id="content">
            @yield('content')
        </div>
        <!-- End Content -->
        
        @include('elements.footer')
        <!-- End Footer -->

        <div class="wishlist-mask">
            <div class="wishlist-popup">
                <span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
                <p class="wishlist-alert">"Lucky shop Product" was added to wishlist</p>
                <div class="wishlist-button">
                    <a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a>
                    <a href="#">Go To Shopping Cart</a>
                </div>
            </div>
        </div>
        <a href="#" class="scroll-top radius"><i class="fa fa-angle-up" aria-hidden="true"></i></a>    
    </div> 
    <!-- BEGIN GLOBAL BODY-BOTTOM JS -->
    @include('elements.footer_scripts')

    <!-- BEGIN GLOBAL PAGE SCRIPTS -->
    @yield('page_scripts')

    <script type="text/javascript">
    $( document ).ready(function() {
        @yield('onReady_Scripts')     
    });
    </script>
</body>
</html>