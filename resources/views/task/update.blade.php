@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update a Task') }}</div>

                <div class="card-body">

                <form action = "{{ route('task.update', $task) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputtitle" name="title" value="{{$task->title}}">
                        @error('title')
                        <br><small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputsize" class="form-label">Content</label>
                        <input type="text" class="form-control" id="inputauthor" name="content" value="{{$task->content}}">
                        @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputsize" class="form-label">Status</label>
                        <div class="col-md-6">
                            <select name="status" class="form-select" aria-label= "Default select example">
                                <option value = "in progress" {{ $task->status == 'in progress' ? 'selected' : '' }}>{{__('In Progress')}}</option>
                                <option value = "completed"  {{ $task->status == 'completed' ? 'selected' : '' }}>{{__('Completed')}}</option>
                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="inputprice" class="form-label">Priority</label>
                        <div class="col-md-6">
                            <select name="priority" class="form-select" aria-label= "Default select example">
                                <option value = "low" {{ $task->priority == 'low' ? 'selected' : '' }}>{{__('Low')}}</option>
                                <option value = "medium" {{ $task->priority == 'medium' ? 'selected' : '' }}>{{__('Medium')}}</option>
                                <option value = "high" {{ $task->priority == 'high' ? 'selected' : '' }}>{{__('High')}}</option>
                            </select>
                        </div>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
