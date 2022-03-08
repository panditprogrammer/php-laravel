@extends('layouts.main')

@push('title')
<title>softDelete Manage page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')
<h1>All Deleted Customers Details </h1>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th>Name</th>
                <th>Email</th>
                <th>Gender </th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
                <th>DOB</th>
                <th>status</th>
                <th colspan="2">Action</th>
                <th></th>
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
                <td>{{myDateFormat($customer->dob,"d-m-Y")}}</td>

                <td>
                    @if ($customer->status == 1)
                      <span class="text-success"> {{"Active"}} </span>
                    @else
                    <span class="text-danger"> {{"Inactive"}} </span>
                    @endif
                </td>
                <td> <a href="{{'/delete-customer-trash'}}/{{$customer->customer_id}}" class="badge bg-danger">Delete</a></td>
                <td><a href="{{'/restore-customer'}}/{{$customer->customer_id}}" class="badge bg-warning">Restore</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection