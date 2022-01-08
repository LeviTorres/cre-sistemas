@extends('layouts.layout')
@section('title','Gracias por contactarnos')
@section('content')
<div class="container_thanks">
    <div class="breadcrumbs">
            <a href="/">
                <h1>Inicio</h1>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="/contact">
                <h1>Contacto</h1>
                <i class="fas fa-chevron-right"></i>
            </a>
            <h1>Mensaje enviado</h1>
    </div> 
    <div class="container_information_thanks">
        <h1>GRACIAS POR CONTACTARNOS</h1>
        <button><a href="/">Volver a la pagina de inicio</a></button>
    </div>
</div>

@endsection