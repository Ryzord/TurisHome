<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ingresos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 table-responsive">
                    {{ __('¡Aquí está el listado completo de los Ingresos! Puedes agregar más si quieres:') }}
                    <a href="{{ route('ingresos.create') }}" class="btn btn-success">Nuevo Ingreso</a>

                    <table
                        class="table table-hover table-bordered table-striped align-middle text-center shadow-sm mt-4">
                        <thead>
                            <tr>
                                <th>Intermediario</th>
                                <th>Apartamento</th>
                                {{-- <th>F.entrada</th>
                                <th>F.salida</th> --}}
                                <th>NºNoches</th>
                                <th>Cliente</th>
                                {{-- <th>NIF Cliente</th> --}}
                                {{-- <th>Tel. Cliente</th> --}}
                                <th>Nº Personas</th>
                                {{-- <th>Tarifa (%)</th> --}}
                                {{-- <th>Dto (%)</th> --}}
                                {{-- <th>Total IVA (€)</th> --}}
                                <th>Total Factura (€)</th>
                                {{-- <th>Observaciones</th> --}}
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($ingresos)
                                @foreach ($ingresos as $ingreso)
                                    <tr>
                                        <td>{{ $ingreso->intermediario->nombre }} {{ $ingreso->intermediario->apellidos }}</td>
                                        <td>{{ $ingreso->apartamento->direccion }}</td>
                                        {{-- <td>{{ $ingreso->fecha_entrada }}</td>
                                        <td>{{ $ingreso->fecha_salida }}</td> --}}
                                        <td>{{ $ingreso->numero_noches }}</td>
                                        <td>{{ $ingreso->nombre_cliente }}</td>
                                        {{-- <td>{{ $ingreso->nif_cliente }}</td> --}}
                                        {{-- <td>{{ $ingreso->telefono_cliente }}</td> --}}
                                        <td>{{ $ingreso->numero_personas }}</td>
                                        {{-- <td>{{ $ingreso->tarifa->nombre_tarifa }} ({{ $ingreso->tarifa->tarifa_aplicada }} %)</td> --}}
                                        {{-- <td>{{ $ingreso->descuento }} %</td> --}}
                                        {{-- <td>{{ $ingreso->total_iva }} €</td> --}}
                                        <td>{{ $ingreso->total_factura }} €</td>
                                        {{-- <td>{{ $ingreso->observaciones }}</td> --}}

                                        <td>
                                            <a href="{{ route('ingresos.show', $ingreso->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('ingresos.edit', $ingreso->id) }}"
                                                class="btn btn-warning">Editar</a>
                                            <form action="{{ route('ingresos.destroy', $ingreso->id) }}"
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
