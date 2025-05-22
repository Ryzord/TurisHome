<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrando Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás ver el Gasto que has seleccionado:') }}
                    <table class="table table-bordered table-form">
                        <tr>
                            <td><label for="apartamento_id">Apartamento</label></td>
                            <td>{{ $gasto->apartamento->direccion }}</td>
                        </tr>
                        <tr>
                            <td><label for="gasto_factura_sin_iva">sto (Sin IVA)</label></td>
                            <td>{{ $gasto->gasto_factura_sin_iva }}</td>
                        </tr>
                        <tr>
                            <td><label for="concepto_gasto">Concepto</label></td>
                            <td>{{ $gasto->concepto_gasto }}</td>
                        </tr>
                        <tr>
                            <td><label for="fecha">Fecha</label></td>
                            <td>{{ $gasto->fecha }}</td>
                        </tr>
                        <tr>
                            <td><label for="nif_proveedor">NIF Proveedor</label></td>
                            <td>{{ $gasto->nif_proveedor }}</td>
                        </tr>
                        <tr>
                            <td><label for="iva">IVA</label></td>
                            <td>{{ $gasto->iva }}</td>
                        </tr>
                        <tr>
                            <td><label for="total_iva">Total IVA</label></td>
                            <td>{{ $gasto->total_iva }}</td>
                        </tr>
                        <tr>
                            <td><label for="total_gasto">Total Gasto</label></td>
                            <td>{{ $gasto->total_gasto }}</td>
                        </tr>
                        <tr>
                            <td><label for="pagado">Pagado</label></td>
                            <td>{{ $gasto->pagado }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Volver</a>
                    <a href="{{ route('gastos.edit', $gasto->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
