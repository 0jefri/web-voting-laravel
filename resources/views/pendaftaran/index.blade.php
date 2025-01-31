<x-app-layout>
    <x-slot name="header">
        <h2 class="flex font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pendaftaran Candidate') }}
        </h2>
    </x-slot>
    <div class="container flex flex-wrap gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Pendaftaran Kandidat</h2>

            <form action="#" method="POST" enctype="multipart/form-data">
                <!-- Nama -->
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-medium mb-2">Nama Lengkap</label>
                    <input type="text"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                    <input type="email"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan email" required>
                </div>

                <!-- Nomor HP -->
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-medium mb-2">Nomor HP</label>
                    <input type="tel"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nomor HP" required>
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-medium mb-2">Alamat</label>
                    <textarea class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        rows="3" placeholder="Masukkan alamat" required></textarea>
                </div>

                <!-- Upload CV -->
                <div class="mb-4">
                    <label class="block text-gray-600 text-sm font-medium mb-2">Upload CV</label>
                    <input type="file"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <!-- Tombol Daftar -->
                <button type="submit"
                    class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition duration-300">
                    Daftar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>