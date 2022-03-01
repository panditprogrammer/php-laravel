@extends('layouts.main')    

@push('title')
    <title>Register page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>Register </h1>
<form action="{{url('/')}}/register" method="post" >

    @csrf

    {{-- show all errors when for is not successfull  --}}
    {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
    </pre> --}}

    <input type="text" name="username" value="{{old("username")}}" id="username" placeholder="Username"><br>
    {{-- if error exists  --}}
        @error('username')
            {{$message}}
        @enderror
        <br><br>
        
        <input type="email" name="email" value="{{old("email")}}" id="email" placeholder="Email"><br>
        @error('email')
        {{$message}}
        @enderror
        <br><br>

        <input type="password" name="password" id="password" placeholder="Password"><br>
        @error('password')
        {{$message}}
        @enderror
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <br><br>
        
</form>
@endsection



