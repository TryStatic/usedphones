<!doctype html>
<html class="no-js" lang="">
    

    @include ('layouts.partials._head') {{-- Seperating the head from the masterpage --}}


    <body>
        
        @include ('layouts.partials._outdatedbrowser')

        @include ('layouts.partials._navbar')


        <main class="main">
            <div id="maincointainer" class="container" style="padding-bottom: 25px">
                @include('layouts.partials._messages')
                @yield('maincontent')

            </div>
        </main>


        @include ('layouts.partials._footer')


        @include ('layouts.partials._scripts') {{-- Seperate pages might have individual scripts so these are the global ones --}}
        @yield('additional_scripts') {{-- So that an individual is able to provide additional scripts only for itself --}}



    </body>
</html>
