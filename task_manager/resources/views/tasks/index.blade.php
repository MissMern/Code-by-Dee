@extends('layouts.app')
@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Written By</th>
      <th scope="col">Task Title</th>
      <th scope="col">Task Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task) 
    <tr>
      <th scope="row">{{$task->id}}</th>
      <td>{{$task->user->name}}</td>
      <td>{{$task->name}}</td>
      <td>{{$task->description}}</td>
 
    <td><div class="card-footer bg-white border-0 text-center d-flex justify-content-around">
                                    <a href="{{ url('/view/'.$task->id) }}" class="btn btn-safari-olive btn-sm px-4 py-2">View</a>
                                    <a href="{{ url('/edit/'.$task->id) }}" class="btn btn-dusty-orange btn-sm px-4 py-2">Edit</a>
                                    <form action="{{ url('/delete/'.$task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-savannah-red btn-sm px-4 py-2">Delete</button>
                                    </form>
                                </div>
</td>
</tr> 
@endforeach
  </tbody>
</table>
</div>
@endsection