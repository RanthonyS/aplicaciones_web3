<x-layout>
    <h2>Editar Materias</h2>
    </x-layout>
    <div>
@foreach ($materias as $materia )
<h4>
    {{ $materia['nombre'] }}
</h4>
<h6>
Estado: {{ $materia ['status'] }}
</h6>
    
@endforeach
        
    </div>
