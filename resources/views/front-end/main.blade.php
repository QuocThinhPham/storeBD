<!DOCTYPE HTML>

<head>
    @include('front-end.elements.head', ['title' => 'Store Website'])
</head>

<body>
    <div class="wrap">
        @include('front-end.elements.header-top')
        @include('front-end.elements.menu')
        @include('front-end.elements.header-bottom')

        <div class="main">
            @yield('content')
        </div>
    </div>
    @include('front-end.elements.footer')

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>

    @include('front-end.elements.script')
</body>

</html>
