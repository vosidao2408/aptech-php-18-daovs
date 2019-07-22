@extends('layout.app')
@section('headscripts')
    <script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder/ckfinder.js')}}"></script>
@endsection
@section('content')
<form action="{{asset('/posts')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
    <textarea name="content" id="editor">This is some sample content.</textarea>
  <script>
    CKEDITOR.replace('editor', {
      filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder/ckfinder.html')}}",
      filebrowserUploadUrl: "{{asset('/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
      //vao user tao 2 thu muc .ckfinder va temp trong userfiles
  </script>
  <div class="container w-50 my-3">
    <div class="row">
      <div class="col-12">
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" name="title" id="" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="">Slug</label>
    <input type="text" class="form-control" name="slug" id="" placeholder="Slug">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" class="form-control" name="description" id="" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Add</button>
      </div>
    </div>
  </div>
  </form>
@endsection