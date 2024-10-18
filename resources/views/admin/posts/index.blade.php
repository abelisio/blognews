<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gerenciamento de Posts') }}
            <div class="font-bold text-right text-blue-900 p-4">
                <a href="{{ URL::previous() }}">Voltar</a>
            </div>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full mb-10 flex justify-end">
                <a href="{{ route('admin.posts.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar
                    Post</a>
            </div>


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <table class = "w-full bg-white rounded shadow p-4">
                    <thead>
                        <tr>
                            <th class="px-2 py-4 text-left">#</th>
                            <th class="px-2 py-4 text-left">Titulo</th>
                            <th class="px-2 py-4 text-left">Criado</th>
                            <th class="px-2 py-4 text-left">Status</th>
                            <th class="px-2 py-4 text-left">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td class="px-2 py-4 text-left">{{ $post->id }}</td>
                                <td class="px-2 py-4 text-left">{{ $post->title }}</td>
                                <td class="px-2 py-4 text-left">{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
                                <td class="px-2 py-4 text-left">
                                    <span class=" font-bold {{ $post->is_active ? 'text-green-800' : 'text-red-800' }}">
                                        {{ $post->is_active ? 'Ativo' : 'Inativo' }}
                                    </span>
                                </td>
                                <td class="px-2 py-4 text-left flex gap-2">
                                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                                        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">



                                        @csrf
                                        <button
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
                                    </form>



                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Nenhum
                                    post encontrado
                                </td>
                            </tr>
                        @endforelse
                        </tobody>
                </table>
            </div>
            <div class="text-write mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
