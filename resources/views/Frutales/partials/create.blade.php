
<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fa fa-plus"></i>
                <h5 class="modal-title" id="exampleModalLabel">Crear Árboles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Nombre del Árbol Frutal</label>
                <input type="text" v-model="descripcion">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" @click="createFrutales">Aceptar</button>
            </div>
        </div>
    </div>
</div>

