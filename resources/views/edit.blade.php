<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin: 200px">
        <h1>Edit Product</h1>
        <form action="/update-product/{{ $shoe->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="Name" class="form-label">Shoe Name</label>
              <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="Name" value="{{ $shoe->Name }}">
              @error('Name')
                  <p style="color: red;">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
                <label for="Price" class="form-label">Price</label>
                <input type="number" class="form-control" id="Price" aria-describedby="emailHelp" name="Price" value="{{ $shoe->Price }}">
                @error('Price')
                  <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Size" class="form-label">Size</label>
                <input type="number" class="form-control" id="Size" aria-describedby="emailHelp" name="Size" value="{{ $shoe->Size }}">
                @error('Size')
                  <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Color" class="form-label">Color</label>
                <input type="text" class="form-control" id="Color" aria-describedby="emailHelp" name="Color" value="{{ $shoe->Color }}">
                @error('Color')
                  <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="Photo" aria-describedby="emailHelp" name="Photo">
                @error('Photo')
                  <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="">Category</label><br>

              @forelse ($categories as $c)
                <input type="radio" id="{{ $c->id }}" name="CategoryId" value="{{ $c->id }}">
                <label for="{{ $c->id }}">{{ $c->Name }}</label><br>
              @empty
                  <p>No category added.</p>
              @endforelse

              @error('CategoryId')
                <p style="color: red;">{{ $message }}</p>
              @enderror
          </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>