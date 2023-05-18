@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} {{ $todolists->links()}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }}
                    {{-- <div class="header">
                        <div class="card-header d-flex justify-content-between">
                            <div></div>
                            <a href="{{ route('todolist.create') }}" class="btn btn-info">New Entry</a>
                        </div>
                    </div> just make the button to the right--}}

                    <a href="{{ route('todolist.create') }}" class="btn btn-info">New Entry</a>

                        <table class="table">
                        <thead>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @foreach ($todolists as $key=> $todolist)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $todolist->title }}</td>
                                    <td style="text-align: justify;">{{ $todolist->description }}</td>
                                    <td>{{ $todolist->user->name }}</td>
                                    <td><a class="btn btn-dark" href="{{route('todolist.edit', $todolist->id)}}">Edit</a></td>
                                    <td><a class="btn btn-danger" href="{{route('todolist.delete', $todolist->id)}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    {{-- <div class="card">
                        <div class="card-title">
                        {{ $todolist->title }}
                    </div>
                    <div class="card-body">
                        {{ $todolist->description}} <br>
                        <small>Created By: {{ $todolist->user->name }}
                        </small>
                            </div>
                    </div> --}}
                    {{ $todolists->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
