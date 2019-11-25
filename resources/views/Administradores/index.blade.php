@extends('Template.template')
@section('content')
   <div class="contenedor card card-group">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/frutales')}}">Arboles Frutales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/tipos')}}">Tipos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/eventosextremos')}}">Eventos Extremos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/cultivos')}}">Cultivos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/coniferas')}}">Forestales Coniferas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/hojasanchas')}}">Forestales Hojas Anchas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/estados')}}">Estados</a>
        </li>
    </ul>
   </div>
   <style>
       li
       {
           padding: 10px 10px;
           transform:translate(120px);

       }

   </style>
        <section class="container">
            @yield("content")
        </section>
    @endsection
