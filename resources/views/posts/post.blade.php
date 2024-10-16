    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="p-5 container mx-auto object-center px-5 lg:max-w-screen-lg bg-fixed ">
        <div class="shadow-md">
            <p class="font-sans font-bold text-5xl p-4"> {{ $post->title }} </p>
            <div class="box-border md:box-content">
                <img class=" border border-slate-300 object-cover max-h-100 max-w-100 p-3 rounded-md style="max-width:0%;"
                    src="{{ asset('storage/' . $post->thumb) }}"
                    class="block h-post-card-image bg-cover bg-center  bg-no-repeat w-full px-5 lg:max-w-screen-sm"
                    alt="Capa posatgem: {{ $post->title }}">
                <p class="leading-normal text-justify  p-5 ">
                    {{ $post->body }}
                </p>
            </div>
            <h2 class="text-right italic "> Criado em
                {{ $post->created_at->diffForHumans() }} </h2>
        </div>
        <div class="font-bold text-right text-blue-900 p-4">
            <a href="{{ URL::previous() }}">Voltar</a>
        </div>
    </div>
