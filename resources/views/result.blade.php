@extends('task1.resources.views.layout')
@section('container')
<div class="form-group col-md-3">
    <label for="comment">Result:</label>
    <textarea class="form-control" rows="5" id="comment" disabled>{{ $result }}</textarea>
</div>
<div class="form-group col-md-3">
    <a type="button" href="{{ route('calculator') }}" class="btn btn-primary">Back</a>
</div>
@endsection
