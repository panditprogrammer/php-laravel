@extends('layouts.main')

@push('title')
<title>Register compnent page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>Register </h1>
<form action="{{url('/')}}/register" method="post" class="row">

    @csrf
    <x-input type="text" name="name" value="{{old('name')}}" label="Enter Name"  />
    @error('name')
    {{$message}}
    @enderror

    <x-input type="email" name="email" value="{{old('email')}}" label="Enter Email" />
    @error('email')
    {{$message}}
    @enderror

    <div class="mb-3 col-md-6">
        <label for="male" class="form-label" class="form-label">Your Gender </label>
        <br>
        <label for="male" class="form-label" class="form-label">Male </label>
        <input type="radio" name="gender" value="M" id="male" />
        <label for="female" class="form-label" class="form-label">Female </label>
        <input type="radio" name="gender" value="F" id="female" />
        <label for="other" class="form-label" class="form-label">Other </label>
        <input type="radio" name="gender" value="O" id="other" />
    </div>

    @error('gender')
    {{$message}}
    @enderror

    <div class="mb-3 col-md-6">
        <label for="address">Your address</label>
        <textarea name="address" id="address"  cols="10" rows="4" class="form-control">{{old('address')}}</textarea>
    </div>
    @error('address')
    {{$message}}
    @enderror

    <x-input type="text" name="state" value="{{old('state')}}" label="Enter state" />
    @error('state')
    {{$message}}
    @enderror

    <x-input type="text" name="country" value="{{old('country')}}" label="Enter country" />
    @error('country')
    {{$message}}
    @enderror

    <x-input type="date" name="dob" value="{{old('dob')}}" label="Enter date of birth" />
    @error('dob')
    {{$message}}
    @enderror


    <x-input type="password" name="password" label="Password" />

    <x-input type="password" name="password_confirmation" label="Confirm password" />
    @error('password')
    {{$message}}
    @enderror
    <div class="col-md-3">

        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</form>
@endsection