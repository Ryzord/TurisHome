<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold text-primary">
                            📊 Resumen General
                        </h1>
                        <p class="text-muted fs-5">Resumen de indicadores clave y liquidación trimestral de IVA</p>
                    </div>
                    {{-- Sección: Liquidación Trimestral de IVA --}}
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    Liquidación Trimestral de IVA
                                </div>
                                <div class="card-body">
                                    {{-- <form method="GET" action="{{ route('iva.liquidacion') }}" class="row g-3 align-items-center"> --}}
                                    <div class="col-auto">
                                        <label for="trimestre" class="col-form-label">Seleccionar Trimestre:</label>
                                    </div>
                                    <div class="col-auto">
                                        <select name="trimestre" id="trimestre" class="form-select">
                                            <option value="1" {{ request('trimestre') == 1 ? 'selected' : '' }}>1º
                                                Trimestre (Ene-Mar)</option>
                                            <option value="2" {{ request('trimestre') == 2 ? 'selected' : '' }}>2º
                                                Trimestre (Abr-Jun)</option>
                                            <option value="3" {{ request('trimestre') == 3 ? 'selected' : '' }}>3º
                                                Trimestre (Jul-Sep)</option>
                                            <option value="4" {{ request('trimestre') == 4 ? 'selected' : '' }}>4º
                                                Trimestre (Oct-Dic)</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-info">Calcular</button>
                                    </div>
                                    </form>

                                    {{-- @if (isset($ivaRepercutido) && isset($ivaSoportado)) --}}
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="alert alert-primary">
                                                <strong>IVA Repercutido:</strong>
                                                {{-- {{ number_format($ivaRepercutido, 2) }} € --}}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="alert alert-secondary">
                                                <strong>IVA Soportado:</strong>
                                                {{-- {{ number_format($ivaSoportado, 2) }} € --}}
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            {{-- <div class="alert alert-{{ $resultadoIva >= 0 ? 'success' : 'danger' }}"> --}}
                                            <strong>Resultado:</strong>
                                            {{-- {{ number_format($resultadoIva, 2) }} €
                                ({{ $resultadoIva >= 0 ? 'A pagar' : 'A compensar' }}) --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- @elseif(request()->has('trimestre'))
                        <div class="alert alert-warning mt-3">
                            No se encontraron datos para el trimestre seleccionado.
                        </div>
                    @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="row">

                            <!-- Total Ingresos -->
                            <div class="col-md-6 mb-4">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Ingresos:</h5>
                                        <p class="card-text fs-4">
                                            {{ isset($ventasTotales) ? number_format($ventasTotales, 2) : '--' }} €
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Gastos -->
                            <div class="col-md-6 mb-4">
                                <div class="card text-white bg-danger shadow">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Gastos:</h5>
                                        <p class="card-text fs-4">
                                            {{ $porcentajeCrecimiento ?? '--' }} €
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
