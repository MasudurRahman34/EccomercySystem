		<nav class="navbar navbar-expand-lg navbar-light bg-success ">
      <div class="container ">
        <a class="navbar-brand text-white" href="{{ route('products') }}">NIRBAN TRADING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto" >
            
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('products') }}">Product</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ route('Contact') }}">Product</a>
            </li> --}}
            
            <li class="nav-item">
              <a class="nav-link text-white" href="#">About US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Contact US</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <form class="form-inline my-2 my-lg-0" action="{{route('product.search') }}" method="get">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                <div class="input-group mb-3 search">
                  <input type="text" class="form-control" type="search" name="search" placeholder="search product" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append bg-dark">
                    <button class="btn btn-outline-warning" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                 </div>
                </div>
              </form>
                  
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li class="nav-item" ><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Register</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li class="">
                              <a class="text-dark" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>    
        </div>
      </div>
</nav>