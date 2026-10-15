<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna - CAFEKU INDONESIA</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .body {
            height: 100dvh;
            width: 100dvw;
            background-color: #f4f6f0; /* Cream terang / soft neutral background */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .navbar {
            height: 10dvh;
            background-color: #ffffff;
            width: 96dvw;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .nav1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
        }

        /* Tombol Back ke pengguna.php */
        .btn-back {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #e2e8df;
            color: #4b5320;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn-back:hover {
            background-color: #d1dad0;
        }

        .judul {
            font-weight: bold;
            color: #4b5320; /* Hijau Army */
            letter-spacing: 0.5px;
        }

        .logout {
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 8px;
            background-color: #d9534f;
            color: white;
            font-size: 14px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: opacity 0.2s;
        }

        .logout:hover {
            opacity: 0.9;
        }

        .main {
            height: 90dvh;
            width: 100dvw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .card {
            width: 450px;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(75, 83, 32, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 12px;
            padding: 30px 20px;
            box-sizing: border-box;
        }

        .card .judul-form {
            font-size: 20px;
            font-weight: bold;
            color: #4b5320;
            margin-bottom: 5px;
        }

        .inputuser {
            width: 85%;
            padding: 10px 16px;
            border-radius: 8px;
            border: 1px solid #d8dfcd;
            outline: none;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        .inputuser:focus {
            border-color: #4b5320;
        }

        .tombol {
            background-color: #4b5320; /* Hijau Army */
            color: #fdfbf7;
            padding: 12px 0;
            width: 89%;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.2s;
            box-shadow: 0 4px 10px rgba(75, 83, 32, 0.2);
            margin-top: 5px;
        }

        .tombol:hover {
            background-color: #3b4219;
        }
    </style>
</head>
<body>
    <div class='body'>
        <div class='navbar'>
            <div class='nav1'>
                <!-- Tombol Kembali ke halaman pengguna.php -->
                <a href="pengguna.php" class="btn-back">&larr; Kembali</a>
                <img src="assets/logo.png" alt="Logo" width='45px'>
                <div class='judul'>CAFEKU INDONESIA</div>
            </div>
            <div class='nav2'>
                <a class='logout' href="index.php">Keluar</a>
            </div>
        </div>
        <div class='main'>
            <form action="api/pengguna/insertpengguna.php" method="post">
                <div class="card">
                    <p class="judul-form">Form Tambah Pengguna</p>
                    <input name='nama' class="inputuser" type="text" placeholder="Nama Pengguna" required />
                    <input name='username' class="inputuser" type="text" placeholder="Username" required />
                    <select name='jeniskelamin' class="inputuser" type="text" placeholder="Jenis Kelamin" required>
                    <input name='password' class="inputuser" type="password" placeholder="Password" required />
                    <input name='alamat' class="inputuser" type="text" placeholder="Alamat" required />
                    <input name='nohp' class="inputuser" type="text" placeholder="Nomor HP" required />
                    <button class="tombol" type="submit">Tambah Pengguna</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>