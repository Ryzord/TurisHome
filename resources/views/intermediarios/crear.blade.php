<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando Intermediario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Introduzca los datos del Intermediario que desea crear:') }}

                    <form action="{{ route('intermediarios.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="nombre">Nombre</label></td>
                                <td><input type="text" name="nombre" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="apellidos">Apellidos</label></td>
                                <td><input type="text" name="apellidos" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="correo_electronico">Correo electrónico</label></td>
                                <td><input type="text" name="correo_electronico" class="form-control" step="0.01" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="telefono">Teléfono</label></td>
                                <td><input type="text" name="telefono" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="comision">Comisión (%)</label></td>
                                <td><input type="text" name="comision" class="form-control" required></td>
                            </tr>
                        </table>
                        <a href="{{ route('intermediarios.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Crear</button>
                        <button type="reset" class="btn btn-warning m-3">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
