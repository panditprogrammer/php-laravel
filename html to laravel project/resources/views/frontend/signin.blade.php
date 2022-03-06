{{-- extend the main layouts  --}}
@extends('frontend.layouts.main')




{{-- parse this section in frontend main layouts  --}}
@section('main-body')


<!-- form starts here -->
<div class="container ">
  <h1 class="text-center my-4">Sign Up Here </h1>

  {!! Form::open(['url' => 'foo/bar','class'=>"form p-2"]) !!}
    
    
    {{-- <form> --}}
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-md-3 col-form-label">Name</label>
      <div class="col-sm-10 col-md-6">
        {!! Form::text('email', '',["class"=>"form-control", "id"=>"name"]) !!}
        {{-- <input type="text" > --}}
      </div>
    </div>
    <div class="form-group row">
      <label for="mobile" class="col-sm-2 col-md-3 col-form-label">Mobile</label>
      <div class="col-sm-10 col-md-6">
        {!! Form::tel('mobile', '',["class"=>"form-control", "id"=>"mobile"]) !!}
        {{-- <input type="text" class="form-control" id="inputEmail3"> --}}
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-md-3 col-form-label">Email</label>
      <div class="col-sm-10 col-md-6">
        {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
        {!! Form::email('email', '',["class"=>"form-control", "id"=>"email"]) !!}
        
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-md-3 col-form-label">Password</label>
      <div class="col-sm-10 col-md-6">
        {!! Form::password('password', ['class' => 'form-control', "id"=>"password"]) !!}
        {{-- <input type="password" class="form-control" id="inputPassword3"> --}}
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 col-md-3 pt-0">Gender</legend>
        <div class="col-sm-10 col-md-6">

          <div class="form-check">
            <label class="form-check-label" for="gender1">
            {{-- <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1" checked> --}}
            {!! Form::radio('gender', '',true,['class' => 'form-check-input',"id"=>"gender1"]) !!}
            Male
          </label>
        </div>
        
        <div class="form-check">
          <label class="form-check-label" for="gender2">
            {{-- <input class="form-check-input" type="radio" name="Gender" id="gender2" value="option2"> --}}
            {!! Form::radio('gender', '','',['class' => 'form-check-input',"id"=>"gender2"]) !!}
            Female
          </label>
        </div>
        
        <div class="form-check ">
          <label class="form-check-label" for="gender3">
            {{-- <input class="form-check-input" type="radio" name="Gender" id="gender3" value="option3"> --}}
              {!! Form::radio('gender', '', '',['class' => 'form-check-input',"id"=>"gender3"]) !!}
              Other
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group row">
      <label for="image" class="col-sm-2 col-md-3 col-form-label">Profile Pic</label>
      <div class="col-sm-10 col-md-6">
        {!! Form::file('image',["class"=>"form-control", "id"=>"image"]) !!}
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-sm-10 col-md-6">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
    <div class="form-group text-center my-4">
      <button type="button" class="btn border">Already Registered <a href="login.html">LogIn Now</a></button>
    </div>

  {{-- </form> --}}
  {!! Form::close() !!}
</div>
<!-- form ends here -->
<!-- footer starts here -->
<div class="container">
  <div class="card-group">
    <div class="card mx-2">
      <img src="{{url('frontend/images/1.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Latest Courses</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem, repellat commodi
          nemo neque ipsam. Voluptates aliquam consequatur, deleniti eos soluta ipsam nobis voluptate voluptatum unde
          a, accusantium mollitia qui?</p>
      </div>
    </div>
    <div class="card mx-2">
      <img src="{{url('frontend/images/4.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Trending Courses</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel mollitia asperiores
          pariatur eius distinctio explicabo, aspernatur eveniet tempore quibusdam sed non quo eos veniam quos omnis
          laborum qui vero voluptates..</p>
      </div>
    </div>
    <div class="card mx-2">
      <img src="{{url('frontend/images/3.jpg')}}" class="card-img-top" alt="...">
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