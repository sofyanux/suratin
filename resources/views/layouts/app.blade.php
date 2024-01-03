<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Suratin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Toggler button for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('surat.index') }}">Surat</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('arsip.index') }}">Arsip</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('laporan.index') }}">Laporan</a></li>
                    <!-- Tambahkan menu sesuai dengan kebutuhan -->
                </ul>

                <!-- Menu untuk Profile dan Logout -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <!-- Bagian Utama Konten Aplikasi -->
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-2">
        <!-- Bagian Footer -->
        <p>&copy; 2024 Suratin App</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
