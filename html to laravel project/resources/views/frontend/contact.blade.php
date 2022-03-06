{{-- extend the main layouts  --}}
@extends('frontend.layouts.main')




{{-- parse this section in frontend main layouts  --}}
@section('main-body')


    

  <div class="container">
    <h2 class="text-center my-2">Contact Info </h2>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mention your query</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="button" class="btn btn-primary  mb-4"> Send </button>
    </form>
  </div>

  <div class="container my-4">
    <div class="card mx-2">
      <div class="card-header">
        Contact Us
      </div>
      <div class="card-body">
        <h5 class="card-title">Contact</h5>
        <p class="card-text">With supporting any kinds of problem feel free to contact us . Here is Our contact Info</p>
        <p class="card-text"> Email Us now <b> PanditProgrammer@gmail.com </b></p>
        <p class="card-text"> Call Us now <b> 98234837xx </b></p>
        <a href="#" class="btn btn-primary"> Contact</a>
      </div>
    </div>
  </div>
  <!-- footer starts here -->
  <div class="container ">
    <h2 class="text-center py-2">Explore more Here</h2>
    <div class="card-group">
      <div class="card mx-2">
        <img src="images/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Latest Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem, repellat commodi
            nemo neque ipsam. Voluptates aliquam consequatur, deleniti eos soluta ipsam nobis voluptate voluptatum unde
            a, accusantium mollitia qui?</p>

        </div>
      </div>
      <div class="card mx-2">
        <img src="images/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trending Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel mollitia asperiores
            pariatur eius distinctio explicabo, aspernatur eveniet tempore quibusdam sed non quo eos veniam quos omnis
            laborum qui vero voluptates..</p>
        </div>
      </div>
      <div class="card">
        <img src="images/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Up Coming Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum perferendis iure ex,
            deleniti earum ullam odit quibusdam obcaecati fugit, commodi eos? Error illo est quaerat laudantium nisi
            debitis, veniam aut.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Last footer  -->

  <!-- /container -->
  <hr>

  </main>

@endsection