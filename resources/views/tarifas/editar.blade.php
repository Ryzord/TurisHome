<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editando Tarifa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aquí podrás editar el Tarifa que has seleccionado:') }}
                    <form action="{{ route('tarifas.update', $tarifa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="nombre_tarifa">Nombre de la Tarifa</label></td>
                                <td><input type="text" name="nombre_tarifa" class="form-control"
                                        value="{{ $tarifa->nombre_tarifa }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="ciudad">Tarifa Aplicada (%)</label></td>
                                <td><input type="text" name="ciudad" class="form-control"
                                        value="{{ $tarifa->tarifa_aplicada }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="pais">Coste de la Tarifa (€)</label></td>
                                <td><input type="text" name="pais" class="form-control" step="0.01"
                                        value="{{ $tarifa->coste_tarifa }}" required>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('tarifas.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Guardar cambios</button>
                        <form action="{{ route('tarifas.destroy', $tarifa->id) }}" method="POST"
                            style="display:inline-block;>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            class="btn btn-danger">Eliminar</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
