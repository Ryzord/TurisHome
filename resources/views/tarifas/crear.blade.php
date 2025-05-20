<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando Tarifa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Introduzca los datos de la Tarifa que desea crear:') }}

                    <form action="{{ route('tarifas.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="nombre_tarifa">Nombre de la Tarifa</label></td>
                                <td><input type="text" name="nombre_tarifa" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="tarifa_aplicada">Tarifa Aplicada (%)</label></td>
                                <td><input type="text" name="tarifa_aplicada" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="coste_tarifa">Coste de la Tarifa (€)</label></td>
                                <td><input type="text" name="coste_tarifa" class="form-control" step="0.01" required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success m-3">Crear</button>
                        <button type="reset" class="btn btn-warning m-3">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
