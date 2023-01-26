@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Students
            </h1>
            <div>
                <a href={{ route('create') }} class="btn btn-primary">Create Student</a>
            </div>
        </div>
        @if (session('success'))
            <div class="mb-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('success-delete'))
            <div class="mb-3 alert alert-danger" role="alert">
                {{ session('success-delete') }}
            </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($students) > 0)
                        @foreach($students as $student)
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->age }}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href={{ route('show', $student->id) }} class="btn btn-primary">View</a>
                                        <a href={{ route('edit', $student->id) }} class="btn btn-light">Edit</a>
                                        <form action={{ route('destroy', $student->id) }} method="POST">
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                No student available
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop