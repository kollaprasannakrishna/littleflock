<!DOCTYPE html>
<html lang="en">
<head>
    @include('controlPanel.partials._header')
    @yield('styles')
</head>
<body>
        @include('controlPanel.partials._nav')
        @include('controlPanel.partials.message')
        @yield('content')

        @include('controlPanel.partials.scripts')
        @yield('scripts')
</body>
</html>
