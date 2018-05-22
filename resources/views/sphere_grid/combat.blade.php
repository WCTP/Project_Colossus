@extends ('layouts.master')

@section('content')
  <h1 class="title" id="title">Combat Grid</h1>

  <div class="container dragscroll" id="container">
    @for ($i = 0; $i <= 101; $i++)
      <div class="grid-container">
        @for ($w = 0; $w <= 101; $w++)
        <div class="sphere" id="{{ $i }}-{{ $w }}" value=""></div>
        @endfor
      </div>
    @endfor
  </div>

  <!-- Thank you kswedberg for making the smooth scrolling -->
  <!-- https://github.com/kswedberg/jquery-smooth-scroll -->
  <script type="text/javascript">
    /* retrieve all of the spheres */
    var spheres = {!! json_encode($spheres) !!};
    console.log(spheres);

    /* load in all the spheres*/
    $( window ).on('load', function() {
      $.each(spheres, function(index, sphere) {
        $("#" + sphere.x_pos + "-" + sphere.y_pos).addClass(sphere.sphere_type);
      });
    });

    /* button allowing combat grid to be saved */
    $("#save-combat-grid").click(function() {
      console.log("saving");
    });

    /* switch for allowing editing */
    $("#edit-combat-grid").click(function() {
      var master_class = $("#edit-combat-grid").attr('class');

      if (master_class === "master-link") {
        $("#edit-combat-grid").removeClass("master-link");
        $("#edit-combat-grid").addClass("master-link-active");
        $("#edit-combat-grid").attr('alt', '1');
        $(".sphere").addClass("grid-layout");
        $(".sphere").click(function() {
          $(this).addClass("strength");
        });
      } else {
        $("#edit-combat-grid").removeClass("master-link-active");
        $("#edit-combat-grid").addClass("master-link");
        $("#edit-combat-grid").attr('alt', '0');
        $(".sphere").removeClass("grid-layout");
        $(".sphere").unbind();
      }
    });

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

@endsection

<!-- <img src="{{ asset('/image/sphere.png') }}" alt="Sphere" width="10" height="10"> -->
