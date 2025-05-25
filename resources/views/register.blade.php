<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Relawan Muda - Pendaftaran Akun</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  
  <!-- Navbar -->
  <nav class="bg-red-600 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Judul di kiri -->
        <span class="font-bold text-xl text-white">Relawan Muda</span>
        
        <!-- Navigasi di kanan -->
        <div class="space-x-4">
          <a href="/" class="text-white hover:text-gray-200">Beranda</a>
          <a href="/kegiatan" class="text-white hover:text-gray-200">Pilihan Kegiatan</a>
          <a href="/daftar" class="text-white hover:text-gray-200">Pendaftaran</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Form Pendaftaran -->
  <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-red-600">Pendaftaran Akun Relawan</h2>
    <form action="{{ route('register.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-700">Nama Lengkap</label>
        <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Kata Sandi</label>
        <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      </div>
      <div class="mb-6">
        <label class="block text-gray-700">Konfirmasi Kata Sandi</label>
        <input type="password" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
      </div>
      <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">Daftar</button>
    </form>
  </div>
</body>
</html>
