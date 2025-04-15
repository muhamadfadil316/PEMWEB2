<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Program Studi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Program Studi</h2>
        <form action="proses_prodi.php" method="POST">
            <label for="kode">Kode Prodi:</label>
            <input type="text" name="kode" id="kode" required>

            <label for="nama">Nama Prodi:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="kaprodi">Kaprodi:</label>
            <input type="text" name="kaprodi" id="kaprodi" required>

            <button type="submit" name="simpan">Simpan</button>
        </form>
        <div class="link">
            <a href="list_prodi.php">Lihat Data Prodi</a>
        </div>
    </div>

</body>
</html>
