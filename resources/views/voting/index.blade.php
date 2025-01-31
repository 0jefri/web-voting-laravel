<x-app-layout>
    <x-slot name="header">
        <h2 class="flex font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Voting Candidate') }}
        </h2>
    </x-slot>
    <div class="container flex flex-wrap gap-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @for ($i = 1; $i <= 3; $i++)
            <div class="max-w-sm bg-white rounded overflow-hidden shadow-lg">
                <img class="w-full"
                    src="https://asset.kompas.com/crops/nAmgCj0OMe7tkgbTp36LW6RDq68=/74x0:1154x720/1200x800/data/photo/2023/12/12/65782d32dfa40.png"
                    alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Prabowo - Gibran</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                        perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="flex flex-col px-6 py-4">
                    <button
                        class="bg-transparent rounded-full hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent">
                        VOTE
                    </button>
                </div>
            </div>
        @endfor
    </div>
</x-app-layout>