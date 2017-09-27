<nav class="nav has-shadow">
  <div class="container">
    {{-- Nav Left --}}
    <div class="nav-left">
      {{-- Logo --}}
      <a class="nav-item" href="{{route('home')}}">
         <img src="{{asset('images/logo.png')}}" alt="DevBlog">
      </a>
    </div>
    {{-- Nav Right --}}
    <div class="nav-right" style="overflow:visible">
      <a href="#" class="nav-item is-tab is-hidden-mobile">Learn</a>
      <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
      <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
      @if (!Auth::guest())
        <a href="#" class="nav-item is-tab is-hidden-mobile">Log In</a>
        <a href="#" class="nav-item is-tab is-hidden-mobile">Register</a>
      @else
        <button class="nav-item is-tab is-hidden-mobile dropdown">
          Irteza Asad <span class="icon"><i class="fa fa-caret-down"></i></span>

          <ul class="dropdown-menu">
            <li><a href="#"><span><i class="fa fa-user-o"></i></span> Profile</a></li>
            <li><a href="#"><span><i class="fa fa-bell-o"></i></span> Notifications</a></li>
            <li><a href="#"><span><i class="fa fa-cog"></i></span> Settings</a></li>
            <li class="seperator"></li>
            <li><a href="#"><span><i class="fa fa-sign-out"></i></span> Logout</a></li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>
