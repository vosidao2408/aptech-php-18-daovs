<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="{{asset('articles')}}" method="get">
              <button class="btn btn-primary rounded-0 font-weight-bold my-3">Article</button>
            </form>
  <table class="table table-dark table-striped table-hover table-bordered text-center">
      <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
    <td>
    <div class="d-flex justify-content-around">
           <form action="{{asset('categories/'.$category->id)}}" method="GET">
            <button type="submit" class="btn btn-success">Show</button>
           </form>
           <form action="{{asset('categories/'.$category->id.'/edit')}}" method="GET"> 
            <button type="submit" class="btn btn-primary">Update</button>
           </form>
           <form action="{{asset('categories/'.$category->id)}}" method="POST">
           <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">  
            <button type="submit" class="btn btn-warning">Delete</button>
           </form>
           </div>
    </td>
    </tr>
    @endforeach 
      </tbody>
      </table>
      <form action="{{asset('categories/create')}}" method="get">
        <button type="submit" class="btn btn-success">Add</button>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>