@extends('layouts.main')

@push('title')
<title>Register compnent page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>{{$form_title}} </h1>




@isset($success)
@if ($success)
<div class="alert text-center text-success border border-success">Registration successfull</div>
@endif
@endisset

<form action="{{$url}}" method="post" class="row">

    @csrf
    <x-input type="text" name="name" value="{{isset($customer->name) ? $customer->name : old('name')}}" label="Name" />
    @error('name')
    {{$message}}
    @enderror

    <x-input type="email" name="email" value="{{isset($customer->email) ? $customer->email : old('email')}}" label="Email" />
    @error('email')
    {{$message}}
    @enderror

    <div class="mb-3 row">
        <div class="col-md-6">
            <label  class="form-label" class="form-label">Your Gender </label> <br>
            <label for="male" class="form-label" class="form-label">Male </label>
            <input type="radio" name="gender" value="M" id="male" {{isset($customer->gender) ? $customer->gender =="M"? "checked": "" : old('gender')}} />
            <label for="female" class="form-label" class="form-label">Female </label>
            <input type="radio" name="gender" value="F" id="female" {{isset($customer->gender) ? $customer->gender =="F"? "checked": "" : old('gender')}} />
            <label for="other" class="form-label" class="form-label">Other </label>
            <input type="radio" name="gender" value="O" id="other" {{isset($customer->gender) ? $customer->gender ==""? "checked": "" : old('gender')}} />
    @error('gender')
    {{$message}} 
    @enderror
        </div>
    </div>


    <div class="mb-3 col-md-6">
        <label for="address">Your address</label>
        <textarea name="address" id="address" cols="10" rows="4" class="form-control">{{isset($customer->address) ? $customer->address: old('address')}}</textarea>
    @error('address')
    {{$message}}
    @enderror
    </div>

    <x-input type="text" name="state" value="{{isset($customer->state) ? $customer->state : old('state')}}" label="State" />
    @error('state')
    {{$message}}
    @enderror

    <x-input type="text" name="country" value="{{isset($customer->country) ? $customer->country : old('country')}}" label="Country" />
    @error('country')
    {{$message}}
    @enderror

    <x-input type="date" name="dob" value="{{isset($customer->dob) ? $customer->dob : old('dob')}}" label="date of birth" />
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