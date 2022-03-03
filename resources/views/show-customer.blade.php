@extends('layouts.main')

@push('title')
<title>Show Customer page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>All Customer Details </h1>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender </th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
                <th>DOB</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $customer)    
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>

                <td>
                    @if ($customer->gender == "M")
                    {{"Male"}}
                    @elseif($customer->gender == "F")
                    {{"Female"}}
                    @elseif($customer->gender == "O")
                    {{"Other"}}
                    @endif    
                </td>

                <td>{{$customer->address}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->country}}</td>
                <td>{{$customer->dob}}</td>

                <td>
                    @if ($customer->status == 1)
                    {{"Active"}}
                    @else
                    {{"Inactive"}}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection