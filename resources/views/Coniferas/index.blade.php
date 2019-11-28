@extends('layouts.app')
@section('content')

    <div id="coniferas" class="row">
        <div class="clo-md-2">
            <button class="btn btn-success btn-round" data-toggle="modal" data-target="#agregar">
                <i class="material-icons">loupe</i>Agregar
            </button>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success">

                    <h4 class="card-title">Árboles Frutales</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nombre</th>

                            <th class="text-right">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="conifera in coniferas">
                            <td class="text-center">@{{ conifera.id_forestalconif }}</td>
                            <td>@{{ conifera.descripcion }}</td>
                            <td class="td-actions text-right">

                                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                    <i class="material-icons" data-toggle="modal" data-target="#actualizar"
                                       @click="editConiferas(conifera)">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                    <i class="material-icons" data-toggle="modal" data-target="#Delete"
                                       @click="editConiferas(conifera)">restore_from_trash</i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @include('Coniferas.partials.create')
                @include('Coniferas.partials.update')
                @include('Coniferas.partials.delete')
            </div>
            @endsection
            @section("scripts")
                <script>
                    new Vue({
                        el: "#coniferas",
                        created: function () {
                            this.getConiferas();
                        },
                        data: {
                            api: "{{url("api/coniferas")}}",
                            coniferas: [],
                            descripcion: "",
                            editardescripcion:"",
                            idConifera: null,
                        },

                        methods: {
                            getConiferas: function () {
                                axios.get(this.api).then(response => {
                                    this.coniferas = response.data;
                                });

                            },
                            createConiferas: function () {

                                axios.post(this.api, {
                                    descripcion: this.descripcion,
                                }).then(response => {
                                    this.getConiferas();
                                });
                            },
                            deleteConiferas: function () {
                                axios.delete(this.api + "/" + this.idConifera).then(response => {
                                    this.getConiferas();
                                });
                            },
                            editConiferas: function (conifera) {
                                this.editardescripcion = conifera.descripcion;
                                this.idConifera = conifera.id_forestalconif;
                            },
                            updateConiferas: function () {
                                axios.put(this.api + "/" + this.idConifera, {descripcion: this.editardescripcion}).then(response => {
                                    this.getConiferas();
                                });
                            },
                        }
                    });
                </script>
@endsection
