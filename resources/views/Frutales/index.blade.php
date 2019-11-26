@extends('Administradores.index')
@section('content')

    <div id="frutales" class="row">
        <div class="col-12">
            <h1 class="page-header text-center card-header">Árboles Frutales</h1>
        </div>
        <div class="row">
            <div class="tablita col-12 pt-5 card-body">
                <div class="col-7">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#agregarfrutal">
                        Agregar
                    </button>
                    <table class="table table-hover table">
                        <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th colspan="2">
                                &nbsp;
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="fruta in frutales">
                            <td>@{{ fruta.descripcion }}</td>
                            <td width="10px">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#actualizararbol"
                                        @click="editFrutal(fruta)">Editar
                                </button>
                            </td>
                            <td width="10px">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#Delete" @click="idFrutal=fruta.id_frutal">Eliminar
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
