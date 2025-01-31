<x-app-layout>
    <x-slot name="header">
        <h2 class="flex font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Candidate') }}
        </h2>
    </x-slot>
    <div class="container flex flex-col gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Candidate...." required />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
        <table class="table-auto text-white w-full border-collapse border border-gray-300">
            <thead>
                <tr class="border border-gray-300">
                    <th class="px-4 py-2 border border-gray-300">Code</th>
                    <th class="px-4 py-2 border border-gray-300">Rank</th>
                    <th class="px-4 py-2 border border-gray-300">Paslon</th>
                    <th class="px-4 py-2 border border-gray-300">Status</th>
                    <th class="px-4 py-2 border border-gray-300">Total Vote</th>
                    <th class="px-4 py-2 border border-gray-300">aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr class="border border-gray-300">
                        <td class="px-4 py-2 border border-gray-300">M1</td>
                        <td class="px-4 py-2 border border-gray-300">{{$i}}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <div>agus</div>
                            <div>agus Buntung</div>
                        </td>
                        <td class="px-4 py-2 border border-gray-300">Pending</td>
                        <td class="px-4 py-2 border border-gray-300">-</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <div class="flex gap-4">
                                <a href="/penilaian">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Penilaian
                                    </button>
                                </a>
                                <button
                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                    </svg>
                                    <span>Show File</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="flex text-white justify-center space-x-2">
            <a href="#" class="px-4 py-2 border rounded-md">Prev</a>
            <a href="#" class="px-4 py-2 border rounded-md">1</a>
            <a href="#" class="px-4 py-2 border rounded-md bg-gray-200">2</a>
            <a href="#" class="px-4 py-2 border rounded-md">3</a>
            <a href="#" class="px-4 py-2 border rounded-md">Next</a>
        </div>

    </div>
</x-app-layout>