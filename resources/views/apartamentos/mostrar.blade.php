<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrando Apartamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás ver el apartamento que has seleccionado:') }}
                    <table class="table table-bordered table-form">
                        <tr>
                            <td><label for="direccion">Dirección</label></td>
                            <td>{{ $apartamento->direccion }}</td>
                        </tr>
                        <tr>
                            <td><label for="ciudad">Ciudad</label></td>
                            <td>{{ $apartamento->ciudad }}</td>
                        </tr>
                        <tr>
                            <td><label for="pais">País</label></td>
                            <td>{{ $apartamento->pais }}</td>
                        </tr>
                        <tr>
                            <td><label for="codigo_postal">Código Postal</label></td>
                            <td>{{ $apartamento->codigo_postal }}</td>
                        </tr>
                        <tr>
                            <td><label for="precio_venta">Precio Venta</label></td>
                            <td>{{ $apartamento->precio_venta }}</td>
                        </tr>
                    {{-- <form action="{{ route('apartments.destroy', $apartment->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form> --}}

                </table>
                <a href="{{ route('apartamentos.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('apartamentos.edit', $apartamento->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
