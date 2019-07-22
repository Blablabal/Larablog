@extends('layout.master')



@section('content')


    <div class="col-md-8 blog-main">
    
      @foreach($posts as $post)
        @include('post.article')
      @endforeach

      

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    
@endsection