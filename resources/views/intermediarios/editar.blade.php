<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editando Intermediario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás editar el Intermediario que has seleccionado:') }}
                    <form action="{{ route('intermediarios.update', $intermediario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered table-form">
                            <tr>
                                <td><label for="nombre">Nombre</label></td>
                                <td><input type="text" name="nombre" class="form-control"
                                        value="{{ $intermediario->nombre }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="apellidos">Apellidos</label></td>
                                <td><input type="text" name="apellidos" class="form-control"
                                        value="{{ $intermediario->apellidos }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="correo_electronico">Correo electrónico</label></td>
                                <td><input type="text" name="correo_electronico" class="form-control"
                                        value="{{ $intermediario->correo_electronico }} "required>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="telefono">Teléfono</label></td>
                                <td><input type="text" name="telefono" class="form-control"
                                        value="{{ $intermediario->telefono }}" required></td>
                            </tr>
                            <tr>
                                <td><label for="comision">Comisión (%)</label></td>
                                <td><input type="number" name="comision" class="form-control"
                                        value="{{ $intermediario->comision }}" required></td>
                            </tr>
                        </table>
                        <a href="{{ route('intermediarios.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-success m-3">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
