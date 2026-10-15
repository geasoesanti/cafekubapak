<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page - CAFEKU INDONESIA</title>
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
      .card {
        width: 420px;
        height: 420px;
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(75, 83, 32, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 15px;
        padding: 20px;
        box-sizing: border-box;
      }

      .inputuser {
        width: 80%;
        padding: 12px 16px;
        border-radius: 10px;
        border: 1px solid #d8dfcd;
        outline: none;
        font-size: 14px;
        transition: border-color 0.2s;
      }

      .inputuser:focus {
        border-color: #4b5320;
      }

      .judul {
        font-size: 20px;
        font-weight: bold;
        color: #4b5320; /* Hijau Army */
        margin-bottom: 5px;
      }

      .promo {
        height: 15dvh;
        width: 80dvw;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        max-width: 600px;
      }
      .section {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        gap: 8px;
        font-weight: 600;
        color: #4b5320;
      }

      .tombol {
        background-color: #4b5320; /* Hijau Army */
        color: #fdfbf7;
        padding: 12px 0;
        width: 88%;
        border-radius: 10px;
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
    <div class="body">
      <form action="api/pengguna/ceklogin.php" method="post">
        <div class="card">
          <img src="assets/logo.png" width="100px" alt="Logo" />
          <p class="judul">CAFEKU INDONESIA</p>
          <input name='username' class="inputuser" type="text" placeholder="Username" required />
          <input name='password' class="inputuser" type="password" placeholder="Password" required />
          <button class="tombol" type="submit">LOGIN</button>
        </div>
      </form>
      <div class="promo">
        <div class="section">
          <img src="assets/whatsapp.png" width="35px" alt="WhatsApp" />
          <p>08565xxxxxxx</p>
        </div>
        <div class="section">
          <img src="assets/instagram.png" width="35px" alt="Instagram" />
          <p>CafeKu Indonesia</p>
        </div>
        <div class="section">
          <img src="assets/tik-tok.png" width="35px" alt="TikTok" />
          <p>CafeKu Indonesia</p>
        </div>
      </div>
    </div>
  </body>
</html>