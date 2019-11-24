@extends('Administradores.index')
@section('content')

    <div id="estados" class="row">
        <div class="col-12">
            <h1 class="page-header">Estados</h1>
        </div>
        <div class="row">
            <div class="col-12">
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
                        <tr v-for="estado in estados">
                            <td>@{{ estado.descripcion }}</td>
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

@endsection
@section("scripts")
    <script>

        new Vue({
            el: "#estados",
            created: function () {
                this.getEstados();
            },
            data: {
                api: "{{url("api/estados")}}",
                estados: [],
                descripcion: "",


            },

            methods: {
                getEstados: function () {
                    axios.get(this.api).then(response => {
                        this.estados = response.data;
                    });

                },
                createEstados: function () {

                    axios.post(this.api, {
                        descripcion: this.descripcion,
                    }).then(response => {
                        this.getEstados();
                    });
                },
            }
        });

    </script>
@endsection

