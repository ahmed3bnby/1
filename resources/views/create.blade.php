<x-app>
    <x-slot name='title'>Employees</x-slot>
    <x-slot name='header'>Employees</x-slot>

    <div class="table-responsive">
        <table class="table table-light">
            <h1>Add Employee</h1>
            <form action="{{ route('employees.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}">
                </div>

                <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" name="street" value="{{ old('street') }}">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button type="submit" class="btn btn-primary">Add Employee</button>
            </form>
        </table>
    </div>
</x-app>
