@extends('Template.template')
@section('content')
   <div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/frutales')}}">Arboles Frutales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Equis de </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Holaa</a>
        </li>
    </ul>
   </div>
        <section class="container">
            @yield("content")
        </section>
    @endsection
