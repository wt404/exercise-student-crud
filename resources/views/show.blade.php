@extends('layouts/layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Student Details
            </h1>
            <div>
                <a href={{ route('index') }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        <div>
            <div class="card text-black">
                <div class="card-body">
                    <h1>
                        Name: {{ $student->name }}
                    </h1>
                    <p>
                        Email: {{ $student->email }}
                    </p>
                    <p>
                        Age: {{ $student->age }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop