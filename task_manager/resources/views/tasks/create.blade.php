@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{ url('store') }}" method="POST">
    @csrf
<div class="mb-3">
  <label for="name" class="form-label">Task</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Sample task">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success rounded-pill px-5 py-2" style="background-color:rgb(111, 70, 143); border: none;">Create</button>
</div>
</form>
</div>
@endsection