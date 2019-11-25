@extends('Administradores.index')
@section('content')

    <div id="cultivos" class="row">
        <div class="col-12">
            <h1 class="page-header text-center card-header">Cultivos</h1>
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
                        <tr v-for="cultivo in cultivos">
                            <td>@{{ cultivo.descripcion }}</td>
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
            el: "#cultivos",
            created: function () {
                this.getCultivos();
            },
            data: {
                api: "{{url("api/cultivos")}}",
                cultivos: [],
                descripcion: "",


            },

            methods: {
                getCultivos: function () {
                    axios.get(this.api).then(response => {
                        this.cultivos = response.data;
                    });

                },
                createCultivos: function () {

                    axios.post(this.api, {
                        descripcion: this.descripcion,
                    }).then(response => {
                        this.getCultivos();
                    });
                },
            }
        });

    </script>
@endsection
