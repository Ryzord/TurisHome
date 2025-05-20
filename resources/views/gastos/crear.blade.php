<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Introduzca los datos del Gasto que desea crear:') }}

                    <form action="{{ route('gastos.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="apartamento_id">Apartamento</label></td>
                                <td>
                                    <select name="apartamento_id" id="apartamento_id" class="form-control" required>
                                        @foreach ($apartamentos as $apartamento)
                                          <option value="{{$apartamento->id}}">{{$apartamento->direccion}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="gasto_factura_sin_iva">Gasto (Sin IVA)</label></td>
                                <td><input type="number" name="gasto_factura_sin_iva" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="concepto_gasto">Concepto</label></td>
                                <td><input type="text" name="concepto_gasto" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="fecha">Fecha</label></td>
                                <td><input type="date" name="fecha" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="nif_proveedor">NIF Proveedor</label></td>
                                <td><input type="text" name="nif_proveedor" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="iva">IVA</label></td>
                                <td><input type="number" name="iva" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><label for="pagado">Pagado</label></td>
                                <td>
                                    <select name="pagado" id="pagado" class="form-control" required>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success mx-3">Crear</button>
                        <button type="reset" class="btn btn-warning">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
