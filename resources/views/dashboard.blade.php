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
                                    <form method="GET" action="{{ route('calcularTrimestre') }}"
                                        class="row g-3 align-items-center">
                                        <div class="col-auto">
                                            <label for="trimestre" class="col-form-label">Seleccionar Trimestre:</label>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <select name="trimestre" id="trimestre" class="form-select">
                                                    <option value="0">Todos los
                                                        Trimestres</option>
                                                    <option value="1">Primer
                                                        Trimestre (Ene-Mar)</option>
                                                    <option value="2">Segundo
                                                        Trimestre (Abr-Jun)</option>
                                                    <option value="3">Tercer
                                                        Trimestre (Jul-Sep)</option>
                                                    <option value="4">Cuarto
                                                        Trimestre (Oct-Dic)</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-outline-info">Calcular</button>
                                            </div>
                                        </div>
                                    </form>

                                    @if (isset($totalTrimestreIngresos) && isset($totalTrimestreGastos))
                                        <hr>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="alert alert-primary">
                                                    <strong>IVA Repercutido:</strong>
                                                    {{ number_format($totalTrimestreIngresos, 2, ',', '.') }} €
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-secondary">
                                                    <strong>IVA Soportado:</strong>
                                                    {{ number_format($totalTrimestreGastos, 2, ',', '.') }} €
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    class="alert alert-{{ $trimestreLiquidacion >= 0 ? 'danger' : 'success' }}">
                                                    <strong>Resultado:</strong>
                                                    {{ $trimestreLiquidacion >= 0 ? 'Debes pagar->' : 'Te compensan con->' }}
                                                    {{ number_format($trimestreLiquidacion, 2, ',', '.') }} €
                                                </div>
                                            </div>
                                        </div>
                                    @elseif(request()->has('trimestre'))
                                        <div class="alert alert-warning mt-3">
                                            No se encontraron datos para el trimestre seleccionado.
                                        </div>
                                    @endif
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
                                                {{ isset($totalIngresos) ? number_format($totalIngresos, 2, ',', '.') : '--' }}
                                                €
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
                                                {{ isset($totalGastos) ? number_format($totalGastos, 2, ',', '.') : '--' }}
                                                €
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
