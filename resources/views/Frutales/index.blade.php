@extends('Administradores.index')
@section('content')
    <div class="container" id="frutales">
        <h3>Palabra clave a buscar en los articulos</h3>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="button" id="button-addon1" @click="buscar">Buscar</button>
            </div>
            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" v-model="palabra">
        </div>

        <pre>
@{{ $data }}
</pre>
    </div>
@endsection
@section("scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
     <script>
         new Vue({
             el: "#frutales",
             created: function () {
                 this.getFrutales();
             },
             data: {
                 api: "{{url("api/frutales")}}",
                    frutales:[],

             },

             methods: {
                 getFrutales: function () {
                     axios.get(this.api).then(response => {
                         this.frutales = response.data;
                     });

                 },
             }
         });
     </script>
@endsection
