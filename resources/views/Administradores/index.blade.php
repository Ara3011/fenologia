@extends('Template.template')
@section('content')
   <div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/frutales')}}">Arboles Frutales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/tipos')}}">Tipos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Eventos Extremos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Cultivos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Forestales Coniferas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Forestales Hojas Anchas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Estados</a>
        </li>
    </ul>
   </div>
        <section class="container">
            @yield("content")
        </section>
    @endsection
