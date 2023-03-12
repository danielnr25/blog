<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Publicaciones
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b-2 border-gray-400 flex justify-between items-center px-6 p-3">
                    <h2 class="text-gray-900 font-semibold text-xl items-center">Listado de Publicaciones</h2>
                    <!-- Modal toggle -->
                    <button class="block text-white  bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="large-modal">
                        Crear publicación
                    </button>
                </div>

                <div class="bg-white p-6 border-b border-gray-200">
                    <!-- Main modal -->
                    <div id="large-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b-2   border-gray-400 dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Registrar Publicación
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="large-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6 w-[700px]">
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripción</label>
                                        <textarea id="body" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Imagen</label>

                                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t-2 border-gray-400 dark:border-gray-600">
                                        <button data-modal-toggle="large-modal" type="submit" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4  focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-900">Registrar</button>
                                        <button data-modal-toggle="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        #
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center">
                                            Titulo
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center">
                                            Descripción
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center">
                                            Imagen
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center">
                                            Fecha de creación
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <span class="">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $post->title }}
                                    </td>
                                    <td class="py-4 px-5">
                                        <span style="display: inline-block;
                                    width: 180px;
                                    white-space: nowrap;
                                    overflow: hidden !important;
                                    text-overflow: ellipsis;"> {{ $post->body }}</span>
                                    </td>
                                    <td>
                                        <img class="h-auto object-cover max-w-[60px]" src="/storage/{{ $post->image_url }}" alt="image description">
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $post->created_at }}
                                    </td>
                                    <td class="py-4 px-6 flex gap-2">
                                        <a href="{{ route('posts.delete',$post->id) }}" class="font-medium text-gray-50 dark:text-red-500 bg-green-700 p-2 border rounded-md"> Editar</a>
                                        <a href="{{ route('posts.delete',$post->id) }}" class="font-medium text-gray-50 dark:text-red-500 bg-red-700 p-2 border rounded-md"> Borrar</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
