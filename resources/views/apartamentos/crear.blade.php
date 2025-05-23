<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando Apartamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Introduzca los datos del Apartamento que desea crear:') }}

                    <form action="{{ route('apartamentos.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="direccion">Dirección</label></td>
                                <td><input type="text" name="direccion" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="ciudad">Ciudad</label></td>
                                <td><input type="text" name="ciudad" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="pais">País</label></td>
                                <td><input type="text" name="pais" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="codigo_postal">Código Postal</label></td>
                                <td><input type="text" name="codigo_postal" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="precio_venta">Precio Venta</label></td>
                                <td><input type="number" name="precio_venta" class="form-control" required></td>
                            </tr>
                        </table>
                        <a href="{{ route('apartamentos.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Crear</button>
                        <button type="reset" class="btn btn-warning m-3">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
