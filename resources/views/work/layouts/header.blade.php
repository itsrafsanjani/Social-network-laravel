

<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="{{ route('frontend.index') }}" title="{{ app_name() }}"><img src="{{asset('images/logo.png')}}" alt="">
                    {{-- <a href="{{ route('frontend.index') }}" class="navbar-brand">{{ app_name() }}</a> --}}
                </a>
            </div>
            <!--logo end-->

            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <!--search-bar end-->
            <nav>
                <ul>
                    @if(config('locale.status') && count(config('locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">@lang('menus.language-picker.language')
                            ({{ strtoupper(app()->getLocale()) }})</a>

                        @include('includes.partials.lang')
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('frontend.index') }}" title="">
                            <span><img src="{{asset('images/icon1.png')}}" alt=""></span>
                            Home
                        </a>
                    </li>
                    {{-- <li>
                        <a href="companies.html" title="">
                            <span><img src="{{asset('images/icon2.png')}}" alt=""></span>
                            Companies
                        </a>
                        <ul>
                            <li><a href="companies.html" title="">Companies</a></li>
                            <li><a href="company-profile.html" title="">Company Profile</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="projects.html" title="">
                            <span><img src="{{asset('images/icon3.png')}}" alt=""></span>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="profiles.html" title="">
                            <span><img src="{{asset('images/icon4.png')}}" alt=""></span>
                            Requests
                        </a>
                        <ul>
                             <div class="requests-list">
                                 @foreach ($requests as $sender)
                                 <div class="request-details">
                                     <div class="noty-user-img">
                                         <img src="{{$sender->picture}}" height="30px" width="30px" alt="">
                                        </div>
                                        <div class="request-info">
                                            <h3>{{$sender->name}}</h3>
                                        </div>
                                        
                                        <div class="accept-feat">
                                            <a href="{{route('frontend.user.accept', ['id' => $sender->id])}}">Accept</a>
                                            <a href="{{route('frontend.user.addUser', ['id' => $sender->id])}}" class="close-req"><i
                                                class="la la-close"></i></a>
                                            </div>
                                            <!--accept-feat end-->
                                    </div>
                                   @endforeach
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="jobs.html" title="">
                            <span><img src="{{asset('images/icon5.png')}}" alt=""></span>
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{asset('images/icon6.png')}}" alt=""></span>
                            Messages
                        </a>
                        <div class="notification-box msg">
                            <div class="nt-title">
                               
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a></h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="messages.html" title="">Jassica William</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="view-all-nots">
                                    <a href="messages.html" title="">View All Messsages</a>
                                </div>
                            </div>
                            <!--nott-list end-->
                        </div>
                        <!--notification-box end-->
                    </li>
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{asset('images/icon7.png')}}" alt=""></span>
                            Notification
                        </a>
                        <div class="notification-box">
                            <div class="nt-title">
                                <h4>
                                    <a href="<a href=" {{ route('frontend.user.settings') }}"
                                        title="{{ app_name() }}">Setting</a>
                                </h4>
                            </div>
                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{asset('images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                    <!--notification-info -->
                                </div>
                                <div class="view-all-nots">
                                    <a href="#" title="">View All Notification</a>
                                </div>
                            </div>
                            <!--nott-list end-->
                        </div>
                        <!--notification-box end-->
                    </li>
                </ul>
            </nav>
            <!--nav end-->
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <!--menu-btn end-->
            <div class="user-account">
                <div class="user-info">
                    <img src="{{ $logged_in_user->picture }}" height="30px" width="30px" alt="">
                    <a href="#" title="">{{ $logged_in_user->first_name }}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss">
                    <h3>Online Status</h3>
                    <ul class="on-off-status">
                        <li>
                            <div class="fgt-sec">
                                <input type="radio" name="cc" id="c5">
                                <label for="c5">
                                    <span></span>
                                </label>
                                <small>Online</small>
                            </div>
                        </li>
                        <li>
                            <div class="fgt-sec">
                                <input type="radio" name="cc" id="c6">
                                <label for="c6">
                                    <span></span>
                                </label>
                                <small>Offline</small>
                            </div>
                        </li>
                    </ul>
                    <h3>Custom Status</h3>
                    <div class="search_form">
                        <form>
                            <input type="text" name="search">
                            <button type="submit">Ok</button>
                        </form>
                    </div>
                    <!--search_form end-->
                    <h3><a href="{{ route('frontend.user.settings') }}" title="{{ app_name() }}">Setting</a></h3>
                    <ul class="us-links">
                        <li>
                            @can('view backend')
                            <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.user.administration')</a>
                            @endcan
                        </li>
                        <li><a href="{{ route('frontend.user.account') }}"
                                {{ active_class(Route::is('frontend.user.account')) }}>@lang('navs.frontend.user.account')</a>
                        </li>

                        <li><a href="#" title="">Privacy</a></li>
                        <li><a href="#" title="">Faqs</a></li>
                        <li><a href="#" title="">Terms & Conditions</a></li>
                    </ul>
                    <h3 class="tc"> <a href="{{ route('frontend.auth.logout') }}"
                            class="dropdown-item">@lang('navs.general.logout')</a>
                    </h3>
                </div>
                <!--user-account-settingss end-->
            </div>
        </div>
        <!--header-data end-->
    </div>
</header>
<!--header end-->

