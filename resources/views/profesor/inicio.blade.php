@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
    <h2 class="col">Profesor: {{Auth::user()->name}} Curso: {{Auth::user()->getNivel()}} </h2>
    </div>

<form action="{{url('/pregunta')}}" meth="post">
    <div class="btn btn-primary">Crear preguntas</div>
</form>
<form action="{{url('/exanen')}}" meth="post">
    <div class="btn btn-primary">Crear examen</div>
</form>
<form action="{{url('/resultado')}}" meth="post">
    <div class="btn btn-primary">Resultado alumnos</div>
</form>
<form action="{{url('/tema')}}" meth="post">
    <div class="btn btn-primary">Crear temas</div>
</form>
</div>
@endsection