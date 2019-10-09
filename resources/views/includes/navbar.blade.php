<nav class="trident-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="trident-logo"><a href="/">Store</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="/index">Home</a></li>
                        <li class="has-dropdown"> <a href="/shop">Shop</a>
                            <ul class="dropdown">
                                <li><a href="/cart">Shopping Cart</a></li>
                                <li><a href="/order-complete">My Orders</a></li>
                                <li><a href="/add-to-wishlist">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <!--                        <li><a href="/cart"><i class="icon-shopping-cart"></i> Cart []</a></li>-->
                        <!-- Authentication Links -->@if(isset(Auth::user()->email))
                        <li class="nav-item dropdown"> <a href="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="{{url('/logout')}}">Logout</a> </div>
                        </li> @else
                        <li><a href="/login/default/0">Login</a></li>
                        <li><a href="/register">Register</a></li> @endif </ul>
                </div>
            </div>
        </div>
    </div>
</nav>