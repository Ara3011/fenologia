@extends('Administradores.index')
@section('content')

    <div id="eventos_extremos" class="row">
        <div class="col-12">
            <h1 class="page-header text-center card-header">Eventos Extremos</h1>
        </div>
        <div class="row">
            <div class="tablita col-12 pt-5 card-body">
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
                        <tr v-for="evento in eventos_extremos">
                            <td>@{{ evento.descripcion }}</td>
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
            transform:translate(540px);
        }
    </style>

@endsection
@section("scripts")
    <script>

        new Vue({
            el: "#eventos_extremos",
            created: function () {
                this.getEventosExtremos();
            },
            data: {
                api: "{{url("api/eventosextremos")}}",
                eventos_extremos: [],
                descripcion: "",


            },

            methods: {
                getEventosExtremos: function () {
                    axios.get(this.api).then(response => {
                        this.eventos_extremos = response.data;
                    });

                },
                createFrutales: function () {

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
