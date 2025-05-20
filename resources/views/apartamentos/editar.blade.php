<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editando Apartamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás editar el Apartamento que has seleccionado:') }}
                    <form action="{{ route('apartamentos.update', $apartamento->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="direccion">Dirección</label></td>
                                <td><input type="text" name="direccion" class="form-control"
                                        value="{{ $apartamento->direccion }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="ciudad">Ciudad</label></td>
                                <td><input type="text" name="ciudad" class="form-control"
                                        value="{{ $apartamento->ciudad }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="pais">País</label></td>
                                <td><input type="text" name="pais" class="form-control" step="0.01"
                                        value="{{ $apartamento->pais }} "required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="codigo_postal">Código Postal</label></td>
                                <td><input type="text" name="codigo_postal" class="form-control"
                                        value="{{ $apartamento->codigo_postal }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="precio_venta">Precio Venta</label></td>
                                <td><input type="text" name="precio_venta" class="form-control"
                                        value="{{ $apartamento->precio_venta }}" required></td>
                            </tr>
                        </table>
                        <a href="{{ route('apartamentos.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Guardar cambios</button>
                        <form action="{{ route('apartamentos.destroy', $apartamento->id) }}" method="POST"
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
