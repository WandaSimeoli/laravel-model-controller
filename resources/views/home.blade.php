<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>
<body>
<h1 class="text-center">Laravel Model Controller</h1>
<div class="container-sm bg-info-subtle p-2">
    <div class="row justify-content-center mt-3">
        @foreach($movies as $movie)
        <div class="col-4 card m-2 bg-danger-subtle">
           <h3 class="card-title text-center">
           {{ $movie->title }}
           </h3>
          <div class="card-body">  
            <h4>Original Title: {{$movie->original_title }} </h4>
          <div>Nationality: {{$movie->nationality }}</div>
          <div>Year: {{$movie->date }}</div>
          </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>