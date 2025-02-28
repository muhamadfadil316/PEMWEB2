<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data yang Dikirim</h1>

        <?php
        //periksa metode pengiriman data (POST atau GET)
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //ambil data dari POST
            $nama = isset($_POST['nama']) ? $_POST['nama'] :'';
            $email = isset($_POST['email']) ? $_POST['email'] :'';
            $pesan = isset($_POST['pesan']) ? $_POST['pesan'] :'';

            $datauser = array(
                'nama'=> $nama,
                'email'=> $email,
                'pesan'=> $pesan
            );

            echo "<h2> Data yang Dikirim melalui POST : </h2>";
            echo '<ul class="list-group">';

            foreach ($datauser as $key => $value) {
                if (!empty($value)) {
                    echo '<li class="list-group-item"><strong>'.ucfirst($key) . '</strong>' .htmlspecialchars($value) .'</li>';
            }
            else{
                echo '<li class="list-group-item"><strong>'.ucfirst($key) . '</strong> Data Kosong</li>';
            }
        }
    }

        
        ?>
    </div>

    
</body>
</html>