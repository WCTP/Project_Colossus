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
      <label for="purpose">Purpose</label>
      <div>
        <input id="purpose" name="purpose" value="{{ $document_general->purpose }}" required>
      </div>
      <label for="process">Process</label>
      <div>
        <textarea id="process" name="process" rows="14" value="{{ $document_general->process }}" required>{{ $document_general->process }}</textarea>
      </div>
      <label for="troubleshooting">Troubleshooting Tips</label>
      <div>
        <textarea id="troubleshooting" name="troubleshooting" rows="10" value="{{ $document_general->troubleshooting }}" required>{{ $document_general->troubleshooting }}</textarea>
      </div>
      <button type="submit">
          Submit
      </button>
    </form>
  </div>

  <script type="text/javascript">
    /* allows nice edit to save data */
    $("button").click(function () {
      $("textarea").each(function () {
        nicEditors.findEditor(this.id).saveContent();
      });
    });
  </script>
@endsection
