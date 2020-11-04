<!DOCTYPE html>
<html>

<head>
    @include('admin.elements.head')
</head>

<body style="max-height: 100vh;">
    <div class="container_12">
        {{-- top-nav --}}
        @include('admin.elements.top-nav')
        <div class="clear">
        </div>
        {{-- menu --}}
        @include('admin.elements.menu')
        <div class="clear">
        </div>
        {{-- sidebar --}}
        @include('admin.elements.sidebar')
        {{-- content --}}
        @yield('content')
        {{-- <div class="grid_10">
            <div class="box round first grid">
                <h2> Dashboard</h2>
                <div class="block">
                    Welcome admin panel
                </div>
            </div>
        </div> --}}
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    {{-- Copyright --}}
    @include('admin.elements.cp-right')
    {{-- script --}}
    @include('admin.elements.script')
</body>

</html>
