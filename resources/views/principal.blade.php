@extends('plantilla')

@section('contenido')
<!-- Contenido principal -->
<section class="content">
    <h1>Pagina Principal</h1>
    <p>Esta es la página principal de la aplicación de cursos de la DGTIC.</p>

    @if (session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif
    
</section>
@endsection