<?php
// =================================================================
// PRAKTIKUM 1: APLIKASI PENDAFTARAN EVENT
// =================================================================

// KONSEP: CONSTANT
// Constant digunakan untuk nilai yang tidak akan pernah berubah.
define('NAMA_EVENT', 'Belajar PHP 2025');
define('FILE_PENDAFTARAN', 'pendaftar.txt');

// KONSEP: GLOBAL VARIABLE
// Variabel ini akan digunakan untuk menampilkan pesan status ke pengguna.
$status_message = '';
$error_messages = [];

// KONSEP: FUNGSI & REGEX
// Fungsi untuk memvalidasi format email menggunakan Regular Expression.
function validateEmail($email) {
    // Pola regex untuk email
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($pattern, $email);
}

// Fungsi untuk memvalidasi format tanggal DD-MM-YYYY menggunakan Regular Expression.
function validateDate($date) {
    // Pola regex untuk tanggal DD-MM-YYYY
    $pattern = '/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(19[0-9]{2}|20[0-9]{2})$/';
    return preg_match($pattern, $date);
}

// KONSEP: FORM (POST) HANDLING
// Cek apakah request yang datang adalah POST (artinya form telah disubmit).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // KONSEP: VARIABLE
    // Mengambil data dari form dan membersihkannya dari tag HTML berbahaya.
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);

    // Validasi input
    if (empty($nama) || empty($email) || empty($tanggal_lahir)) {
        $error_messages[] = "Semua field wajib diisi.";
    }
    if (!validateEmail($email)) {
        $error_messages[] = "Format email tidak valid.";
    }
    if (!validateDate($tanggal_lahir)) {
        $error_messages[] = "Format tanggal lahir harus DD-MM-YYYY.";
    }

    // Jika tidak ada error, simpan data
    if (empty($error_messages)) {
        // KONSEP: SIMPAN KE FILE TXT
        // Format data yang akan disimpan (dipisahkan oleh semicolon)
        $data_pendaftar = "{$nama};{$email};{$tanggal_lahir}\n";

        // Menyimpan data ke file pendaftar.txt.
        // FILE_APPEND memastikan data baru ditambahkan di akhir file, bukan menimpa.
        file_put_contents(FILE_PENDAFTARAN, $data_pendaftar, FILE_APPEND);

        // Mengatur pesan sukses
        $status_message = "Terima kasih, {$nama}! Pendaftaran Anda untuk event " . NAMA_EVENT . " berhasil.";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Event Digital</title>
    <style>
        /* Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
            color: #333;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        p {
            text-align: center;
            margin-bottom: 25px;
            color: #555;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #6a5acd;
            box-shadow: 0 0 5px rgba(106,90,205,0.3);
        }

        button {
            display: inline-block;
            width: 100%;
            padding: 14px;
            background: #6a5acd;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        button:hover {
            background: #5941a9;
            transform: translateY(-2px);
        }

        .error {
            background: #ffe6e6;
            border: 1px solid #ff4d4d;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #cc0000;
        }

        .success {
            background: #e6ffe6;
            border: 1px solid #33cc33;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #267326;
            font-weight: bold;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 14px;
            text-align: left;
        }

        th {
            background: #6a5acd;
            color: white;
        }

        tr:nth-child(even) { background-color: #f9f9f9; }

        tr:hover { background-color: #f1f1ff; }

        /* Responsif */
        @media (max-width: 600px) {
            .container { padding: 20px; }
            th, td { font-size: 0.9rem; padding: 10px; }
            button { font-size: 0.9rem; padding: 12px; }
        }
    </style>
</head>
<body>
    <?php if (!empty($status_message)): ?>
    <p class="success"><?php echo $status_message; ?></p>
<?php endif; ?>

<?php if (!empty($error_messages)): ?>
    <div class="error">
        <strong>Terjadi kesalahan:</strong>
        <ul>
            <?php foreach ($error_messages as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    <h1>Form Pendaftaran Event "Belajar PHP 2025"</h1>
    <p>Silakan isi data diri Anda untuk mendaftar pada event kami.</p>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Alamat Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir (DD-MM-YYYY):</label>
            <input type="text" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <button type="submit">Daftar Sekarang</button>
    </form>

    <hr>

    <h2>Daftar Peserta yang Sudah Mendaftar</h2>
    <table>
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Cek apakah file pendaftar.txt ada
        if (file_exists(FILE_PENDAFTARAN)) {
            // Membaca isi file baris per baris ke dalam array
            $pendaftar = file(FILE_PENDAFTARAN, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Melakukan loop untuk setiap baris data
            foreach ($pendaftar as $data) {
                // Memecah baris data berdasarkan pemisah semicolon
                list($nama, $email, $tanggal_lahir) = explode(';', $data);
                echo "<tr>";
                echo "<td>" . htmlspecialchars($nama) . "</td>";
                echo "<td>" . htmlspecialchars($email) . "</td>";
                echo "<td>" . htmlspecialchars($tanggal_lahir) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Belum ada pendaftar.</td></tr>";
        }
        ?>
    </tbody>
</table
    </body>
</html>