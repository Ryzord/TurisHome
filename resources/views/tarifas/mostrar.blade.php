<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrando Tarifa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás ver el tarifa que has seleccionado:') }}
                    <table class="table table-bordered table-form">
                        <tr>
                            <td><label for="nombre_tarifa">Nombre de la Tarifa</label></td>
                            <td>{{ $tarifa->nombre_tarifa }}</td>
                        </tr>
                        <tr>
                            <td><label for="tarifa_aplicada">Tarifa Aplicada (%)</label></td>
                            <td>{{ $tarifa->tarifa_aplicada }} (%)</td>
                        </tr>
                        <tr>
                            <td><label for="coste_tarifa">Coste de la Tarifa (€)</label></td>
                            <td>{{ $tarifa->coste_tarifa }} €</td>
                        </tr>
                    </table>
                    <a href="{{ route('tarifas.index') }}" class="btn btn-secondary">Volver</a>
                    <a href="{{ route('tarifas.edit', $tarifa->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
