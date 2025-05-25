<nav class="bg-red-500 shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center h-16">
            <!-- Judul di sebelah kiri -->
            <div class="text-xl font-bold text-white">
                Relawan Muda
            </div>

            <!-- Link Navigasi di sebelah kanan -->
            <div class="ml-auto space-x-4">
                <a href="{{ url('/') }}" class="text-white hover:text-gray-200">Beranda</a>
                <a href="{{ url('/pilihankegiatan') }}" class="text-white hover:text-gray-200">Pilihan Kegiatan</a>
                <a href="{{ route('register.create') }}" class="text-white hover:text-gray-200">Register</a>
            </div>
        </div>
    </div>
</nav>
