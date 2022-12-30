<div class='navbar-container'>
    <div class='navbar-wrapper'>

        <div class='navbar-left'>
        <a href="/">
            <span class="navbar-logo">Beauty</span>
        </a>
        </div>

        <div class='navbar-center'>
            @auth
                <div class='navbar-center-item'>
                    {{strtoupper(auth()->user()->name)}}
                </div>
                <a href="{{route('orders.index')}}" class='navbar-center-item' style="text-decoration:none">MY ORDERS</a>
            @endauth
        </div>

        <div class='navbar-right-item'>
            @guest
                <div  class='navbar-right'>
                    <a href="/register">
                        <div class='navbar-right-item signup'>Register</div>
                    </a>
                    <a href="/login">
                        <div class='navbar-right-item signin'>Login</div>
                    </a>
                </div>
            @endguest
            @auth
            <div  class='navbar-right'>
                <form action="/logout" method="POST">
                    @csrf
                      <button class="auth-link">DISCONNECT</button>
                </form>
                <div class="cart-icon">
                    <a href="{{route('cart.list')}}" style="color:black">
                        <x-bi-cart-fill width="35" height="35" style="margin-bottom:5px"/>
                    </a>
                    @livewire('navbar-cart')
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
