<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel #8:Sistem Template Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog MalasNgoding</h2>
        <nav>
            <a href="/blog">HOME</a>

            <a href="/blog/tentang">TENTANG</a>

            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>

    <hr/>
    <br/>
    <br/>
    
    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman')</h3>

    <!-- bagian konten blog -->
    @yield('konten')
     <br/>
     <br/>
     <hr/>
     <footer>
        <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019"</p>
     </footer>
</body>
</html>