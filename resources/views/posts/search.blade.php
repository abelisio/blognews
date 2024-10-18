    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="object-center">
        <form class="max-w-md mx-auto p-5" action="" method="get">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search" name="search" value=""
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Busca por titulo .." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-400 dark:focus:ring-blue-400">Burcar</button>
            </div>

        </form>

        <div class="w-full mb-10 flex justify-end">
            <a href="/"
                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Voltar</a>




        </div>


        @forelse($search as $post)
            <div class="container mx-auto object-center px-5 lg:max-w-screen-sm ">
                <div class="flex flex-col justify-between flex-1">
                    <div class="block mb-4 p-5 shadow-lg rounded-md">
                        @if ($post->thumb)
                            <img class="object-cover h-100 w-100 rounded-md style="max-width:80%;"
                                src="{{ asset('storage/' . $post->thumb) }}"
                                class="block h-post-card-image bg-cover bg-center  bg-no-repeat w-full px-5 lg:max-w-screen-sm"
                                alt="Capa posatgem: {{ $post->title }}">
                        @endif
                        <h2 class="font-sans font-bold text-3xl leading-normal block mb-6">{{ $post->title }} </h2>
                        <p>
                            {{ $post->description }}
                        </p>

                        <p class="p-3 text-right">
                            Criado
                            em {{ $post->created_at->diffForHumans() }}
                        </p>
                        <a href="/posts/{{ $post->slug }}" class="font-bold text-right text-red-900 p-4"">
                            Leia Mais +
                            ...</a>
                        <hr>
                    </div>
                @empty
                    <h3>Nenhum post Encontrado!</h3>
        @endforelse

    </div>
    </div>
    </div>
    <div class="py-4">
        {{ $search->onEachSide(0)->links() }}
    </div>
