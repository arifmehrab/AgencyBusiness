<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
        <img src="{{asset('public/Backend')}}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            @if(Request::is('admin*'))
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
            @endif
          </li> 
        <!----------------- Admin Sidevar Here --------------------
         --------------------------------------------------------->   
        @if(Request::is('admin*'))  
        
        <li class="nav-item">
          <a class="nav-link" href="#post" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
            <i class="fa fa-list"></i>
            <span class="nav-link-text">Blogs</span>
          </a>
          <div class="collapse-show collapse" id="post">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">Categories</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.create') }}" class="nav-link">Add Post</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">All Post</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.pending.list') }}" class="nav-link">Pending Post</a>
              </li>
            </ul>
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#slider" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples1">
            <i class="ni ni-world text-primary"></i>
            <span class="nav-link-text">Slider</span>
          </a>
          <div class="collapse-show collapse" id="slider">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('admin.slider.index') }}" class="nav-link">All slider</a>
              </li>
            </ul>
          </div>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#setting" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples1">
              <i class="ni ni-world text-primary"></i>
              <span class="nav-link-text">Settings</span>
            </a>
            <div class="collapse-show collapse" id="setting">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ route('admin.settings') }}" class="nav-link">Site Info Setting</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.seo') }}" class="nav-link">SEO Setting</a>
                </li>
              </ul>
            </div>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.subscriber') }}">
              <i class="ni ni-bell-55 text-red"></i>
              <span class="nav-link-text">Sebseriber</span>
            </a>
          </li>

        </ul>
        @endif    
      </div>
    </div>
  </div>
</nav>