
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- form starts here -->
    <div class="container ">
        <h1 class="text-center my-4">Upload Image Here </h1>
        
        <form action="/upload" method="POST" accept-charset="UTF-8" class="form p-2" enctype="multipart/form-data">
        @csrf
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-md-3 col-form-label">Profile Pic</label>
                <div class="col-sm-10 col-md-6">
                    <input class="form-control" id="image" name="image" type="file">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 col-md-6">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>
    <!-- form ends here -->