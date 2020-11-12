@php 
$prefix = Request::route()->getPrefix();
$route  = Route::current()->getName();
@endphp
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
          <a class="nav-link {{ ($prefix == '/admin')?'active':'' }}" href="#post" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
            <i class="fa fa-list"></i>
            <span class="nav-link-text">Blogs</span>
          </a>
          <div class="collapse-show {{ ($prefix == '/admin')?'collapse show':'collapse' }}" id="post">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link {{ ($route == 'admin.category.index')?'active':'' }}">Categories</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.create') }}" class="nav-link {{ ($route == 'admin.post.create')?'active':'' }}">Add Post</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link {{ ($route == 'admin.post.index')?'active':'' }}">All Post</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post.pending.list') }}" class="nav-link {{ ($route == 'admin.post.pending.list')?'active':'' }}">Pending Post</a>
              </li>
            </ul>
          </div>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#navbar-examples1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples1">
              <i class="ni ni-world text-primary"></i>
              <span class="nav-link-text">Settings</span>
            </a>
            <div class="collapse-show {{ ($prefix == '/admin')?'collapse show':'collapse' }}" id="navbar-examples1">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ route('admin.settings') }}" class="nav-link {{ ($route == 'admin.settings')?'active':'' }}">Site Info Setting</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.seo') }}" class="nav-link {{ ($route == 'admin.seo')?'active':'' }}">SEO Setting</a>
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