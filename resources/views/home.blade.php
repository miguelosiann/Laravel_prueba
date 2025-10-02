@extends('layouts.app')

@section('title', 'Página de Inicio')

@push('styles')
<style>
    .custom-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .hero-text {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
</style>
@endpush

@section('content')

    <h1>Hola Mundo</h1>
    <p>Esta es una vista de home</p>


    <x-alert2 type="info" 
    title="Alerta Info" 
    message="Hola Mundo" 
    />



@endsection


