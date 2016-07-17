
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstaert - Basic</title>
        <!-- Styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Task List
                </a>
            </nav>
        </div>
        @yield('content')
    </body>
</html>
