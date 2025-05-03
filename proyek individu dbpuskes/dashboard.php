<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Puskesmas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              200: '#bae6fd',
              300: '#7dd3fc',
              400: '#38bdf8',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              800: '#075985',
              900: '#0c4a6e',
            },
            secondary: {
              50: '#f0fdf4',
              100: '#dcfce7',
              200: '#bbf7d0',
              300: '#86efac',
              400: '#4ade80',
              500: '#22c55e',
              600: '#16a34a',
              700: '#15803d',
              800: '#166534',
              900: '#14532d',
            }
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
    }
    .card-hover {
      transition: all 0.3s ease;
      transform: translateY(0);
    }
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    .dashboard-header {
      background: linear-gradient(135deg, #0ea5e9 0%, #22c55e 100%);
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen">
  <!-- Header -->
  <header class="dashboard-header text-white shadow-lg">
    <div class="container mx-auto px-6 py-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0">
          <h1 class="text-3xl font-bold">Sistem Informasi Puskesmas</h1>
          <p class="text-blue-100 mt-2">Manajemen data pasien, paramedik, dan kelurahan</p>
        </div>
        <div class="flex items-center space-x-4">
          <div class="bg-white/20 backdrop-blur-sm rounded-full p-2">
            <i class="fas fa-bell text-xl"></i>
          </div>
          <div class="flex items-center space-x-2">
            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
              <i class="fas fa-user-md"></i>
            </div>
            <span class="font-medium">Admin</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-8 -mt-10">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
      <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
        <div class="p-6 flex items-center">
          <div class="bg-blue-100 p-4 rounded-full mr-4">
            <i class="fas fa-user-injured text-blue-600 text-xl"></i>
          </div>
          <div>
            <p class="text-gray-500">Total Pasien Periksa</p>
            <h3 class="font-bold">Lebih dari 1,248 sudah diperiksa disini</h3>
          </div>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
        <div class="p-6 flex items-center">
          <div class="bg-green-100 p-4 rounded-full mr-4">
            <i class="fas fa-user-md text-green-600 text-xl"></i>
          </div>
          <div>
            <p class="text-gray-500">Total Paramedik</p>
            <h3 class="font-bold">Lebih dari 48 paramedik yang ada disini</h3>
          </div>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
        <div class="p-6 flex items-center">
          <div class="bg-purple-100 p-4 rounded-full mr-4">
            <i class="fas fa-map-marked-alt text-purple-600 text-xl"></i>
          </div>
          <div>
            <p class="text-gray-500">Kelurahan</p>
            <h3 class="text-2xl font-bold">12</h3>
          </div>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
        <div class="p-6 flex items-center">
          <div class="bg-yellow-100 p-4 rounded-full mr-4">
            <i class="fas fa-notes-medical text-yellow-600 text-xl"></i>
          </div>
          <div>
            <p class="text-gray-500">Total Pemeriksaan</p>
            <h3 class="font-bold">Lebih dari 3,784 pasien yang diperiksa</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="mb-10">
      <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
        <i class="fas fa-bolt text-yellow-500 mr-2"></i> Quick Actions
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="pasien/create.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group">
          <div class="p-6">
            <div class="bg-blue-100 p-4 rounded-full w-14 h-14 flex items-center justify-center mb-4 group-hover:bg-blue-200 transition">
              <i class="fas fa-user-plus text-blue-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-lg mb-1">Tambah Pasien</h3>
            <p class="text-gray-500 text-sm">Input data pasien baru</p>
          </div>
        </a>
        
        <a href="paramedik/create.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group">
          <div class="p-6">
            <div class="bg-green-100 p-4 rounded-full w-14 h-14 flex items-center justify-center mb-4 group-hover:bg-green-200 transition">
              <i class="fas fa-user-md text-green-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-lg mb-1">Tambah Paramedik</h3>
            <p class="text-gray-500 text-sm">Input data tenaga medis</p>
          </div>
        </a>
        
        <a href="kelurahan/create.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group">
          <div class="p-6">
            <div class="bg-purple-100 p-4 rounded-full w-14 h-14 flex items-center justify-center mb-4 group-hover:bg-purple-200 transition">
              <i class="fas fa-map-marker-alt text-purple-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-lg mb-1">Tambah Kelurahan</h3>
            <p class="text-gray-500 text-sm">Input wilayah kelurahan</p>
          </div>
        </a>
        
        <a href="periksa/create.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group">
          <div class="p-6">
            <div class="bg-yellow-100 p-4 rounded-full w-14 h-14 flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition">
              <i class="fas fa-file-medical text-yellow-600 text-xl"></i>
            </div>
            <h3 class="font-semibold text-lg mb-1">Tambah Periksa</h3>
            <p class="text-gray-500 text-sm">Input data pemeriksaan</p>
          </div>
        </a>
      </div>
    </div>

    <!-- Data Management -->
    <div class="mb-10">
      <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
        <i class="fas fa-database text-primary-600 mr-2"></i> Data Management
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="pasien/index.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group border-l-4 border-blue-500">
          <div class="p-6">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="font-semibold text-lg mb-1">Data Pasien</h3>
                <p class="text-gray-500 text-sm">1,248 records</p>
              </div>
              <div class="bg-blue-100 p-2 rounded-lg group-hover:bg-blue-200 transition">
                <i class="fas fa-user-injured text-blue-600"></i>
              </div>
            </div>
            <div class="mt-4 flex justify-between items-center">
              <span class="text-xs text-blue-600 bg-blue-50 px-2 py-1 rounded">Updated today</span>
              <i class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transition"></i>
            </div>
          </div>
        </a>
        
        <a href="paramedik/index.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group border-l-4 border-green-500">
          <div class="p-6">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="font-semibold text-lg mb-1">Data Paramedik</h3>
                <p class="text-gray-500 text-sm">48 records</p>
              </div>
              <div class="bg-green-100 p-2 rounded-lg group-hover:bg-green-200 transition">
                <i class="fas fa-user-md text-green-600"></i>
              </div>
            </div>
            <div class="mt-4 flex justify-between items-center">
              <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded">Updated today</span>
              <i class="fas fa-chevron-right text-gray-400 group-hover:text-green-500 transition"></i>
            </div>
          </div>
        </a>
        
        <a href="kelurahan/index.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group border-l-4 border-purple-500">
          <div class="p-6">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="font-semibold text-lg mb-1">Data Kelurahan</h3>
                <p class="text-gray-500 text-sm">12 records</p>
              </div>
              <div class="bg-purple-100 p-2 rounded-lg group-hover:bg-purple-200 transition">
                <i class="fas fa-map-marked-alt text-purple-600"></i>
              </div>
            </div>
            <div class="mt-4 flex justify-between items-center">
              <span class="text-xs text-purple-600 bg-purple-50 px-2 py-1 rounded">Updated 2 days ago</span>
              <i class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transition"></i>
            </div>
          </div>
        </a>
        
        <a href="periksa/index.php" class="bg-white rounded-xl shadow-md overflow-hidden card-hover group border-l-4 border-yellow-500">
          <div class="p-6">
            <div class="flex justify-between items-start">
              <div>
                <h3 class="font-semibold text-lg mb-1">Data Periksa</h3>
                <p class="text-gray-500 text-sm">3,784 records</p>
              </div>
              <div class="bg-yellow-100 p-2 rounded-lg group-hover:bg-yellow-200 transition">
                <i class="fas fa-file-medical text-yellow-600"></i>
              </div>
            </div>
            <div class="mt-4 flex justify-between items-center">
              <span class="text-xs text-yellow-600 bg-yellow-50 px-2 py-1 rounded">Updated today</span>
              <i class="fas fa-chevron-right text-gray-400 group-hover:text-yellow-500 transition"></i>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-10">
      <div class="p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
          <i class="fas fa-history text-primary-600 mr-2"></i> Recent Activity
        </h2>
        <div class="space-y-4">
          <div class="flex items-start pb-4 border-b border-gray-100">
            <div class="bg-blue-100 p-2 rounded-full mr-4">
              <i class="fas fa-user-plus text-blue-600"></i>
            </div>
            <div>
              <p class="font-medium">Pasien baru ditambahkan</p>
              <p class="text-gray-500 text-sm">Budi Santoso - 10 menit yang lalu</p>
            </div>
          </div>
          <div class="flex items-start pb-4 border-b border-gray-100">
            <div class="bg-green-100 p-2 rounded-full mr-4">
              <i class="fas fa-notes-medical text-green-600"></i>
            </div>
            <div>
              <p class="font-medium">Pemeriksaan baru dicatat</p>
              <p class="text-gray-500 text-sm">Ani Wijaya - 1 jam yang lalu</p>
            </div>
          </div>
          <div class="flex items-start pb-4 border-b border-gray-100">
            <div class="bg-purple-100 p-2 rounded-full mr-4">
              <i class="fas fa-user-md text-purple-600"></i>
            </div>
            <div>
              <p class="font-medium">Paramedik baru ditambahkan</p>
              <p class="text-gray-500 text-sm">Dr. Siti Rahayu - 3 jam yang lalu</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="bg-yellow-100 p-2 rounded-full mr-4">
              <i class="fas fa-map-marker-alt text-yellow-600"></i>
            </div>
            <div>
              <p class="font-medium">Data kelurahan diperbarui</p>
              <p class="text-gray-500 text-sm">Kelurahan Menteng - Kemarin</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 py-6">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-500 text-sm mb-4 md:mb-0">
          &copy; <?= date('Y') ?> Sistem Informasi Puskesmas - Muhamad Fadil
        </p>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-500 hover:text-primary-600 transition">
            <i class="fas fa-question-circle"></i> Bantuan
          </a>
          <a href="#" class="text-gray-500 hover:text-primary-600 transition">
            <i class="fas fa-cog"></i> Pengaturan
          </a>
          <a href="#" class="text-gray-500 hover:text-primary-600 transition">
            <i class="fas fa-sign-out-alt"></i> Keluar
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>