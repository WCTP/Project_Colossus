@extends ('layouts.master')

@section('content')
  <h1 class="title" id="title">Combat Grid</h1>

  <div class="container dragscroll" id="container">
    @for ($i = 0; $i <= 101; $i++)
      <div class="grid-container">
        @for ($w = 0; $w <= 101; $w++)
        <div id="{{ $i }}-{{ $w }}"></div>
        @endfor
      </div>
    @endfor
  </div>

  <!-- Thank you kswedberg for making the smooth scrolling -->
  <!-- https://github.com/kswedberg/jquery-smooth-scroll -->
  <script type="text/javascript">
    $("#title").click(function() {
      console.log("HI");
      $.smoothScroll({
        scrollElement: $('#container'),
        scrollTarget: $('#40-40')
      });
    });
  </script>

  <!-- Thank you DragScroll for allowing dragging with mouse to scroll. -->
  <!-- http://qnimate.com/javascript-scroll-by-dragging/ awesome open source community -->
  <script type="text/javascript" src="https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js"></script>
<!-- <img src="{{ asset('/image/sphere.png') }}" alt="Sphere" width="10" height="10"> -->
@endsection
