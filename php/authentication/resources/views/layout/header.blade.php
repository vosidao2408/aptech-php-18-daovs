<div class="bg-dark d-flex justify-content-between">
      <div class="d-flex">
        <a class=" navbar-brand text-white m-3" href="#">My Blog</a>
        <ul class="list-unstyled d-flex m-0 my-4 ">
          <li><a class="text-white px-3" href="{{asset('articles')}}">Home</a></li>
          <li>
          <div class="dropdown show">
  <a class="text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                     <li><a class="text-dark mx-3" href="{{asset('categories/'.$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="d-flex">
        <button class="btn btn-outline-success m-3 " type="submit">
          Sign In
        </button>
        <button class="btn btn-outline-primary m-3 " type="submit">
          Register
        </button>
      </div>
    </div>