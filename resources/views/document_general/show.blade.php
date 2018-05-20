@extends ('layouts.master')

@section('content')
  <h1 class="title">{{ $document_general->category }} Document: {{ $document_general->title }}</h1>

  <div class="show-document-card">
    <h2>Purpose</h2>
    <p>{{ $document_general->purpose }}</p>
    <hr>
    <h2>Process</h2>
    <p>{!! html_entity_decode($document_general->process) !!}</p>
    <hr>
    <h2>Troubleshooting Tips</h2>
    <p>{!! html_entity_decode($document_general->troubleshooting) !!}</p>
    <form action="/document_general/delete/{{ $document_general->id }}" method="post">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit">Delete</button>
    </form>
    <a class="edit-link" href="/document_general/edit/{{ $document_general->id }}">Edit</a>
  </div>

@endsection
