<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>
        Website 1
        </title>
    </head>
    <body>
        @include('includes.navbar')
        @if(Request::is('/'))
            @include('includes.jumbotron')
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('includes.messages')
                    @yield('content')
                
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('includes.sidebar')
                
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>