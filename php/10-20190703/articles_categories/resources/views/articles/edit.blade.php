<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
</head>


<body>
  <form action="{{asset('/articles')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <textarea name="content" id="editor" value=""></textarea>
</body>
<script>
  CKEDITOR.replace('editor', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});

    //vao user tao 2 thu muc .ckfinder va temp trong userfiles
</script>
<br>
<input type="text" name="title" placeholder="Title" value="{{$article->title}}"> <br> <br>
<input type="text" name="slug" placeholder="Slug" value="{{$article->slug}}"> <br> <br>
<input type="text" name="description" placeholder="Description" value="{{$article->description}}"> <br> <br>
<input type="text" name="image_path" placeholder="Image_Path" value="{{$article->image_path}}">
  <br><br>
  <label for="">Category</label>
  <select name="" id="">
  @foreach($categories as $category)
  <option value="">{{$category->name}}</option>
  @endforeach
  </select>
  <br><br>
<button type="submit">Submit</button>
</form>
</html>