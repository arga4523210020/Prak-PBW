<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang di LaraPress</title>
    <style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to bottom right, #f0f4ff, #e6eaff);
        color: #333;
    }

    header {
        background: #4a63e7;
        color: white;
        padding: 1rem 2rem;
        text-align: center;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-weight: bold;
    }

    nav a:hover {
        text-decoration: underline;
    }

    nav a.active {
        border: 2px solid white;
        padding: 6px 14px;
    }

    main {
        max-width: 800px;
        margin: 60px auto;
        background: white;
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        text-align: center;
    }

    main h1 {
        color: #4a63e7;
        margin-bottom: 20px;
    }

    main p {
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 40px;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        background: #4a63e7;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        font-size: 1.1rem;
        transition: background 0.3s;
    }

    .btn:hover {
        background: #3548c4;
    }
    </style>
</head>
<body>
    <header>
    <h1>LaraPress</h1>
    <nav>
        <a href="/" class="active">Beranda</a>
        <a href="/tentang-kami">Tentang</a>
        <a href="/kontak">Kontak</a>
    </nav>
    </header>

    <main>
    <h1>Selamat Datang di Blog LaraPress</h1>
    <p>Ini adalah halaman utama dari aplikasi blog sederhana kita. Jelajahi fitur dan informasi lebih lanjut di halaman lain.</p>
    </main>
</body>
</html>
