<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrando Intermediario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Aqui podrás ver el Intermediario que has seleccionado:') }}
                    <table class="table table-bordered table-form">
                        <tr>
                            <td><label for="nombre">Nombre</label></td>
                            <td>{{ $intermediario->nombre }}</td>
                        </tr>
                        <tr>
                            <td><label for="apellidos">Apellidos</label></td>
                            <td>{{ $intermediario->apellidos }}</td>
                        </tr>
                        <tr>
                            <td><label for="correo_electronico">Correo electrónico</label></td>
                            <td>{{ $intermediario->correo_electronico }}</td>
                        </tr>
                        <tr>
                            <td><label for="telefono">Teléfono</label></td>
                            <td>{{ $intermediario->telefono }}</td>
                        </tr>
                        <tr>
                            <td><label for="comision">Comisión (%)</label></td>
                            <td>{{ $intermediario->comision }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('intermediarios.index') }}" class="btn btn-secondary">Volver</a>
                    <a href="{{ route('intermediarios.edit', $intermediario->id) }}" class="btn btn-warning">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
