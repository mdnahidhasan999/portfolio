@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    @if($projects)
        <ul>
            @foreach($projects as $project)
                <li>{{ $project->name }}: {{ $project->description }}</li>
            @endforeach
        </ul>
    @else
        <p>No projects available.</p>
    @endif
   
@endsection
