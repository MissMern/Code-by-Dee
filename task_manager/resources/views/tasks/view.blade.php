@extends('layouts.app')
@section('content')

<div class="container">
    <H1>{{$task->name}}</H1>
    <h2>{{$task->description}}</h2>
</div>
@endsection