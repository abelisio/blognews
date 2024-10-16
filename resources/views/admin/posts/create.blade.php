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
                    <div class="w-full mb-6" bg-white p-2>
                        <label for="" class="block text=ehite mb-2 textt-black">Capa Postagem</label>
                        <input type="file" class="W-full rounded" name="thumb">
                        @error('thumb')
                            <div class="mt-2 w-full rounded border boder-red-700 bg-red-200 text-red-700 font-bold p-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>




                    <div class="w-full flex justify-end">
                        <button
                            class="mt-10 px-4 py-2 shadow rounded text-2xl
                                                text-write text-bold bg-green-700 hover:bg-green-900
                                                transition ease-in-ou dutation-300">Criar
                            Post</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
