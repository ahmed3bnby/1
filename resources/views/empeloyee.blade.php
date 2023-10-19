@extends('layouts.app')

@section('content')

<x-app>
    <x-slot name='title'>Employees</x-slot>
    <div class="flex justify-center">
        <h1 class="mt-4 text-2xl text-blue-800" style="background-color: #337ab7; color: #fff;">All Employee Data</h1><br><br><br>
    </div>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('edited'))
        <div class="alert alert-primary">
            {{ session('edited') }}
        </div>
        @endif

        @if(session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
          @endif

          @if(session('error'))
          <div class="alert alert-danger">
              {{ session('error') }}
          </div>
            @endif

    </div>

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col"style="background-color: #337ab7; color: #fff;">#</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">First Name</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Last Name</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Email</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Company</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Street</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Country</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Age</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Gender</th>
                    <th scope="col" class="text-center font-weight-bold" style="background-color: #337ab7; color: #fff;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->company }}</td>
                        <td>{{ $employee->street }}</td>
                        <td>{{ $employee->country }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>
                            <a href="{{ url('edit/' .$employee->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('user/' .$employee->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ url('delete/' .$employee->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">No Data Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app>
@endsection
