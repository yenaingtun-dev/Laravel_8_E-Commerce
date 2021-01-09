  <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="/">P&S</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
         <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="/">Home </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/shop">Shop</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#footer">About</a>
             </li>
             <li class="nav-item">
                 <a href="{{ route('cart') }}" class="nav-link mr-2">
                     <i class="fa fa-shopping-cart" aria-hidden="true">
                         @if(Cart::instance('default')->count() > 0)
                             <span
                                 class="text-rerd">{{ Cart::instance('default')->count() }}</span>
                         @endif
                     </i>
                 </a>
             </li>
             <!-- Authentication Links -->
             @guest
                 @if(Route::has('login'))
                     <li class="nav-item">
                         <a class="nav-link"
                             href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                 @endif

                 @if(Route::has('register'))
                     <li class="nav-item">
                         <a class="nav-link"
                             href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif
             @else
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                             class="d-none">
                             @csrf
                         </form>
                     </div>
                 </li>
             @endguest
         </ul>
     </div>
 </nav>
 