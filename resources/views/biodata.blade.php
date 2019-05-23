<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tutorial #4</title>
</head>
<body>
  <h1>Tutorial Laravel</h1>
  <a href="https://iwanbazz.github.io">iwanbazz.github.io</a>
  <br>
  <p>Nama: {{ $nama }}</p>
  <br>
  <p>Mata Kuliah</p>
  <ul>
  @foreach($matkul as $m)
  <li>{{ $m }}</li>
  @endforeach
  </ul>
</body>
</html>
