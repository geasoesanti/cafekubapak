<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CAFEKU INDONESIA</title>
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
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        .linkcard {
            text-decoration: none;
            color: #4b5320;
        }

        .card {
            width: 320px;
            height: 220px;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(75, 83, 32, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            font-weight: 600;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .card:hover {
            background-color: #fafbf8;
            border-color: #4b5320;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(75, 83, 32, 0.15);
        }
    </style>
</head>
<body>
    <div class='body'>
        <div class='navbar'>
            <div class='nav1'>
                <img src="assets/logo.png" alt="Logo" width='45px'>
                <div class='judul'>CAFEKU INDONESIA</div>
            </div>
            <div class='nav2'>
                <a class='logout' href="index.php">Keluar</a>
            </div>
        </div>
        <div class='main'>
            <a class='linkcard' href='pengguna.php'>
                <div class='card'>Atur Pengguna</div>
            </a>
            <a class='linkcard' href='produk.php'>
                <div class='card'>Atur Produk</div>
            </a>
        </div>
    </div>
</body>
</html>