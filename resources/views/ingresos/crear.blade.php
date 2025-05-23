<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando Ingreso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Introduzca los datos del Ingreso que desea crear:') }}

                    <form action="{{ route('ingresos.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="apartamento_id">Apartamento</label></td>
                                <td>
                                    <select name="apartamento_id" id="apartamento_id" class="form-control" required>
                                        @foreach ($apartamentos as $apartamento)
                                            <option value="{{$apartamento->id}}">{{$apartamento->direccion}}
                                        @endforeach
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="intermediario_id">Intermediario</label></td>
                                <td>
                                    <select name="intermediario_id" id="intermediario_id" class="form-control" required>
                                        @foreach ($intermediarios as $intermediario)
                                            <option value="{{$intermediario->id}}">{{$intermediario->nombre}} {{$intermediario->apellidos}}
                                        @endforeach
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label for="fecha_entrada">Fecha entrada</label></td>
                                <td><input type="date" name="fecha_entrada" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="fecha_salida">Fecha salida</label></td>
                                <td><input type="date" name="fecha_salida" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="nombre_cliente">Nombre Cliente</label></td>
                                <td><input type="text" name="nombre_cliente" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="telefono_cliente">Teléfono Cliente</label></td>
                                <td><input type="text" name="telefono_cliente" class="form-control" required></td>
                            </tr>

                            <tr>
                                <td><label for="nif_cliente">NIF Cliente</label></td>
                                <td><input type="text" name="nif_cliente" class="form-control" required></td>
                            </tr>

                            <tr>
                                <td><label for="numero_personas">NºPersonas</label></td>
                                <td><input type="number" name="numero_personas" class="form-control" required></td>
                            </tr>

                            <tr>
                                <td><label for="tarifa_id">Tarifa (%)</label></td>
                                <td>
                                    <select name="tarifa_id" id="tarifa_id" class="form-control" required>
                                        @foreach ($tarifas as $tarifa)
                                            <option value="{{$tarifa->id}}">{{$tarifa->nombre_tarifa}} ({{$tarifa->tarifa_aplicada}}%)
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="descuento">Descuento (%)</label></td>
                                <td><input type="number" name="descuento" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="observaciones">Observaciones</label></td>
                                <td><input type="text" name="observaciones" class="form-control"></td>
                            </tr>
                        </table>
                        <a href="{{ route('ingresos.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Crear</button>
                        <button type="reset" class="btn btn-warning m-3">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
