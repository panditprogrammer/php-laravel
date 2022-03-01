@extends('layouts.main')    

@push('title')
    <title>Register compnent page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>Register </h1>
<form action="{{url('/')}}/register" method="post" >

    @csrf

       <x-input type="text" name="username"  value="{{old('username')}}" label="Enter username"/>
        @error('username')
            {{$message}}<br>
        @enderror 

       <x-input type="email" name="email" value="{{old('email')}}" label="Enter Email"/>
        @error('email')
        {{$message}}<br>
        @enderror 

       <x-input type="password" name="password" label="Enter password"/>
       
       <x-input type="password" name="password_confirmation" label="Confirm password"/>
       @error('password')
       {{$message}}<br>
       @enderror 

       <button type="submit">Submit</button>
        
</form>
@endsection



