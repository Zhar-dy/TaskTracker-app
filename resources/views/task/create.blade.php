@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a Task') }}</div>

                <div class="card-body">

                <form action = "{{ route('task.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputtitle" name="title">
                        @error('title')
                        <br><small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputsize" class="form-label">Content</label>
                        <input type="text" class="form-control" id="inputauthor" name="content">
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
                                <option value = "in progress"->{{__('In Progress')}}</option>
                                <option value = "completed"->{{__('Completed')}}</option>
                            </select>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="inputprice" class="form-label">Priority</label>
                        <div class="col-md-6">
                            <select name="priority" class="form-select" aria-label= "Default select example">
                                <option value = "low"->{{__('Low')}}</option>
                                <option value = "medium"->{{__('Medium')}}</option>
                                <option value = "high"->{{__('High')}}</option>
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
