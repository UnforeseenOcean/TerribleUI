<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Yes</title>
  <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
</head>
<body>
  @foreach (App\Garbage::all() as $item)
<p>{{$item->number}}</p>
  @endforeach
</body>
</html>