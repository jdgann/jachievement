<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <div class="pull-left"><a href="{{ url('/') }}" id="ja_nav_home"><img src="{{ url('images/ja_nav_logo.png') }}" style="height: 60px;"></a></div>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar --> 
            <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a id="ja_nav_about" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_nav_purpose" href="{{ url('/aboutus/index') }}">Mission</a></li>
                            <li><a id="ja_nav_programs" href="{{ url('/programs/index') }}">Programs</a></li>
                            <li><a id="ja_nav_map" href="{{ url('/aboutus/map') }}">Schools We're In</a></li>
                            <li><a id="ja_nav_faq" href="{{ url('/') }}">FAQs</a></li>
                            <li><a id="ja_nav_goingon" href="{{ url('/') }}">What's Going On?</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                        <a id="ja_nav_getinv" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Get Involved<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_nav_educator" href="{{ url('/educators/introduction') }}">Educators</a></li>
                            <li><a id="ja_nav_volunteer" href="{{ url('/volunteers/introduction') }}">Volunteers</a></li>
                            <li><a id="ja_nav_contribute" href="{{ url('/contributors') }}">Donors</a></li>
                            <li><a id="ja_nav_contribute" href="{{ url('/event/activeevent') }}">Events</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                        <a id="ja_nav_getinv" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign Up<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_nav_educator" href="{{ url('/educators/interestform') }}">As An Educator</a></li>
                            <li><a id="ja_nav_volunteer" href="{{ url('/volunteers/interestform') }}">As A Volunteer</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a id="ja_nav_contact" href="{{ url('/contactus') }}">Contact Us</a></li>
                <li><a id="ja_nav_contribute" href="{{ url('/donation/donate') }}">Donate Now</a></li>

            </ul>

            <ul class="nav navbar-nav">
                <!--<li><a href="{{ url('/home') }}">Home</a></li>-->
                {{-- Menu for Users with Administration Role Only --}}
                @role('admin')
                <li class="dropdown">
                    <a href="#" id="ja_nav_getinv" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a id="ja_nav_users" href="{{ url('/users') }}">Users</a></li>
                        <li><a id="ja_nav_roles" href="{{ url('/roles') }}">Roles</a></li>
                        <li><a id="ja_nav_educator_form" href="{{ url('/admin/educatorform') }}">Educator Forms</a></li>
                        <li><a id="ja_nav_volunteer_form" href="{{ url('/admin/volunteerform') }}">Volunteer Forms</a></li>
                        <li><a id="ja_reports_donation" href="{{ url('/reports/donation') }}">Donation Reports</a></li>
                    </ul>
                </li>
                @endrole
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a id="ja_login" href="{{ url('/login') }}">Login</a></li>
                    <li><a id="ja_register" href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, {{ Auth::user()->first_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="ja_logout" href="{{ url('/logout') }}">Logout</a></li>
                            <li><a id="ja_changepw"href="{{ url('/change-password') }}">Change Password</a></li>
                             <li><a id="ja_teamview" href="{{ url('/event/team/view') }}">View My Teams</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
