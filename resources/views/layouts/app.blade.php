<!DOCTYPE html>
<html> 
@include('includes.head')
<body>
    <div class="trident-loader"></div>
    <div id="page"> 
        @include('includes.navbar') 
        @yield('content') 
        @include('includes.footer') 
    </div>
</body> 
        @include('includes.foot')
</html>