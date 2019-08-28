<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- App URL -->
    <meta id="app-url" name="app-url" content="{{ url('/') }}"/>

    <title>CRUD </title>

    <!-- Styles -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/toastr.min.css') }}">

    @yield('styles')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    CRUD
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>


            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ route('products') }}">Products</a></li>
                    <li class="list-group-item"><a href="{{ route('suppliers') }}">Suppliers</a></li>
                    <li class="list-group-item"><a href="{{ route('orders') }}">Orders</a></li>
                </ul>
            </div>

            <div class="col-lg-8">


                @yield('content')
            </div>
        </div>
    </div>


</div>

<!-- Scripts -->
<script src="{{ url('/js/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('/js/toastr.min.js') }}"></script>
<!--Vue-->
<script src="{{ url('/js/vue/vue.js') }}"></script>{{----}}

<!--httpVueLoader-->
<script src="{{ url('/js/vue/httpVueLoader.min.js') }}"></script> {{-- Loads VueJS Single File Components at /js/vue/components --}}
<!--Axios-->
<script src="{{ url('/js/vue/axios.min.js') }}"></script>

<!--Main Script-->
<script src="{{ url('/js/vue/main.js') }}"></script>

@yield('scripts')

</body>
</html>
