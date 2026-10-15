<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna - CAFEKU INDONESIA</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .body {
            height: 100dvh;
            width: 100dvw;
            background-color: #f4f6f0;
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
            color: #4b5320;
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
            gap: 12px;
        }

        .judultabel {
            font-weight: bold;
            font-size: 22px;
            color: #4b5320;
        }

        .linktambah {
            display: flex;
            flex-direction: row;
            width: 650px;
            text-decoration: none;
            padding: 0;
            margin-bottom: 5px;
        }

        /* Tombol Tambah Data Khusus */
        .linktambah a {
            text-decoration: none;
            padding: 8px 18px;
            background-color: #d8dfcd;
            color: #4b5320;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
        }

        .linktambah a:hover {
            background-color: #c7d1bc;
        }

        /* Styling Tabel */
        .tabel {
            background-color: white;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(75, 83, 32, 0.08);
            overflow-x: auto;
            border-collapse: collapse;
            width: 650px;
        }

        .tabel th {
            background-color: #4b5320;
            color: #fdfbf7;
            padding: 14px 16px;
            text-align: left;
            font-size: 14px;
        }

        .tabel td {
            padding: 13px 16px;
            border-bottom: 1px solid #f0f2eb;
            color: #374151;
            font-size: 14px;
            white-space: nowrap; /* Mencegah teks terlipat */
        }

        .tabel tr:hover {
            background-color: #fafbf8;
        }

        /* Memperbaiki Tombol Aksi (Edit & Hapus) di dalam Tabel agar tidak bertumpuk */
        .tabel td .btn-edit {
            text-decoration: none;
            padding: 5px 12px;
            background-color: #d8dfcd;
            color: #4b5320;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            margin-right: 4px;
        }

        .tabel td .btn-edit:hover {
            background-color: #c7d1bc;
        }

        .tabel td .btn-hapus {
            text-decoration: none;
            padding: 5px 12px;
            background-color: #fde8e8;
            color: #9b1c1c;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .tabel td .btn-hapus:hover {
            background-color: #fbd5d5;
        }
    </style>
</head>
<body>
    <div class='body'>
        <div class='navbar'>
            <div class='nav1'>
                <a href="dashboard.php" class="btn-back">&larr; Dashboard</a>
                <img src="assets/logo.png" alt="Logo" width='45px'>
                <div class='judul'>CAFEKU INDONESIA</div>
            </div>
            <div class='nav2'>
                <a class='logout' href="index.php">Keluar</a>
            </div>
        </div>
        <div class='main'>
            <p class='judultabel'>Daftar Pengguna</p>
            <div class='linktambah'>
                <a href='tambahpengguna.php'>+ Tambah Data Pengguna</a>
            </div>
            
            <?php
                include("api/pengguna/selectpengguna.php");
            ?>
            
            <table class='tabel'>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    if (isset($datas) && count($datas) > 0) {
                        for ($i=0; $i < count($datas); $i++) {    
                ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo htmlspecialchars($datas[$i]['nama']); ?></td>
                    <td><?php echo htmlspecialchars($datas[$i]['username']); ?></td>
                    <td><?php echo htmlspecialchars($datas[$i]['alamat']); ?></td>
                    <td><?php echo htmlspecialchars($datas[$i]['nohp']); ?></td>
                    <td>
                        <a href='editpengguna.php?id=<?php echo $datas[$i]['id']; ?>' class="btn-edit">Edit</a>
                        <a href="api/pengguna/deletepengguna.php?id=<?php echo $datas[$i]['id']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' style='text-align: center;'>Belum ada data pengguna.</td></tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>