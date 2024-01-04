@extends("layouts.app")
@section("content")
<div class="container">
@if(session('info'))
<div class="alert alert-info">
{{ session('info') }}
</div>
@endif
{{ $articles->links() }}
@foreach($articles as $article)
<div class="card mb-2">
<div class="card-body">
<h5 class="card-title">{{ $article->title }}</h5>
<div class="card-subtitle mb-2 text-muted small">
    {{ "created at ".$article->created_at->diffForHumans()."," }}
{{ " updated at ".$article->updated_at->diffForHumans() }}
</div>
<p class="card-text">{{ $article->body }}</p>
<a class="btn btn-warning"
href="{{ url("/articles/delete/$article->id") }}">
Delete
</a>
<a class="btn btn-warning"
href="{{ url("/articles/update/$article->id") }}">
Edit
</a>
</div>
</div>
@endforeach
</div>
@endsection