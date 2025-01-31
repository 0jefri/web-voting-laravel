<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Import Data Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="container flex flex-col gap-4 items-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <label class="block cursor-pointer">
            <input type="file" class="block w-full text-sm text-gray-500 
            file:mr-4 file:py-2 file:px-4
            file:rounded-lg file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-50 file:text-blue-700
            hover:file:bg-blue-100 cursor-pointer" />
        </label>


        <table class="table-auto text-white w-full border-collapse border border-gray-300">
            <thead>
                <tr class="border border-gray-300">
                    <th class="px-4 py-2 border border-gray-300">No</th>
                    <th class="px-4 py-2 border border-gray-300">NIM</th>
                    <th class="px-4 py-2 border border-gray-300">Nama</th>
                    <th class="px-4 py-2 border border-gray-300">Email</th>
                    <th class="px-4 py-2 border border-gray-300">Program Studi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 5; $i++)
                    <tr class="border border-gray-300">
                        <td class="px-4 py-2 border border-gray-300">{{$i}}</td>
                        <td class="px-4 py-2 border border-gray-300">145525</td>
                        <td class="px-4 py-2 border border-gray-300">John Doe</td>
                        <td class="px-4 py-2 border border-gray-300">johndoe@example.com</td>
                        <td class="px-4 py-2 border border-gray-300">Teknik Informaika</td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <button
            class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Save
        </button>
    </div>
</x-app-layout>