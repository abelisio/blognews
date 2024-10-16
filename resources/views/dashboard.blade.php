<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 divide-x">
                    <div class=" p-7 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('admin.posts.index') }}"
                            class=" grid justify-items-center text-3xl px-4 py-2 shadow rounded
                                                text-write text-bold bg-blue-400 hover:bg-blue-600
                                                transition ease-in-ou dutation-300">Listar
                            Post</a>
                    </div>
                    <div class="p-7 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('admin.posts.create') }}"
                            class=" grid justify-items-center  text-3xl px-4 py-2 shadow rounded
                                                text-write text-bold bg-green-400 hover:bg-green-600
                                                transition ease-in-ou dutation-300">Criar
                            Post</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
