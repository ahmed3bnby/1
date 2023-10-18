<x-app>
    <x-slot name='title'>Employees</x-slot>
    <x-slot name='header'>Employees</x-slot>

    <div class="container">
        <h1>Edit Employee</h1>
            <form action="{{ url('update-data/'.$employees->id) }}" method="POST">
                {{ csrf_field() }}
                @method('put')
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employees->first_name }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employees->last_name }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $employees->email }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Company</label>
                    <input type="text" class="form-control" id="company" name="company" value="{{ $employees->company }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Street</label>
                    <input type="text" class="form-control" id="street" name="street" value="{{ $employees->street }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Country</label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ $employees->country }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ $employees->age }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app>
