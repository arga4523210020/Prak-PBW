<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami - LaraPress</title>
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
        padding: 40px;
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
        margin-bottom: 30px;
    }

    .btn-back {
        display: inline-block;
        padding: 12px 24px;
        background: #4a63e7;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        font-size: 1.05rem;
        transition: background 0.3s;
    }

    .btn-back:hover {
        background: #3548c4;
    }
    </style>
</head>
<body>
    <header>
    <h1>LaraPress</h1>
    <nav>
        <a href="/">Beranda</a>
        <a href="/tentang-kami" class="active">Tentang</a>
        <a href="/kontak">Kontak</a>
    </nav>
    </header>

    <main>
    <h1>Tentang LaraPress</h1>
    <p>
        LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari
        dasar-dasar framework <strong>Laravel 12</strong>.
        Tujuan utama dari LaraPress adalah memberikan pemahaman yang mudah
        dan terstruktur tentang konsep MVC, routing, dan pengelolaan konten.
    </p>

    <a href="/" class="btn-back">← Kembali ke Halaman Utama</a>
    </main>
</body>
</html>
