<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body class="sb-nav-fixed" style="@yield('back')" >
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
           @include('includes.navbar')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                  @include('includes.sidbar')
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                     @yield('content')        
                </main>
                <footer class="py-4 bg-light mt-auto">
                  @yield('footer')
                </footer>
            </div>
        </div>

        @include('includes.scripts')
        
    </body>
</html>
