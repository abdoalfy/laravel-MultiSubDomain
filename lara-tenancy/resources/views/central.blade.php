<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br>
        <br>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <form method="post" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword3" class="form-label">enter your domain</label>
            <input type="text" name="domain" class="form-control" id="exampleInputPassword3">
          </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
   
</body>
</html>