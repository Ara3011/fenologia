@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
        </div>
    </nav>




    <div class="contenedor card card-group">
    <ul class="nav nav-tabs">

    </ul>
   </div>

   <main class="py-4">
       @yield('content')
   </main>
    @endsection

