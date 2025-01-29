<x-app-layout>
    <div class="container">
        <h2 class="text-xl font-semibold text-stone-50">Data User</h2>
        <table class="w-full mt-4 border border-collapse border-gray-300 table-auto text-stone-50">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-gray-300">ID</th>
                    <th class="px-4 py-2 border border-gray-300">Nama</th>
                    <th class="px-4 py-2 border border-gray-300">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $user->id }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $user->name }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
