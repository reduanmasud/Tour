
@php 

$site_settings = DB::table('site_settings')->first();

@endphp

<div class="header">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="header__top">
                    
                       <div class="socials">
                           <a href="#" class="a facebook"></a>
                           <a href="#" class="a instagram"></a>
                           <a href="#" class="a pinterest"></a>
                           <a href="#" class="a twitter"></a>
                       </div>
                   </div>
                   <div class="header__bottom">
                       <a href="{{url('/')}}" class="logo"><img src="{{ asset('/storage/' . $site_settings->site_image) }}" alt=""></a>
                       <div class="menu" id="js-menu">
                           <div class="close"></div>
                           <div class="scroll">
                               <a class="current">Home</a>
                               <div class="scroll_wrap">
                                   <ul>
                                   <li ><a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page">Home</a></li>
            <li ><a href="{{ route('browse.all') }}" class="nav-link {{ Request::routeIs('browse.all') ? 'active' : '' }}">Browse</a></li>
            <li ><a href="{{ route('contact.us') }}" class="nav-link {{ Request::routeIs('contact.us') ? 'active' : '' }}">Contact us</a></li>
            @auth
                <li ><a href="{{route('account.tour.add')}}" class="nav-link {{ Request::routeIs('account.*') ? 'active' : '' }}">Dashboard</a></li>
                <li >
                <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                    </form>
                </li>
            @else
                <li ><a href="{{route('user.login')}}" class="nav-link">Login</a></li>
                <li ><a href="{{route('user.signup')}}" class="nav-link">Registration</a></li>
            @endauth
                                    
                                   </ul>
                               </div>
                               <div class="bottom">
                                   <div class="tel">
                                       <a href="tel:+11235678910">+1 1235 6789 10</a>
                                   </div>
                                   <div class="email">
                                       <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                   </div>
                                   <div class="socials">
                                       <div class="links">
                                            <a href="#" class="fb"></a>
                                            <a href="#" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="#" class="twitter"></a>
                                        </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mobile_btn" id="mobile_btn">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </div>
               </div>
           </div>
       </div>