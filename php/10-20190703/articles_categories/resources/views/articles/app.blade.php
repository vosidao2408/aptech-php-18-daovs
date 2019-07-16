<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
  <link rel="stylesheet" href="{{asset('/select2-4.0.7/dist/css/select2.min.css')}}">
  <script src="{{asset('/select2-4.0.7/dist/js/select2.min.js')}}"></script>
  
  </head>
  <body>
  <div class="container my-3">
      <div class="row">
          <div class="col-4 d-flex justify-content-start">
            <form action="{{asset('articles')}}" method="get">
              <button class="btn btn-primary rounded-0 font-weight-bold ">Home</button>
            </form> 
            <form action="{{asset('categories')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold mx-5 ">Category</button>
            </form>
          </div>
          <div class="col-4 text-center">
            <h1> Articles-Categories </h1>
          </div>
          <div class="col-4 d-flex justify-content-end">
          <form action="{{asset('articles/create')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold ">Create Article</button>
            </form>
          </div>
      </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-12">
      @section('sidebar')
      @show
      </div>
    </div>
  </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  </body>
  @stack('scripts')
</html>