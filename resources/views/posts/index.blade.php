    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="max-w-7x1 mx-auto">
        @forelse($posts as $post)
            <div class="block mb-4 p-5">
                @if ($post->thumb)
                    <img src="{{ asset('storage/' . $post->thumb) }}" class="h-96 mb-10"
                        alt="Capa posatgem: {{ $post->title }}">
                @endif
                <h2 class="text-x1 mb-4">{{ $post->title }} / Criado em {{ $post->created_at->diffForHumans() }} </h2>
                <p>
                    {{ $post->description }}
                </p>
                <a href="/posts/{{ $post->slug }}" class=" mt-4 color-blue-600 hover:underline"> Ver posts ...</a>
                <hr>
            </div>
        @empty
            <h3>Nenhum post Encontrado!</h3>
        @endforelse

        {{ $posts->links() }}
    </div>
