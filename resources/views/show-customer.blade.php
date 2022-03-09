@extends('layouts.main')

@push('title')
<title>Show Customer page </title>
@endpush

{{-- this is main body parser container  --}}
@section('body-content')

<div class="container bg-dark text-white py-4 my-4">

    @if ($searchKey != "")
    {!!'<h1 class="text-white"> Search Result For - <em>'.$searchKey .'</em>   </h1> <a class="btn btn-secondary" href="/show-customer"> Reset </a> ' !!}
    @else
    {!! '<h1 class="text-white "> All Customers Details </h1>'  !!}               
    @endif

</div>


<div class="table-responsive">
    @if (count($customers) > 0)
    <table class="table">
        <thead class="text-center">
            <tr>
                <th>SNo.</th>
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
            @php
                $index = 0;
            @endphp
            @foreach ($customers as $customer)
                    @php
                    $index++;
                @endphp
            <tr>
                <td>{{$index}}</td>
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
                <td>{{myDateFormat($customer->dob,"d.m.Y")}}</td>

                <td>
                    @if ($customer->status == 1)
                    <span class="text-success"> {{"Active"}} </span>
                    @else
                    <span class="text-danger"> {{"Inactive"}} </span>
                    @endif
                </td>
                <td> <a href="{{'/customer/delete'}}/{{$customer->customer_id}}" class="badge bg-danger">Trash</a></td>
                <td><a href="{{'/customer/edit'}}/{{$customer->customer_id}}" class="badge bg-warning">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else

    
        {!! '<div class=" text-center alert alert-secondary" role="alert">
           Nothing to show!
          </div> '!!}
    @endif
</div>
<div class="row text-center "> 
        {{ $customers->links() }}
</div>

@endsection