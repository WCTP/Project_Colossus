@extends('layouts.master')

@section ('content')
  <h1 class="title">{{ $document_general->category }} Edit Form</h1>

  <div class="form-card">
    <form method="POST" action="/document_general/update/{{ $document_general->id }}">
      @csrf
      <input id="category" name="category" value="{{ $document_general->category }}" type="hidden">
      <label for="title">Title</label>
      <div>
        <input id="title" name="title" value="{{ $document_general->title }}" required autofocus>
      </div>
      <label for="description">Description</label>
      <div>
        <textarea id="description" name="description" rows="14" value="{{ $document_general->description }}" required>{{ $document_general->description }}</textarea>
      </div>
      <label for="secret">Secret</label>
      <div>
        <textarea id="secret" name="secret" rows="14" value="{{ $document_general->secret }}" required>{{ $document_general->secret }}</textarea>
      </div>
      <input type="hidden" id="hidden" name="hidden" value=0>
      <div class="footer-container">
        <button type="submit">
            Submit
        </button>
        @if (Auth::user()->privilege == "game master")
          <button type="button" id="switch-hidden" class="hide-inactive">
            Hide
          </button>
        @endif
      </div>
    </form>
  </div>

  <script type="text/javascript">
    /* allows nice edit to save data */
    $("button").click(function () {
      $("textarea").each(function () {
        nicEditors.findEditor(this.id).saveContent();
      });
    });

    $("#switch-hidden").click(function() {
      if ($("#hidden").val() == 0) {
        $("#hidden").val(1);
        $("#switch-hidden").removeClass("hide-inactive");
        $("#switch-hidden").addClass("hide-active");
      } else if ($("#hidden").val() == 1) {
        $("#hidden").val(0);
        $("#switch-hidden").removeClass("hide-active");
        $("#switch-hidden").addClass("hide-inactive");
      }
    });
  </script>
@endsection
