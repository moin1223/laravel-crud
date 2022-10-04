<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>

<div class="container mt-3">
<h2>New Category</h2>
<form method="POST" action="/category-store">
  @csrf
  <div class="mb-3 mt-3">
    <label>Title</label>
    <input type="text"  name="title" class="form-control" />
    @if($errors->has('title'))
    <p class="text-danger">{{ $errors->first('title')}}</p>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
          
  
</body>
</html> -->
