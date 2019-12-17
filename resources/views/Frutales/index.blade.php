@extends('Administradores.index')
@section('content')

    <div id="frutales" class="row">
        <div class="clo-md-2">
            <button class="btn btn-success btn-round" data-toggle="modal" data-target="#agregarfrutal">
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
                            <tr v-for="fruta in frutales">
                                <td class="text-center">@{{ fruta.id_frutal }}</td>
                                <td>@{{ fruta.descripcion }}</td>
                                <td class="td-actions text-right">

                                    <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                        <i class="material-icons" data-toggle="modal" data-target="#actualizararbol"
                                           @click="editFrutal(fruta)">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                        <i class="material-icons" data-toggle="modal" data-target="#Delete"
                                           @click="idFrutal=fruta.id_frutal">restore_from_trash</i>
                                    </button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('Frutales.partials.create')
            @include('Frutales.partials.update')
            @include('Frutales.partials.delete')
        </div>

        @endsection
        @section("scripts")
            <script>
                new Vue({
                    el: "#frutales",
                    created: function () {
                        this.getFrutales();
                    },
                    data: {
                        api: "{{url("api/frutal")}}",
                        frutales: [],
                        descripcion: "",
                        editardescripcion: "",
                        idFrutal: null,

                    },

                    methods: {
                        getFrutales: function () {
                            axios.get(this.api).then(response => {
                                this.frutales = response.data;
                            });

                        },
                        createFrutales: function () {

                            axios.post(this.api, {
                                descripcion: this.descripcion,
                            }).then(response => {
                                this.getFrutales();
                            });
                        },
                        deleteFrutal: function () {
                            axios.delete(this.api + "/" + this.idFrutal).then(response => {
                                this.getFrutales();
                            });
                        },
                        editFrutal: function (fruta) {
                            this.editardescripcion = fruta.descripcion;
                            this.idFrutal = fruta.id_frutal;
                        },
                        updateFrutal: function () {
                            axios.put(this.api + "/" + this.idFrutal, {descripcion: this.editardescripcion}).then(response => {
                                this.getFrutales();
                            });
                        },
                    }
                });
            </script>
@endsection
