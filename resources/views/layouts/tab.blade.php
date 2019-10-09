<!DOCTYPE HTML>
<html> @include('includes.head')

<body>
    <div class="trident-loader"></div>
    <div id="page"> @include('includes.navbar') @include('includes.aside-pages') @yield('content') @include('includes.footer') </div>
</body> @include('includes.foot')

</html>