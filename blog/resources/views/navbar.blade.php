<div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
               
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock"></i>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/userprofile">
                                    {{ Auth::user()->name }}
                                </a>

                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                  
              </ul>
            </div>