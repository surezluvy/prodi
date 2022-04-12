<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('admin-post') }}">< Kembali</a>
    </div>
  </div>
</nav>

  <form method="post" class="container" style="margin-top: 65px" action="{{ route('admin-add-post-process') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="usr">Judul:</label>
      <input type="text" class="form-control" id="usr" name="title">
    </div>
    <label for="formFile" class="form-label">Thumbnail:</label>
    <input class="form-control" type="file" id="formFile" name="thumbnail"><br>
    <label for="sel1">Silahkan pilih kategori:</label>
    <select class="form-control" id="sel1" name="category_id">
      @foreach($menus as $c)
        @if(\App\Models\Post::where('category_id', $c->category_id)->first())
        <option value="{{ $c->category_id }}">{{ $c->name }}</option>
        @endif

        @if(!\App\Models\Page::where('category_id', $c->category_id)->first())
        <option value="{{ $c->category_id }}">{{ $c->name }}</option>
        @endif
        <!-- <option value="{{ $c->category_id }}">{{ $c->name }}
          @if(\App\Models\Post::where('category_id', $c->category_id)->first())
             - [POST]
          @elseif(\App\Models\Page::where('category_id', $c->category_id)->first()))
            - [PAGE]
          @elseif(\App\Models\Post::where('category_id', $c->category_id)->first() && \App\Models\Page::where('category_id', $c->category_id)->first()))
            - [POST, PAGE]
          @endif
        </option> -->
      @endforeach
    </select><br>
    <textarea id="summernote" name="content"></textarea>
    <button type="submit" class="btn btn-primary btn-block">Terbitkan</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote({
        focus,
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
      });
    });
  </script>
</body>
</html>