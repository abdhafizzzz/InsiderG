@extends('layouts.app')

@section('content')


    <div class="container">
        <a href="{{ url()->previous() }}" class='btn btn-info'>BACK</a>
    <form action="{{ route('todolist.store') }}" method="POST">{{--route to submit on button--}}
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label>Title:</label>
                <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                @error('title')
                    <small class="text-danger">Sila masukkan title</small>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Due Date:</label>
                <input class="form-control" type="date" name="due_date" value="{{ old('due_date') }}">
                @error('due_date')
                    <small class="text-danger">Sila masukkan tarikh</small>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Description:</label>
                <textarea class="form-control" type="text" name="description" value="{{ old('description') }}">
                </textarea>
                @error('description')
                    <small class="text-danger">Sila masukkan description</small>
                @enderror
            </div>
        </div>
        <button class="btn btn-info" type="submit">Submit</button>
    </div>
    </form>



@endsection
