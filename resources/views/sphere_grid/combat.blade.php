@extends ('layouts.master')

@section('content')
  <h1 class="title" id="title">Combat Grid</h1>

  <div class="container dragscroll" id="container">
    @for ($i = 0; $i < 101; $i++)
      <div id="grid-container" class="grid-container" oncontextmenu="return true">
        @for ($w = 0; $w < 101; $w++)
        <div class="sphere" id="{{ $i }}-{{ $w }}">none</div>
        @endfor
      </div>
    @endfor
  </div>

  <script type="text/javascript">
    /* retrieve all of the spheres */
    var spheres = {!! json_encode($spheres) !!};

    /* load in all the spheres*/
    $( window ).on('load', function() {
      $("#container").scrollTop(10000);
      $("#container").scrollLeft(10000);
      var topMiddle = $("#container").scrollTop() / 2;
      var leftMiddle = $("#container").scrollLeft() / 2;
      $("#container").scrollTop(topMiddle);
      $("#container").scrollLeft(leftMiddle);

      /* loading paths between spheres */
      $.each(spheres, function(index, sphere) {
        for (var i = 0; i < 4; i++) {
          if (i == 0 && sphere.connected_sphere_id_1 != null) {
            var x_pos = sphere.x_pos;
            var y_pos = sphere.y_pos;
            var x_connected = sphere.connected_sphere_id_1.substring(0, sphere.connected_sphere_id_1.indexOf('-'));
            var y_connected = sphere.connected_sphere_id_1.substring(sphere.connected_sphere_id_1.indexOf('-') + 1, sphere.connected_sphere_id_1.length);
          } else if (i == 1 && sphere.connected_sphere_id_2 != null) {
            var x_pos = sphere.x_pos;
            var y_pos = sphere.y_pos;
            var x_connected = sphere.connected_sphere_id_2.substring(0, sphere.connected_sphere_id_2.indexOf('-'));
            var y_connected = sphere.connected_sphere_id_2.substring(sphere.connected_sphere_id_2.indexOf('-') + 1, sphere.connected_sphere_id_2.length);
          } else if (i == 2 && sphere.connected_sphere_id_3 != null) {
            var x_pos = sphere.x_pos;
            var y_pos = sphere.y_pos;
            var x_connected = sphere.connected_sphere_id_3.substring(0, sphere.connected_sphere_id_3.indexOf('-'));
            var y_connected = sphere.connected_sphere_id_3.substring(sphere.connected_sphere_id_3.indexOf('-') + 1, sphere.connected_sphere_id_3.length);
          } else if (i == 3 && sphere.connected_sphere_id_4 != null) {
            var x_pos = sphere.x_pos;
            var y_pos = sphere.y_pos;
            var x_connected = sphere.connected_sphere_id_4.substring(0, sphere.connected_sphere_id_4.indexOf('-'));
            var y_connected = sphere.connected_sphere_id_4.substring(sphere.connected_sphere_id_4.indexOf('-') + 1, sphere.connected_sphere_id_4.length);
          }
          /* if horizontal difference */
          if (x_pos == x_connected && y_pos < y_connected) {
            y_pos++;
            while (y_pos < y_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("horizontal");
              y_pos++;
            }
          /* if vertical difference */
          } else if (x_pos < x_connected && y_pos == y_connected) {
            x_pos++;
            while (x_pos < x_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("vertical");
              x_pos++;
            }
          /* if diagonal left */
          } else if (x_pos < x_connected && y_pos < y_connected) {
            x_pos++;
            y_pos++;
            while (x_pos < x_connected && y_pos < y_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("diagonal-left");
              x_pos++;
              y_pos++;
            }
            while (x_pos < x_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("vertical");
              x_pos++;
            }
            while (y_pos < y_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("horizontal");
              y_pos++;
            }
          /* if diagonal right */
          } else if (x_pos < x_connected && y_pos > y_connected) {
            x_pos++;
            y_pos--;

            while (x_pos < x_connected && y_pos > y_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("diagonal-right");
              x_pos++;
              y_pos--;
            }
            while (x_pos < x_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("vertical");
              x_pos++;
            }
            while (y_pos > y_connected) {
              $("#" + x_pos + "-" + y_pos).addClass("horizontal");
              y_pos--;
            }
          }
        }
      });
      /* loading in sphere values and classes */
      $.each(spheres, function(index, sphere) {
        $("#" + sphere.x_pos + "-" + sphere.y_pos).addClass(sphere.sphere_type);
        if (sphere.connected_sphere_id_4 != null) {
          $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_stat + ';' + sphere.sphere_type_value + ';' + sphere.connected_sphere_id_1 + ';' + sphere.connected_sphere_id_2 + ';' + sphere.connected_sphere_id_3 + ';' + sphere.connected_sphere_id_4);
          $("#" + sphere.x_pos + "-" + sphere.y_pos).removeClass("sphere");
        } else if (sphere.connected_sphere_id_3 != null) {
          $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_stat + ';' + sphere.sphere_type_value + ';' + sphere.connected_sphere_id_1 + ';' + sphere.connected_sphere_id_2 + ';' + sphere.connected_sphere_id_3);
          $("#" + sphere.x_pos + "-" + sphere.y_pos).removeClass("sphere");
        } else if (sphere.connected_sphere_id_2 != null) {
          $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_stat + ';' + sphere.sphere_type_value + ';' + sphere.connected_sphere_id_1 + ';' + sphere.connected_sphere_id_2);
          $("#" + sphere.x_pos + "-" + sphere.y_pos).removeClass("sphere");
        } else if (sphere.connected_sphere_id_1 != null) {
          $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_stat + ';' + sphere.sphere_type_value + ';' + sphere.connected_sphere_id_1);
          $("#" + sphere.x_pos + "-" + sphere.y_pos).removeClass("sphere");
        }  else if (sphere.connected_sphere_id_1 == null) {
          $("#" + sphere.x_pos + "-" + sphere.y_pos).text(sphere.sphere_stat + ';' + sphere.sphere_type_value);
          $("#" + sphere.x_pos + "-" + sphere.y_pos).removeClass("sphere");
        }
      });

      /* NOTE: function also occurs when editting mode is turned off */
      $(".combat, .attribute, .key, .null").click(function() {
        $(".edit-controls").empty();
        $(".edit-controls").append('<h2 class="title">Sphere Info</h3>'
          + '<div class="sphere-info">Type: ' + $(this).attr('class') + '</div>'
          + '<div class="sphere-info">Value: ' + $('#' + $(this).attr('id')).text() + '</div>'
          + '<div class="sphere-info">Coordinate: ' + $(this).attr('id') + '</div>');
      });
    });

    /* button allowing combat grid to be saved */
    $("#save-combat-grid").click(function() {
      false_data = {
        _token: "{{ csrf_token() }}",
        x_pos: 0,
        y_pos: 0,
        sphere_type: "none",
        sphere_type_value: "none"
      }
      $.ajax({
        type: "POST",
        url: "/sphere_grid/combat/destroy_all",
        data: false_data,
        cache: false,
        success: console.log("success")
      })

      var new_spheres = new Array();
      var counter = 0;
      for (var i = 0; i < 101; i++) {
        for (var w = 0; w < 101; w++) {
          if ( $("#" + i + "-" + w).text() !== "none") {
            $("#" + i + "-" + w).removeClass("grid-layout");
            new_spheres[counter] = {
              _token: "{{ csrf_token() }}",
              x_pos: i,
              y_pos: w,
              sphere_type: $("#" + i + "-" + w).attr('class'),
              sphere_type_value: $("#" + i + "-" + w).text()
            }
            $("#" + i + "-" + w).addClass("grid-layout");
            counter++;
          }
        }
      }
      console.log(new_spheres);

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

      /* switching ON edit controls */
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
          + '<select id="sphere_stat">'
          + '<option>hp</option>'
          + '<option>mp</option>'
          + '<option>ap</option>'
          + '<option>mov</option>'
          + '<option>skl</option>'
          + '<option>eva</option>'
          + '<option>str</option>'
          + '<option>mag</option>'
          + '<option>def</option>'
          + '<option>res</option>'
          + '</select>'
          + '<input type="text" id="sphere_value" size="12" placeholder="Value...">'
          + '<input type="text" id="connected_sphere_id_1" size="12" placeholder="Con. Sphere ID 1">'
          + '<input type="text" id="connected_sphere_id_2" size="12" placeholder="Con. Sphere ID 2">'
          + '<button class="edit-connection-submission" id="submit_connection">Connect Spheres</button>');
        $(".edit-controls").css("display", "block");
        $(".sphere, .combat, .attribute, .key, .null").addClass("grid-layout");
        $(".sphere, .combat, .attribute, .key, .null").unbind();
        $(".sphere").click(function() {
          $(this).removeClass("sphere");
          $(this).addClass($("#sphere_type").val());
          if ($("#sphere_value").val() != "") {
            $(this).text($("#sphere_stat").val() + ";" + $("#sphere_value").val());
          } else {
            $(this).text($("#sphere_stat").val() + ";" + "0");
          }
        });
        $(".combat, .attribute, .key, .null").contextmenu(function() {
          if ($(this).attr('class').includes($("#sphere_type").val())) {
            $(this).removeClass($("#sphere_type").val());
            $(this).text("none");
            $(this).addClass("sphere");
          }
        });
        /* take last two spheres clicked on and allow you to connect them */
        var isFirstConnected = 0;
        $(".combat, .attribute, .key, .null").click(function() {
          if (isFirstConnected == 0) {
            $("#connected_sphere_id_1").val($(this).attr('id'));
            isFirstConnected = 1;
          } else {
            $("#connected_sphere_id_2").val($(this).attr('id'));
            isFirstConnected = 0;
          }
        });
        $("#submit_connection").click(function() {
          $("#" + $("#connected_sphere_id_1").val()).append(";" + $("#connected_sphere_id_2").val());
          $("#" + $("#connected_sphere_id_2").val()).append(";" + $("#connected_sphere_id_1").val());
        });
      /* switching OFF edit controls */
      } else {
        $("#edit-combat-grid").removeClass("master-link-active");
        $("#edit-combat-grid").addClass("master-link");
        $("#edit-combat-grid").attr('alt', '0');
        $(".edit-controls").empty();
        $(".sphere, .combat, .attribute, .key, .null").removeClass("grid-layout");
        $(".sphere, .combat, .attribute, .key, .null").unbind();
        /* NOTE: function also occurs when window loads */
        $(".combat, .attribute, .key, .null").click(function() {
          $(".edit-controls").empty();
          $(".edit-controls").append('<h2 class="title">Sphere Info</h3>'
            + '<div class="sphere-info">Type: ' + $(this).attr('class') + '</div>'
            + '<div class="sphere-info">Value: ' + $('#' + $(this).attr('id')).text() + '</div>'
            + '<div class="sphere-info">Coordinate: ' + $(this).attr('id') + '</div>');
        });
      }
    });
  </script>

  <!-- Thank you DragScroll for allowing dragging with mouse to scroll. -->
  <!-- http://qnimate.com/javascript-scroll-by-dragging/ awesome open source community -->
  <script type="text/javascript" src="https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js"></script>

@endsection

<!-- <img src="{{ asset('/image/sphere.png') }}" alt="Sphere" width="10" height="10"> -->
