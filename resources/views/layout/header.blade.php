<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        @if(Auth::check())
          <a class="text-muted" href="#">{{ Auth::user()->name }}</a>
          <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
        @else
          <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
        @endif
      </div>
     
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="/register">Registration</a>
      </div>
    </div>
  </header>