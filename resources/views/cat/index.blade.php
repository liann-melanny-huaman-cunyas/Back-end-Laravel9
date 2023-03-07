<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Gatomensajeria') }}

            <a href="{{ route('cat.create') }}" class="text-gray-800 font-semibold py-2 px-4 border border-blue-900 hover:bg-blue-600 rounded-md"> Crear</a>

        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center font-bold text-xl p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Mensaje de gatitos") }}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-500">
                    <table class="mb-4">
                        @foreach ($cats as $cat)
                            <tr class="border-b border-gray-500 text-sm">
                                <td class="px-6 py-4">
                                        {{ $cat->name }}
                                </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('cat.edit',$cat) }}" method="PUT" class="text-indigo-800">
                                            Editar
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('cat.destroy',$cat) }}" method="POST"> <!--Ruta a la que enviar-->
                                            <!--La función CSRF de Laravel genera automáticamente
                                                el token CSRF de Laravel para cada sesión de usuario activa.
                                                Este token ayuda a verificar que la solicitud y la aprobación
                                                de la aplicación solo se otorgan al usuario autenticado -->
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"
                                                    value="ELIMINAR"
                                                    class=" bg-white hover:bg-rose-600 text-gray-800 font-semibold py-2 px-4 border border-red-500 rounded-md"
                                                    onclick="return confirm('¿Realmente quiere elminarlo?')"
                                                    >
                                            <!--Evento onclick
                                                Llama a una función cuando se hace clic en un botón:-->

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $cats->links() }}
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
