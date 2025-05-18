<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Intermediarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 table-responsive">
                    {{ __('¡Aquí está el listado completo de los Intermediarios! Puedes agregar más si quieres:') }}
                    {{-- <a href="{{ route('intermediarios.create') }}" class="btn btn-success">Nuevo Intermediario</a> --}}

                    <table
                        class="table table-hover table-bordered table-striped align-middle text-center shadow-sm mt-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Correo electrónico</th>
                                <th>Teléfono</th>
                                <th>Comision (%)</th>
                                {{-- <th>Creado el</th>
                                <th>Actualidado el</th> --}}
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($apartamentos)
                                @foreach ($apartamentos as $apartamento)
                                    <tr>
                                        <td>{{ $apartamento->id }}</td>
                                        <td>{{ $apartamento->direccion }}</td>
                                        <td>{{ $apartamento->ciudad }}</td>
                                        <td>{{ $apartamento->pais }}</td>
                                        <td>{{ $apartamento->codigo_postal }}</td>
                                        <td>{{ $apartamento->precio_venta }}€</td>

                                        <td>
                                            <a href="{{ route('apartamentos.show', $apartamento->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('apartamentos.edit', $apartamento->id) }}"
                                                class="btn btn-warning">Editar</a>
                                            <form action="{{ route('apartamentos.destroy', $apartamento->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
