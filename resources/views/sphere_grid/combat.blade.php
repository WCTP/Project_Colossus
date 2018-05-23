@extends ('layouts.master')

@section('content')
  <h1 class="title" id="title">Combat Grid</h1>

  <div class="container dragscroll" id="container">
    @for ($i = 0; $i < 101; $i++)
      <div class="grid-container" oncontextmenu="return false">
        @for ($w = 0; $w < 101; $w++)
        <div class="sphere" id="{{ $i }}-{{ $w }}">none</div>
        @endfor
      </div>
    @endfor
  </div>

  <!-- Thank you kswedberg for making the smooth scrolling -->
  <!-- https://github.com/kswedberg/jquery-smooth-scroll -->
  <script type="text/javascript">
    /* retrieve all of the spheres */
    var spheres = {!! json_encode($spheres) !!};

    /* load in all the spheres*/
    $( window ).on('load', function() {
      $.each(spheres, function(index, sphere) {
        $("#" + sphere.x_pos + "-" + sphere.y_pos).addClass(sphere.sphere_type);
        $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_type_value);
      });
      $(".sphere").click(function() {
        $(".edit-controls").empty();
        $(this).removeClass('sphere');
        $(".edit-controls").append('<h2 class="title">Sphere Info</h3>'
          + '<div class="sphere-info">Type: ' + $(this).attr('class') + '</div>'
          + '<div class="sphere-info">Value: ' + $('#' + $(this).attr('id')).text() + '</div>');
        $(this).addClass('sphere');
      });
    });

    /* button allowing combat grid to be saved */
    $("#save-combat-grid").click(function() {
      var new_spheres = new Array();
      var counter = 0;
      for (var i = 0; i < 101; i++) {
        for (var w = 0; w < 101; w++) {
          if ( $("#" + i + "-" + w).text() !== "none") {
            $("#" + i + "-" + w).removeClass("grid-layout");
            $("#" + i + "-" + w).removeClass("sphere");
            new_spheres[counter] = {
              _token: "{{ csrf_token() }}",
              x_pos: i,
              y_pos: w,
              sphere_type: $("#" + i + "-" + w).attr('class'),
              sphere_type_value: $("#" + i + "-" + w).text()
            }
            $("#" + i + "-" + w).addClass("grid-layout");
            $("#" + i + "-" + w).addClass("sphere");
            counter++;
          }
        }
      }
      console.log(new_spheres);

      $.ajax({
        type: "POST",
        url: "/sphere_grid/combat/destroy_all",
        data: new_spheres[0],
        cache: false,
        success: console.log("success")
      })

      var i = 0;
      var max = new_spheres.length;
      function submit() {
        $.ajax({
          type: "POST",
          url: "/sphere_grid/combat/store",
          data: new_spheres[i],
          cache: false,
          success: console.log("success")
        })
        i++;
        $("#search-box").val(i);
        if (i < max) {
          setTimeout( submit, 200);
        }
      }

      submit();


    });

    /* switch for allowing editing and editing controls */
    $("#edit-combat-grid").click(function() {
      var master_class = $("#edit-combat-grid").attr('class');

      if (master_class === "master-link") {
        $("#edit-combat-grid").removeClass("master-link");
        $("#edit-combat-grid").addClass("master-link-active");
        $("#edit-combat-grid").attr('alt', '1');
        $(".edit-controls").empty();
        $(".edit-controls").append('<h3 class="title">Combat Edit Controls</h3>'
          + '<select id="sphere_type">'
          + '<option>combat</option>'
          + '<option>attribute</option>'
          + '<option>key</option>'
          + '<option>null</option>'
          + '</select>'
          + '<input type="text" id="sphere_value" size="12" placeholder="Value...">');
        $(".edit-controls").css("display", "block");
        $(".sphere").addClass("grid-layout");
        $(".sphere").unbind();
        $(".sphere").click(function() {
          $(this).addClass($("#sphere_type").val());
          $(this).text($("#sphere_value").val());
        });
        $(".sphere").contextmenu(function() {
          $(this).removeClass($("#sphere_type").val());
          $(this).text("none");
        });
      } else {
        $("#edit-combat-grid").removeClass("master-link-active");
        $("#edit-combat-grid").addClass("master-link");
        $("#edit-combat-grid").attr('alt', '0');
        $(".edit-controls").empty();
        $(".sphere").removeClass("grid-layout");
        $(".sphere").unbind();
        $(".sphere").click(function() {
          $(".edit-controls").empty();
          $(this).removeClass('sphere');
          $(".edit-controls").append('<h2 class="title">Sphere Info</h3>'
            + '<div class="sphere-info">Type: ' + $(this).attr('class') + '</div>'
            + '<div class="sphere-info">Value: ' + $('#' + $(this).attr('id')).text() + '</div>');
          $(this).addClass('sphere');
        });
      }
    });

    /* smooth scroll to the middle */
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
