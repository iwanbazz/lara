<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Latihan #8 Sistem template blade</title>
</head>
<body>
  <header>
    <h2>Blog Iwan</h2>
    <nav>
      <a href="/blog">Home</a>
      <a href="/blog/tentang">Tentang</a>
      <a href="/blog/kontak">Kontak</a>
    </nav>
  </header>
  <hr/>
  <br/>
  <br/>
  <!-- judul halaman blog -->
  <h3> @yield('judul_halaman') </h3>
  <!-- konten blog -->
  @yield('konten')
  <br/>
  <br/>
  <hr/>
  <footer><p>&copy; <a href="https://iwanbazz.github.io">Iwanbazz</a>. 2019</p></footer>
</body>
</html>
