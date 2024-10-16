    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="object-center">
        @forelse($posts as $post)
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
        {{ $posts->onEachSide(0)->links() }}
    </div>
