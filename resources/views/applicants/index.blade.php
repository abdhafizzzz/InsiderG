@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md12">
            <h5>Job Applicants</h5>
            <a class="btn btn-info" href={{ route('applicant.create') }}>Add new
                application</a>

            @if ($applicants->isNotEmpty())
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>I.C</th>
                            <th>D.O.B</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- loop here --}}
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        {{-- end loop --}}
                    </tbody>
                </table>

            @else
                <p class="text-secondary">No application yet</p>
            @endif

        </div>
    </div>
@endsection
