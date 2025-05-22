<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editando Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás editar el Gasto que has seleccionado:') }}
                    <form action="{{ route('gastos.update', $gasto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered table-form">
                            <tr>
                                <td>
                                    <label for="apartamento_id">Apartamento</label>
                                </td>
                                <td>
                                    <select name="apartamento_id" id="apartamento_id" class="form-control" required>
                                        @foreach ($apartamentos as $apartamento)
                                          <option value="{{$apartamento->id}}" {{$gasto->apartamento_id == $apartamento->id ? 'selected' : ''}}>{{$apartamento->direccion}}</option>
                                        @endforeach
                                    </select>
                            </tr>
                            <tr>
                                <td><label for="gasto_factura_sin_iva">Gasto (Sin IVA)</label></td>
                                <td><input type="number" name="gasto_factura_sin_iva" class="form-control"
                                        value="{{ $gasto->gasto_factura_sin_iva }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="concepto_gasto">Concepto</label></td>
                                <td><input type="text" name="concepto_gasto" class="form-control"
                                        value="{{ $gasto->concepto_gasto }} "required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="fecha">Fecha</label></td>
                                <td><input type="date" name="fecha" class="form-control"
                                        value="{{ $gasto->fecha }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="nif_proveedor">NIF Proveedor</label></td>
                                <td><input type="string" name="nif_proveedor" class="form-control"
                                        value="{{ $gasto->nif_proveedor }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="iva">IVA</label></td>
                                <td><input type="number" name="iva" class="form-control"
                                        value="{{ $gasto->iva }}" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pagado">Pagado</label>
                                </td>
                                <td>
                                    <select name="pagado" id="pagado" class="form-control" required>
                                        <option value="1" {{ $gasto->paid ? 'selected' : '' }}>Si</option>
                                        <option value="0" {{ $gasto->paid ? 'selected' : '' }}>No</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
