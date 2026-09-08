@extends('index') {{-- Apunta a tu archivo index.blade.php --}}

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Notas de Estudiantes</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Calificaciones</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>DNI</th>
                            <th>Curso</th>
                            <th>Materia</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notas as $nota)
                        <tr>
                            <td>{{ $nota->estudiante->nombre ?? 'Sin Asignar' }}</td>
                            <td>{{ $nota->estudiante->dni ?? 'N/A' }}</td>
                            <td>{{ $nota->estudiante->curso ?? 'N/A' }}</td>
                            <td>{{ $nota->materia }}</td>
                            <td>
                                <span class="badge {{ $nota->nota >= 6 ? 'badge-success' : 'badge-danger' }}">
                                    {{ $nota->nota }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    console.log('Tabla de notas cargada');
</script>
@endpush