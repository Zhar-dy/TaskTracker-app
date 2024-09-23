@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{ route('task.create') }}" class="btn btn-primary">Add New Task</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Status</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $key => $task)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->content}}</td>
                                <td>{{$task->status}}</td>
                                <td>{{$task->priority}}</td>

                                <td>
                                    <a href="{{ route('task.edit', $task) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>


                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
