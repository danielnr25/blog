@include('layouts.master')

@include('partials.app.navbar')

<div class="container px-6 py-10 mx-auto cursor-pointer">
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2">
        @foreach ($posts as $post)
        <div class="block max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="w-full h-56 object-cover rounded-lg lg:w-96" src="/storage/{{ $post->image_url }}" alt="" />
            <div class="p-5">
                <a href="{{ route('posts.view',$post->id) }}">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                </a>
                <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">{{ __('Autor: Daniel Nuñez Rodas') }}.</p>
                <span class="text-sm text-gray-500 dark:text-gray-300">Publicado: {{ \Carbon\Carbon::parse($post->created_at)->format('F Y h:i:s A') }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
