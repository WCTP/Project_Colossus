@extends ('layouts.master')

@section('content')
  <h1 class="title">{{ $document_general->category }} Document: {{ $document_general->title }}</h1>

  <div class="show-document-card">
    <h2>Description</h2>
    <p>{{ $document_general->description }}</p>
    <hr>
    @if ($document_general->hidden == 0 || Auth::user()->privilege == "game master")
      <h2>Secret</h2>
      <p>{!! html_entity_decode($document_general->secret) !!}</p>
      <hr>
    @endif
    @if (Auth::user()->privilege == "game master")
      <div class="footer-container">
        <a class="edit-link" href="/document_general/edit/{{ $document_general->id }}">Edit</a>
        <form action="/document_general/delete/{{ $document_general->id }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit">Delete</button>
        </form>
      </div>
    @endif
  </div>

@endsection
