<x-app>
    <x-slot name='title'>Employees</x-slot>
    <x-slot name='header'>Employees</x-slot>

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

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Company</th>
                    <th scope="col">street</th>
                    <th scope="col">country</th>
                    <th scope="col">age</th>
                    <th scope="col">gender</th>
                    <th scope="col">Actions</th>
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
                            <a href="{{ url('delete/' .$employee->id) }}" class="btn btn-danger">remove</a>
                            <a href="{{ url('create/') }}" class="btn btn-dark">create new</a>

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
