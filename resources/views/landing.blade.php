<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiResik - Solusi Sampah Kampus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-emerald-100">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-emerald-600 p-2 rounded-lg"><i class="fas fa-recycle text-white"></i></div>
                <span class="text-xl font-bold text-emerald-950">SiResik</span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-semibold text-emerald-900">
                <a href="#" class="hover:text-emerald-600">Tentang</a>
                <a href="#" class="hover:text-emerald-600">Fitur</a>
                <a href="#" class="hover:text-emerald-600">Konten Edukasi</a>
            </div>
            <button class="bg-emerald-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg hover:bg-emerald-700">Login Mahasiswa</button>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="bg-emerald-100 text-emerald-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Inovasi Lingkungan</span>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-emerald-950 mt-6 leading-tight">Wujudkan <span class="text-emerald-600">Kampus Hijau</span> Tanpa Sampah.</h1>
                <p class="text-emerald-800/70 mt-6 text-lg">Kelola sampah Anda, dapatkan poin, dan tukarkan dengan hadiah menarik. Bersama SiResik, lingkungan lebih asri.</p>
                <div class="mt-8 flex gap-4">
                    <button class="bg-emerald-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-emerald-700 transition shadow-xl">Ajukan Penjemputan</button>
                    <button class="border-2 border-emerald-100 bg-white text-emerald-900 px-8 py-4 rounded-2xl font-bold hover:bg-emerald-50">Lapor Sampah Liar</button>
                </div>
            </div>
            <div class="relative">
                <img src="https://picsum.photos/seed/nature/800/600" class="rounded-[2.5rem] shadow-2xl skew-y-3" alt="SiResik Hero">
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl border border-emerald-50">
                    <p class="text-3xl font-bold text-emerald-600">98%</p>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Kepuasan User</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTICS (Data dari Controller) -->
    <section class="py-16 bg-white border-y border-emerald-50">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <p class="text-4xl font-bold text-emerald-950">{{ $stats['total_user'] }}+</p>
                <p class="text-sm font-semibold text-emerald-800/40 uppercase tracking-widest mt-2">Total Mahasiswa</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-bold text-emerald-950">{{ $stats['total_sampah'] }}</p>
                <p class="text-sm font-semibold text-emerald-800/40 uppercase tracking-widest mt-2">Daur Ulang</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-bold text-emerald-950">{{ $stats['poin_terbagi'] }}</p>
                <p class="text-sm font-semibold text-emerald-800/40 uppercase tracking-widest mt-2">Poin Diberikan</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-bold text-emerald-950">{{ $stats['petugas_aktif'] }}</p>
                <p class="text-sm font-semibold text-emerald-800/40 uppercase tracking-widest mt-2">Petugas Siaga</p>
            </div>
        </div>
    </section>

    <!-- FITUR UTAMA -->
    <section class="py-24 px-6 bg-emerald-50/30">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-emerald-950 mb-16">Fitur Unggulan SiResik</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-[2rem] border border-emerald-50 shadow-sm hover:shadow-xl transition">
                    <i class="fas fa-camera text-4xl text-emerald-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Lapor Sampah Liar</h3>
                    <p class="text-gray-500 text-sm">Ambil foto tumpukan sampah, kirim lokasi, petugas segera datang membereskan.</p>
                </div>
                <div class="bg-white p-10 rounded-[2rem] border border-emerald-50 shadow-sm hover:shadow-xl transition">
                    <i class="fas fa-truck-pickup text-4xl text-emerald-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Jadwal Penjemputan</h3>
                    <p class="text-gray-500 text-sm">Sampah di asrama menumpuk? Atur jadwal jemput agar tidak menjadi sarang penyakit.</p>
                </div>
                <div class="bg-white p-10 rounded-[2rem] border border-emerald-50 shadow-sm hover:shadow-xl transition">
                    <i class="fas fa-gift text-4xl text-emerald-600 mb-6"></i>
                    <h3 class="text-xl font-bold mb-4">Redeem Reward</h3>
                    <p class="text-gray-500 text-sm">Tukarkan poin dari hasil timbangan sampah dengan voucher e-wallet atau kantin.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-12 bg-white border-t border-emerald-50">
        <div class="text-center">
            <p class="text-sm text-gray-400">© 2024 SiResik Team - Project Pengelolaan Sampah Kampus</p>
        </div>
    </footer>

</body>
</html>