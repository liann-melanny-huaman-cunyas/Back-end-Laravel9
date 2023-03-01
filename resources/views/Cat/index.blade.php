<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gatomensajeria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
                                    <a href="" class="text-indigo-800">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    Eliminar
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
