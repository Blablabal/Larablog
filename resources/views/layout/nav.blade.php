<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="/">Home</a>
      @if(Auth::check())
        <a class="p-2 text-muted" href="/posts/create">Create a Post</a>
      @endif
    </nav>
</div>
