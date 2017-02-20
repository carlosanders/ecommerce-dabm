<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @section('navbar-brand')
                <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
            @show
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ isActiveURL('/') }}">
                    <a href="/" class="smoothScroll">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        {{ trans('adminlte_lang::message.home') }}
                    </a>
                </li>
                <li class="{{ isActiveURL('/all') }}">
                    <a href="{{ url('/all') }}" class="smoothScroll">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                        Andaina
                    </a>
                </li>
                <li>
                    <a href="#" class="smoothScroll">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        Contato
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ set_active('wishlist') }}">
                    <a href="{{ url('/wishlist') }}">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        Wishlist
                        @if(Cart::instance('wishlist')->count(false) > 0)
                            <span class="badge">{{ Cart::instance('wishlist')->count(false) }}</span>
                        @endif
                    </a>
                </li>
                <li class="{{ set_active('cart') }}">
                    <a href="{{ url('/cart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Carrinho
                        @if(Cart::instance('default')->count(false) > 0)
                            <span class="badge">{{ Cart::instance('default')->count(false) }}</span>
                        @endif
                    </a>
                </li>
                @if (Auth::guest())
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            {{ trans('adminlte_lang::message.login') }}
                        </a>
                    </li>
                @else
                    <li>
                        <a href="/user/home">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
