<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrando Ingreso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás ver el Ingreso que has seleccionado:') }}
                    <table class="table table-bordered table-form">
                        <tr>
                            <td><label for="apartamento_id">Apartamento</label></td>
                            <td>{{ $ingreso->apartamento->direccion }}</td>
                        </tr>
                        <tr>
                            <td><label for="intermediario_id">Intermediario</label></td>
                            <td>{{ $ingreso->intermediario->nombre }} {{ $ingreso->intermediario->apellidos }}</td>
                        </tr>
                        <tr>
                            <td><label for="tarifa_id">Tarifa</label></td>
                            <td>{{ $ingreso->tarifa->nombre_tarifa }} ({{ $ingreso->tarifa->tarifa_aplicada }} %)</td>
                        </tr>
                        <tr>
                            <td><label for="fecha_entrada">Fecha entrada</label></td>
                            <td>{{ $ingreso->fecha_entrada }}</td>
                        </tr>
                        <tr>
                            <td><label for="fecha_salida">Fecha salida</label></td>
                            <td>{{ $ingreso->fecha_salida }}</td>
                        </tr>

                        <tr>
                            <td><label for="numero_noches">Nº Noches</label></td>
                            <td>{{ $ingreso->numero_noches }} noches</td>
                        </tr>
                        <tr>
                            <td><label for="nombre_cliente">Nombre Cliente</label></td>
                            <td>{{ $ingreso->nombre_cliente }}</td>
                        </tr>
                        <tr>
                            <td><label for="nif_cliente">NIF Cliente</label></td>
                            <td>{{ $ingreso->nif_cliente }}</td>
                        </tr>
                        <tr>
                            <td><label for="telefono_cliente">Teléfono Cliente</label></td>
                            <td>{{ $ingreso->telefono_cliente }}</td>
                        </tr>
                        <tr>
                            <td><label for="numero_personas">Nº Personas</label></td>
                            <td>{{ $ingreso->numero_personas }} personas</td>
                        </tr>
                        <tr>
                            <td><label for="total_iva">Total IVA (€)</label></td>
                            <td>{{ $ingreso->total_iva }} €</td>
                        </tr>
                        <tr>
                            <td><label for="total_factura">Total Factura (€)</label></td>
                            <td>{{ $ingreso->total_factura }} €</td>
                        </tr>
                        <tr>
                            <td><label for="observaciones">Observaciones</label></td>
                            <td>{{ $ingreso->observaciones }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('ingresos.index') }}" class="btn btn-secondary">Volver</a>
                    <a href="{{ route('ingresos.edit', $ingreso->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
