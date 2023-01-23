@yield('form')  
<form class="bg-gray-800 ml-[15%] mt-[10%] w-[75%] rounded px-8 pt-6 pb-8 mb-4" action="/post" method="POST">

    @csrf
    <h1 class="text-white underline mt-2 mt-5 text-[2rem]">Create Post</h1>
    <div class="mb-4">
        <label class="block text-gray-400 text-sm font-bold mb-2 mt-2" for="Titulo">
            Titulo de la publicación
        </label>
        {{$errors->first('Titulo')}}
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="Titulo" value="{{old('Titulo')}}"name="Titulo"type="text" placeholder="Ingresa aquí el título de la publicación">
    </div>
    <div class="mb-6">
        <label class="block text-gray-400 text-sm font-bold mb-2" for="Extracto">
            Extracto publicación
        </label>
        {{$errors->first('Extracto')}}

        <input
            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="Extracto" value="{{old('Extracto')}}"name="Extracto" type="text" placeholder="Ingresa un extracto de la publicación">
    </div>
    <div class="mb-8">
        <label class="block text-gray-400 text-sm font-bold mb-2" for="Content">
            Contenido publicación
        </label>
        {{$errors->first('Content')}}

        <input
            class=" shadow h-[10rem] appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="Contenido" value="{{old('Contenido')}}"name="Contenido"type="text" placeholder="Ingresa el contenido completo de la publicación">
    </div>
    <h1 class="text-white text-[1.7rem]">Privacy</h1>
    <div class="mb-10">
        <label for="Privacidad" class="block text-gray-400 text-sm font-bold mb-2">Elige una opción</label>
        <select id="countries" name="Acceso"
            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Elige la privacidad</option>
            <option value="True">Publico</option>
            <option value="False">Privado</option>
        </select>
        <div class="flex items-center mt-4">
            <input id="Comentable" name="Comentable"type="Checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Comentable" class="ml-2 text-sm font-medium text-white dark:text-gray-300">Comentable</label>
            <input id="Caducable"  name="Caducable"type="Checkbox" class="ml-4 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Caducable"  class="ml-2 text-sm font-medium text-white dark:text-gray-300">Caducable</label>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <button
            type="submit"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="button">
            Postear
        </button>

    </div>

</form>
<p class="text-center text-gray-500 text-xs">
    &copy;2023 Rafael Perez. All rights reserved.
</p>
</div>