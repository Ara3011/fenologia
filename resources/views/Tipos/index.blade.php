@extends('Administradores.index')
@section('content')

    <div id="tipos" class="row">
        <div class="col-12">
            <h1 class="page-header text-center card-header">Tipos</h1>
        </div>
        <div class="row">
            <div class="col-12 pt-5 tablita card-body">
                <div class="col-7">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#Agregar">
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
                        <tr v-for="tipo in tipos">
                            <td>@{{ tipo.descripcion }}</td>
                            <td width="10px">
                                <button type="button" class="btn btn-warning btn-sm">Editar</button>
                            </td>
                            <td width="10px">
                                <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tablita
        {
            transform:translate(560px);
        }
    </style>

@endsection
@section("scripts")
    <script>

        new Vue({
            el: "#tipos",
            created: function () {
                this.getTipos();
            },
            data: {
                api: "{{url("api/tipos")}}",
                tipos: [],
                descripcion: "",


            },

            methods: {
                getTipos: function () {
                    axios.get(this.api).then(response => {
                        this.tipos = response.data;
                    });

                },
                createTipos: function () {

                    axios.post(this.api, {
                        descripcion: this.descripcion,
                    }).then(response => {
                        this.getPosts();
                    });
                },
            }
        });

    </script>
@endsection


