@extends ('layouts.master')

@section('content')
  <h1 class="title">{{ $category }} Documents</h1>

  <div class="index-list">
    <hr>
    @foreach ($documents_general as $document_general)
      <div>
        <a href="/document_general/{{ $document_general->id }}">
          {{ $document_general->title }}
        </a>
        last modified on {{ $document_general->updated_at }}
      </div>
      <hr>
    @endforeach
    <br>
  </div>
@endsection
