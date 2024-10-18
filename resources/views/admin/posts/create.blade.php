<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cria Posts') }}
            <div class="font-bold text-right text-blue-900 p-4">
                <a href="{{ URL::previous() }}">Voltar</a>
            </div>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-5">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full mb-6"><label for="" class="block text=ehite mb-2">Título</label>
                        <input type="text" class="w-full rounded" name="title">
                        @error('title')
                            <div class="mt-2 w-full rounded border boder-red-700 bg-red-200 text-red-700 font-bold p-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="w-full mb-6"><label for="" class="block text=ehite mb-2">Descrição</label>
                        <input type="text" class="w-full rounded"name="description">
                    </div>
                    <div class="w-full mb-6"><label for="" class="block text=ehite mb-2">Conteúdo</label>
                        <input type="text" class="w-full rounded" name="body">
                        @error('body')
                            <div class="mt-2 w-full rounded border boder-red-700 bg-red-200 text-red-700 font-bold p-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6"><label for="" class="block text=ehite mb-2">Status</label>
                        <div class="flex justify-start gap-3">
                            <div><input type="radio" class="" name="is_active" value="1" checked> Ativo
                            </div>
                            <div> <input type="radio" class="" name="is_active" value="0"> Inativo
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900"> Capa
                            Postagem</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Carregar um arquivo</span>
                                        <input id="file-upload" name="thumb"type="file" class="sr-only">
                                    </label>
                                    @error('thumb')
                                        <div
                                            class="mt-2 w-full rounded border boder-red-700 bg-red-200 text-red-700 font-bold p-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <p class="pl-1">ou arraste e solte</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG até 10MB</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>



        <div class="w-full flex justify-end p-3">
            <button
                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Criar
                Post</button>

        </div>
        </form>
    </div>

    </div>
    </div>
</x-app-layout>
