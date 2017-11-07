@extends('layout.baseWithHeader')
@section('content')
    <h3>Insert a new client</h3>
    @if($errors->any())
        @include('widget.alert-error', ['message' => $errors->first()])
    @endif
    <form id="clientForm" action="{{ route('clientCreatePost') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" value="{{ old('gender') }}">
                <option value="">Unspecified</option>
                <option value="M">male</option>
                <option value="F">female</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Phone</label>
            <input name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="address">Address</label>
            <input name="address" class="form-control" value="{{ old('address') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="nationality">Nationality</label>
            <input name="nationality" class="form-control" value="{{ old('nationality') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" name="dateOfBirth" class="form-control" value="{{ old('dateOfBirth') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="educationBackground">Education Background</label>
            <input name="educationBackground" class="form-control" value="{{ old('educationBackground') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="preferredModeOfContact">Preferred mode of contact</label>
            <select name="preferredModeOfContact" class="form-control" value="{{ old('preferredModeOfContact') }}">
                <option value="email">email</option>
                <option value="phone">phone</option>
                <option value="none">none</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
@endsection

@push('js-bottom')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script type="text/javascript">
        $("#clientForm").validate({
            rules: {
                name: "required",
                gender: "required",
                phone: "required",
                email: {
                    required: true,
                    email: true
                },
                address: "required",
                nationality: "required",
                dateOfBirth: "required",
                educationBackground: "required"
            }
        });
    </script>
@endpush
