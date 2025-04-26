<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landing Page Proyek Pemrograman Web</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-indigo-600">WebProject</a>
            <div class="space-x-6 hidden md:flex">
                <a href="#features" class="text-gray-700 hover:text-indigo-600">Fitur</a>
                <a href="#about" class="text-gray-700 hover:text-indigo-600">Tentang</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600">Kontak</a>
            </div>
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile menu -->
        <div id="menu" class="hidden md:hidden px-6 pb-4">
            <a href="#features" class="block py-2 text-gray-700 hover:text-indigo-600">Fitur</a>
            <a href="#about" class="block py-2 text-gray-700 hover:text-indigo-600">Tentang</a>
            <a href="#contact" class="block py-2 text-gray-700 hover:text-indigo-600">Kontak</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20">
        <div class="container mx-auto px-6 text-center md:text-left md:flex md:items-center md:justify-between">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di Proyek Pemrograman Web</h1>
                <p class="mb-6 text-lg md:text-xl">Membangun website modern dan responsif dengan PHP dan Tailwind CSS.</p>
                <a href="#contact" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100 transition">Hubungi Kami</a>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img src="https://cdn-icons-png.flaticon.com/512/919/919825.png" alt="Web Development" class="mx-auto md:mx-0 w-64 md:w-96" />
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Fitur Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white p-8 rounded shadow hover:shadow-lg transition">
                    <div class="mb-4 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.866 0-7 3.134-7 7a7 7 0 0014 0c0-3.866-3.134-7-7-7z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0L8 8m4-4l4 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Responsif & Modern</h3>
                    <p>Menggunakan Tailwind CSS untuk desain yang cepat dan responsif di semua perangkat.</p>
                </div>
                <div class="bg-white p-8 rounded shadow hover:shadow-lg transition">
                    <div class="mb-4 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12m0 0l-5.25-5M15 12H3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">PHP Dinamis</h3>
                    <p>Backend menggunakan PHP untuk membuat konten dinamis dan mudah dikembangkan.</p>
                </div>
                <div class="bg-white p-8 rounded shadow hover:shadow-lg transition">
                    <div class="mb-4 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9M4 9h16M4 15h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mudah Dikustomisasi</h3>
                    <p>Struktur kode sederhana yang mudah dipahami dan dikembangkan sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-3xl font-bold mb-6">Tentang Proyek Ini</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                Proyek ini dibuat sebagai contoh landing page menggunakan PHP dan Tailwind CSS.  
                Tujuannya untuk memberikan template dasar yang mudah dikembangkan untuk berbagai kebutuhan website.  
                Anda dapat menambahkan fitur, konten, dan mengubah desain sesuai keinginan.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-indigo-600 text-white py-20">
        <div class="container mx-auto px-6 max-w-lg">
            <h2 class="text-3xl font-bold mb-6 text-center">Hubungi Kami</h2>
            <form action="submit_contact.php" method="POST" class="bg-indigo-700 p-8 rounded shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block mb-2 font-semibold">Nama</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-300" placeholder="Masukkan nama Anda" />
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-300" placeholder="Masukkan email Anda" />
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 font-semibold">Pesan</label>
                    <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-300" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="w-full bg-white text-indigo-600 font-bold py-3 rounded hover:bg-gray-100 transition">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6 text-center">
        &copy; <?php echo date("Y"); ?> WebProject. All rights reserved.
    </footer>

    <!-- Script untuk toggle menu mobile -->
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
