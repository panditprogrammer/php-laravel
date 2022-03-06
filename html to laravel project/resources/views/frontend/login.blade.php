{{-- extend the main layouts  --}}
@extends('frontend.layouts.main')




{{-- parse this section in frontend main layouts  --}}
@section('main-body')


    

  <!-- form starts here -->
  <div class="container-sm">
    <h1 class="text-center">Log In here</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <button type="submit" class="btn btn-success">Log In</button>
    </form>
    <p class="text-center px-2 text-primary"> Not a member <a href="signin.html"
        class=" btn  btn-outline-secondary">Sing In</a></p>
  </div>
  <!-- form ends here -->

  <!-- footer starts here -->


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-group">
          <div class="card">
            <div class="card-body">
              <h4 class="text-center text-secondary p-4">contact with us</h4>
              <p> <b>Go to contact page ...</b> <button class="btn btn-primary ">Contact via..</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>


@endsection