@extends('articles.app')
@section('sidebar')
  <form action="{{asset('/articles/'.$article->slug)}}" method="post">
  {{ method_field('PUT') }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <textarea name="content" id="editor">{{$article->content}}</textarea>
</body>
<script>
  CKEDITOR.replace('editor', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});

    //vao user tao 2 thu muc .ckfinder va temp trong userfiles
</script>
<div class="container w-50 my-3">
  <div class="row">
    <div class="col-12">
<div class="form-group">
  <label for="">Title</label>
  <input type="text" class="form-control" name="title" id="" placeholder="Title" value="{{$article->title}}">
</div>
<div class="form-group">
  <label for="">Slug</label>
  <input type="text" class="form-control" name="slug" id="" placeholder="Slug" value="{{str_replace('-',' ',$article->slug)}}">
</div>
<div class="form-group">
  <label for="">Description</label>
  <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$article->description}}">
</div>
<div class="form-group">
  <label for="">Image Path</label>
  <input type="text" class="form-control" name="image_path" id="" placeholder="Image Path" value="{{$article->image_path}}">
</div>


<button type="submit" class="btn btn-primary btn-block">Edit</button>

    </div>
  </div>
</div>
</form>
@endsection