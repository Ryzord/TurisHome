<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gastos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 table-responsive">
                    {{ __('¡Aquí está el listado completo de los Tarifas! Puedes agregar más si quieres:') }}
                    <a href="{{ route('gastos.create') }}" class="btn btn-success">Nuevo Gasto</a>

                    <table
                        class="table table-hover table-bordered table-striped align-middle text-center shadow-sm mt-4">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Apartamento</th>
                                <th>Gasto (Sin IVA)</th>
                                <th>Concepto</th>
                                <th>Fecha</th>
                                <th>NIF Proveedor</th>
                                <th>IVA</th>
                                <th>Total IVA</th>
                                <th>Total Gasto</th>
                                <th>Pagado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($gastos)
                                @foreach ($gastos as $gasto)
                                    <tr>
                                        {{-- <td>{{ $gasto->id }}</td> --}}
                                        <td>{{ $gasto->apartamento->direccion }}</td>
                                        <td>{{ $gasto->gasto_factura_sin_iva }} €</td>
                                        <td>{{ $gasto->concepto_gasto }}</td>
                                        <td>{{ $gasto->fecha }}</td>
                                        <td>{{ $gasto->nif_proveedor }}</td>
                                        <td>
                                            @if ($gasto->iva)
                                                {{ $gasto->iva }} %
                                            @else
                                                0%
                                            @endif
                                        </td>
                                        <td>{{ $gasto->total_iva }}€</td>
                                        <td>{{ $gasto->total_gasto }}€</td>
                                        <td>
                                            @if ($gasto->pagado == 1)
                                                <p>Si</p>
                                            @elseif ($gasto->pagado == 0)
                                                <p>No</p>
                                            @else
                                                <p>Error</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('gastos.show', $gasto->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('gastos.edit', $gasto->id) }}"
                                                class="btn btn-warning">Editar</a>
                                            <form action="{{ route('gastos.destroy', $gasto->id) }}"
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
