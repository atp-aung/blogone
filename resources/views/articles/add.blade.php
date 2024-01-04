@extends('layouts.app')
@section('content')
<div class="container">
@if($errors->any())
<div class="alert alert-warning">
<ol>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ol>
</div>
@endif
<form method="post">
@csrf
<div class="mb-3">
<label>Title</label>
<input type="text" name="title" placeholder="Enter Title" class="form-control">
</div>
<div class="mb-3">
<label>Body</label>
<textarea name="body" placeholder="Enter Content" class="form-control"></textarea>
</div>
<input type="submit" value="Add Article"
class="btn btn-primary">
</form>
</div>
@endsection