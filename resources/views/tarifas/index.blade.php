<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tarifas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 table-responsive">
                    {{ __('¡Aquí está el listado completo de los Tarifas! Puedes agregar más si quieres:') }}
                    <a href="{{ route('tarifas.create') }}" class="btn btn-success">Nueva Tarifa</a>

                    <table
                        class="table table-hover table-bordered table-striped align-middle text-center shadow-sm mt-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de la Tarifa</th>
                                <th>Tarifa Aplicada (%)</th>
                                <th>Coste de la Tarifa (€)</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($tarifas)
                                @foreach ($tarifas as $tarifa)
                                    <tr>
                                        <td>{{ $tarifa->id }}</td>
                                        <td>{{ $tarifa->nombre_tarifa }}</td>
                                        <td>{{ $tarifa->tarifa_aplicada }} %</td>
                                        <td>{{ $tarifa->coste_tarifa }} €</td>
                                        <td>
                                            <a href="{{ route('tarifas.show', $tarifa->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('tarifas.edit', $tarifa->id) }}"
                                                class="btn btn-warning">Editar</a>
                                            <form action="{{ route('tarifas.destroy', $tarifa->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
