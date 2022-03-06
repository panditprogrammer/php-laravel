{{-- extend the main layouts  --}}
@extends('frontend.layouts.main')




{{-- parse this section in frontend main layouts  --}}
@section('main-body')


    
<!-- body starts here -->
<div class="jumbotron text-center container  ">
    <div class="container ">
      <h1 class="display-3">Welcome To IT World!</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, dolores. Pariatur mollitia voluptas amet est
        ipsam eaque id eligendi voluptatibus quaerat? Molestiae, nemo? Voluptatibus, praesentium? Lorem, ipsum dolor sit
        amet consectetur adipisicing elit. Culpa, aliquam vitae.
      </p>
      <h3 class="text-center text-dark">Here is the more information about coding and programming.</h3>
      
    </div>
  </div>

  <div class="container my-4">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2 class="text-info">Web deveolpment</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
          condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
          Donec sed odio dui. </p>
        <p><a class="btn btn-outline-success" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2 class="text-info">Software deveolpment</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
          condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
          Donec sed odio dui. </p>
          <p><a class="btn btn-outline-success" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2 class="text-info">Android deveolpment</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
          felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
          massa justo sit amet risus.</p>
          <p><a class="btn btn-outline-success" href="#" role="button">View details »</a></p>
      </div>
    </div>
    
    <hr>
    
  </div>
  <!-- body starts here -->
  
  <!-- footer starts here -->
  <div class="container">
    <div class="card-group">
      <div class="card mx-1">
        <img src="{{url('frontend/images/1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-info">Latest Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem, repellat commodi
            nemo neque ipsam. Voluptates aliquam consequatur, deleniti eos soluta ipsam nobis voluptate voluptatum unde
            a, accusantium mollitia qui?</p>
        </div>
      </div>
      <div class="card mx-1">
        <img src="{{url('frontend/images/4.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-info">Trending Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel mollitia asperiores
            pariatur eius distinctio explicabo, aspernatur eveniet tempore quibusdam sed non quo eos veniam quos omnis
            laborum qui vero voluptates..</p>
        </div>
      </div>
      <div class="card mx-1">
        <img src="{{url('frontend/images/3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-info">Up Coming Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum perferendis iure ex,
            deleniti earum ullam odit quibusdam obcaecati fugit, commodi eos? Error illo est quaerat laudantium nisi
            debitis, veniam aut.</p>
          </div>
        </div>
      </div>
  </div>
  
  @endsection