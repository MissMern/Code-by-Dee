@extends('layouts.app')
@section('content')
<div class="container">
<form class="d-flex justify-content-center align-items-center gap-2 my-3 p-2 rounded shadow-sm bg-white" 
      action="{{ url('/search') }}" method="get" style="max-width: 940px; margin: auto;">

    @csrf

    <input 
        class="form-control form-control-lg rounded-pill px-4" 
        name="search" 
        type="search" 
        placeholder="Search..." 
        aria-label="Search" 
        style="flex: 1;"
    >

    <button 
        class="btn btn-success btn-lg rounded-pill px-4" 
        type="submit">
        Search
    </button>
</form><hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Written By</th>
      <th scope="col">Task Title</th>
      <th scope="col">Task Description</th>
      <th scope="col">Status</th>
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
      <td>
    <form action="{{ url('/status/'.$task->id) }}" method="POST" onchange="this.submit()">
        @csrf
        @method('PUT')
        <select name="status" class="form-select form-select-sm">
            <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Pending</option>
            <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="2" {{ $task->status == 2 ? 'selected' : '' }}>Completed</option>
        </select>
    </form>
</td>

 
    <td><div class="card-footer bg-white border-0 text-center d-flex justify-content-around">
                                    <a href="{{ url('/view/'.$task->id) }}" class="btn btn-safari-olive btn-sm px-4 py-2">View</a>
                                    <a href="{{ url('/edit/'.$task->id) }}" class="btn btn-dusty-orange btn-sm px-4 py-2">Edit</a>
                                    <form action="{{ url('/delete/'.$task->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete(event)">

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  function confirmDelete(event) {
    event.preventDefault(); // Stop form from submitting immediately

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // Submit the form
        event.target.submit();
      }
    });

    return false; // Block normal submission unless confirmed
  }
</script>
<script>
  function updateStatus(taskId, newStatus) {
    fetch(`/tasks/status/${taskId}`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify({ status: newStatus })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        location.reload(); // Or update only that cell via JS
      }
    });
  }
</script>


@endsection