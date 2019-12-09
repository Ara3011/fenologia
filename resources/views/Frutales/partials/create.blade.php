<div class="modal" tabindex="-1" role="dialog" id="agregarfrutal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Árbol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Nombre</label>
                <input type="text" v-model="descripcion">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" @click="createFrutales">Aceptar</button>
            </div>
        </div>
    </div>
</div>

