@extends('Administradores.index')
@section('content')

    <div id="frutales" class="row">
        <div class="col-12">
            <h1 class="page-header">Árboles Frutales</h1>
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
                    @include('Frutales.partials.create')

                </div>
            </div>
        </div>
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
                api: "{{url("api/tipos")}}",
                tipos: [],
                descripcion: "",


            },

            methods: {
                getFrutales: function () {
                    axios.get(this.api).then(response => {
                        this.tipos = response.data;
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
