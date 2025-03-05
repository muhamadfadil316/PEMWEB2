<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4">Formulir Nilai Siswa</h1>

        <?php
        // Fungsi untuk menghitung nilai akhir
        function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
            define("BOBOT_UTS", 0.30);
            define("BOBOT_UAS", 0.40);
            define("BOBOT_TUGAS", 0.30);
            $nilai_akhir = ($nilai_uts * BOBOT_UTS) + ($nilai_uas * BOBOT_UAS) + ($nilai_tugas * BOBOT_TUGAS);
            return $nilai_akhir;
        }

        // Fungsi untuk menentukan kelulusan
        function kelulusan($nilai){
            define("NILAI_MINIMAL", 60);
            if($nilai >= NILAI_MINIMAL){
                return "Lulus";
            } else {
                return "Tidak Lulus";
            }
        }

        // Cek apakah form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            $mata_kuliah = htmlspecialchars($_POST["mata_kuliah"]);
            $uts = (float)$_POST["uts"];
            $uas = (float)$_POST["uas"];
            $tugas = (float)$_POST["tugas"];

            // Hitung nilai akhir
            $nilai_akhir = hitung_nilai($uts, $uas, $tugas);

            // Tentukan kelulusan
            $status_kelulusan = kelulusan($nilai_akhir);

            // Tampilkan data dan hasil
            echo "<div class='bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4'>";
            echo "<h2 class='text-xl font-bold mb-4'>Data Nilai Siswa:</h2>";
            echo "Nama: " . $nama . "<br>";
            echo "Mata Kuliah: " . $mata_kuliah . "<br>";
            echo "Nilai UTS: " . $uts . "<br>";
            echo "Nilai UAS: " . $uas . "<br>";
            echo "Nilai Tugas: " . $tugas . "<br>";
            echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "<br>"; // Menampilkan 2 angka desimal
            echo "Status Kelulusan: " . $status_kelulusan . "<br>";
            echo "</div>";
        }
        ?>

        <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Nama Siswa
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="nama" type="text" placeholder="Masukkan Nama Siswa" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mata_kuliah">
                    Mata Kuliah
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mata_kuliah" name="mata_kuliah" type="text" placeholder="Masukkan Mata Kuliah" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="uts">
                    Nilai UTS
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="uts" name="uts" type="number" placeholder="Masukkan Nilai UTS" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="uas">
                    Nilai UAS
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="uas" name="uas" type="number" placeholder="Masukkan Nilai UAS" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tugas">
                    Nilai Tugas
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tugas" name="tugas" type="number" placeholder="Masukkan Nilai Tugas" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>

        <p class="text-center text-gray-500 text-xs">
            © 2025 Example Corp. All rights reserved.
        </p>
    </div>
</body>
</html>
