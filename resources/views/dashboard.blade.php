<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 content-center">
        <a href="http://hsdemo.test/" class="bg-indigo-500 px-5 py-3 rounded-md hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 text-white font-normal font-mono" aria-current="page">Home</a>
    </div>
</x-app-layout>
