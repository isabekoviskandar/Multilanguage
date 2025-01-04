<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @php
      $lang = session()->get('lang');
      $lang = $lang ?? 'uz';
    @endphp

    <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <form action="{{route('store')}}" method="post">
              @csrf
              <div class="col-4">
                <label for="name" class="form-label">Uzbek</label>
                <input type="name" name="name['uz']">
              </div>
              <div class="col-4">
                <label for="name" class="form-label">Rusaan</label>
                <input type="name" name="name['ru']">
              </div>
              <div class="col-4">
                <label for="name" class="form-labels">English</label>
                <input type="name" name="name['en']">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            @foreach ($categories as $category)
                <h6>{{$category->name['en']}}</h6>                
            @endforeach
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>